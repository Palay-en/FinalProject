<?php

namespace App\Http\Controllers;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InstructorController extends Controller
{   
    use HasFactory;
    public function citInstructors() {
        $instructors = Instructor::where('department', 'CIT')->get();// Fetch all instructors
        return view('departments.citdept', compact('instructors')); // Pass to view
    }
    public function cteInstructors() {
        $instructors = Instructor::where('department', 'CTE')->get();// Fetch all instructors
        return view('departments.ctedept', compact('instructors')); // Pass to view
    }public function cbmInstructors() {
        $instructors = Instructor::where('department', 'CBM')->get();// Fetch all instructors
        return view('departments.cbmdept', compact('instructors')); // Pass to view
    }public function ccjeInstructors() {
        $instructors = Instructor::where('department', 'CCJE')->get();// Fetch all instructors
        return view('departments.ccjedept', compact('instructors')); // Pass to view
    }
    
    

    public function addInstructor(Request $request){
        $incomingFields = $request->validate([
            'inst_name' => 'required|string|max:255',
            'department' => 'required|string|max:255'
        ]);

        Instructor::create($incomingFields);
        return redirect('/dashboard');
    }

    
}