<?php

namespace App\Http\Controllers\API;

use App\Question;
use App\User;
use App\Answer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $users = User::first();
        $questions = Question::latest()->paginate(5);
        $answers = Answer::all();
        $question = Question::all();
        $answer = DB::select('select * from answers where question_id = ?',[2]);
        $countAswer = count($answer);
        $popularQuestions = DB::table('questions')
        ->select('statement',DB::raw('COUNT(statement) AS occurrences'))
        ->groupBy('statement')
        ->orderBy('occurrences','DESC')
        ->limit(10)
        ->get();

        return view('welcome',compact('questions','users','answers','countAswer','popularQuestions'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $request->validate([
        'statement' => 'required',

    ]);

    $question = new Question;
    $question->statement = request('statement');
    $question->user_id = Auth::user()->id;
    $question->save();
    return redirect()->route('questions.index')
                        ->with('success','Product created successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
