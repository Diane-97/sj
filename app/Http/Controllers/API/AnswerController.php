<?php

namespace App\Http\Controllers\API;
use App\Question;
use App\Answer;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'statement' => 'required',
           
        ]);
    
        $answer = new Answer;
        $answer->statement = request('statement');
        $answer->question_id = request('questionId');
        $answer->user_id = request('userId');
        $answer->save();
       
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
       $question = Question::all()->find($id);
       $users = User::all();
       $answers = DB::select('select * from answers where question_id = ?', [$id]);
        $countAswer = count($answers);
        $popularQuestions = DB::table('questions')
        ->select('statement',DB::raw('COUNT(statement) AS occurrences'))
        ->groupBy('statement')
        ->orderBy('occurrences','DESC')
        ->limit(5)
        ->get();
       return view('viewanswerpage',compact('question','answers','users','countAswer','popularQuestions'));
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
