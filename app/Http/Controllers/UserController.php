<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{  
    public function giveEvaluationAccess(Request $request)
{
    $request->validate([
        'evt_inst' => 'required',
        'yearlevel' => 'required',
        'section' => 'required',
    ]);

    $instructorId = $request->input('evt_inst'); // Instructor ID from the form
    $yearLevel = $request->input('yearlevel');
    $section = $request->input('section');

    User::where('year_level', $yearLevel)
        ->where('section', $section)
        ->update(['can_evaluate' => 1,
                'instructor_id'=> $instructorId
    ]);

    return redirect('/dashboard');
}


    public function login(Request $request){
        $incomingFields = $request->validate([
            'idlogin' => 'required',
            'loginpassword' => 'required'
        ]);
    
        if (auth()->attempt(['stud_id' => $incomingFields['idlogin'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
    
            // Check if the user is an admin
            if ($incomingFields['idlogin'] === 'admin' && $incomingFields['loginpassword'] === 'adminadmin') {
                return redirect()->route('dashboard'); // Redirect to dashboard if admin
            } else {
                return redirect()->route('evaluation'); // Redirect to evaluation page if not admin
            }
        }

        return back()->withErrors([
            'login' => 'The provided credentials do not match our records.'
        ]);
    }
    


    public function logout(){
        auth()->logout();
        return redirect('/');
    }


    public function register(Request $request){

        $incomingFields = $request->validate([
            'stud_id' => ['required','min:3','max:30',Rule::unique('users', 'stud_id'),'regex:/^[a-zA-Z0-9\-]+$/'],
            'department'=>['required'],
            'year_level' => ['required'],
            'section' => ['required'],
            'password' => ['required', 'min:8', 'max:30']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        session()->flash('success', 'Registration successful!');
        // auth()->login($user);
        return redirect('/');
    }

}
