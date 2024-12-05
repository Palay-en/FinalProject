<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    // The index method for displaying the dashboard
    public function index()
    {
        return view('evaluation');  // Return the dashboard view
    }

    public function submitEvaluation(Request $request)
{
    $user = auth()->user(); // Current evaluator
    $instructorId = $user->instructor_id; // Get instructor_id from the user
    
    $request->validate([
        'subject-1' => 'required|integer|between:1,5',
        'subject-2' => 'required|integer|between:1,5',
        'subject-3' => 'required|integer|between:1,5',
        'subject-4' => 'required|integer|between:1,5',
        'subject-5' => 'required|integer|between:1,5',
        'presentation-1' => 'required|integer|between:1,5',
        'presentation-2' => 'required|integer|between:1,5',
        'presentation-3' => 'required|integer|between:1,5',
        'presentation-4' => 'required|integer|between:1,5',
        'presentation-5' => 'required|integer|between:1,5',
        'interaction-1' => 'required|integer|between:1,5',
        'interaction-2' => 'required|integer|between:1,5',
        'interaction-3' => 'required|integer|between:1,5',
        'interaction-4' => 'required|integer|between:1,5',
        'interaction-5' => 'required|integer|between:1,5',
        'management-1' => 'required|integer|between:1,5',
        'management-2' => 'required|integer|between:1,5',
        'management-3' => 'required|integer|between:1,5',
        'performance-1' => 'required|integer|between:1,5',
        'performance-2' => 'required|integer|between:1,5',
        'performance-3' => 'required|integer|between:1,5',
        'performance-4' => 'required|integer|between:1,5',
        'performance-5' => 'required|integer|between:1,5',
        // Add validation for all other inputs similarly
    ]);

    // Initialize counts
    $counts = [
        'one' => 0,
        'two' => 0,
        'three' => 0,
        'four' => 0,
        'five' => 0,
    ];

    // Count the submitted ratings
    foreach ($request->all() as $key => $value) {
        if (in_array($value, [1, 2, 3, 4, 5])) {
            switch ($value) {
                case 1:
                    $counts['one']++;
                    break;
                case 2:
                    $counts['two']++;
                    break;
                case 3:
                    $counts['three']++;
                    break;
                case 4:
                    $counts['four']++;
                    break;
                case 5:
                    $counts['five']++;
                    break;
            }
        }
    }

    // Add evaluation record
    $evaluation = new Evaluation();
    $evaluation->user_id = $user->id; // Current evaluator
    $evaluation->instructor_id = $instructorId;
    $evaluation->score_ones = $counts['one'];
    $evaluation->score_twos = $counts['two'];
    $evaluation->score_threes = $counts['three'];
    $evaluation->score_fours = $counts['four'];
    $evaluation->score_fives = $counts['five'];
    $evaluation->save();

    // Update instructor's summary counts
    $instructor = Instructor::find($instructorId);
    $instructor->total_evaluations += 1;
    $instructor->score_ones += $counts['one'];
    $instructor->score_twos += $counts['two'];
    $instructor->score_threes += $counts['three'];
    $instructor->score_fours += $counts['four'];
    $instructor->score_fives += $counts['five'];
    $instructor->save();
    

    // Get the currently authenticated user
        $user = auth()->user();

    // Update the can_evaluate column to 0
        $user->can_evaluate = 0;
        $user->instructor_id = NULL;
    // Save the changes
        $user->save();
    return redirect()->back()->with('success', 'Evaluation submitted successfully!');
}

}
