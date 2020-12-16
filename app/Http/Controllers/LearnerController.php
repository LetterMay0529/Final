<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learner;

class LearnerController extends Controller
{
    public function index() {
        $learners = Learner::get();
        return view('learners.index', compact('learners'));
    }

    public function create() {
        return view('learners.create');
    }
    public function store(Request $request){
        $this->validate($request, [
            'user_id' => 'required|numeric',
            'level' =>'required',
            'status' => 'required',
        ]);

        Learn::create($request->all());

        return redirect('/learners')->with('info','New learner is added.');
    }

    public function edit(Learner $learner){
        return view('learners.edit' , compact('learner'));
    }

    public function update(Learner $learner, Request $request){
        $this->validate($request,[
            'user_id' => 'required|numeric',
            'level' =>'required',
            'status' => 'required'
        ]);

        $learner->update($request->all());

        return redirect("/learners/$learner->id")->with('info',"Learner has been updated.");

    }
   
    public function delete(Request $request){
        $learnerId = $request['learner_id'];
        $learner = Learner::find($learnerId);
        

        $learner->delete();

        return redirect('/learners')->with('info', "The learner has been deleted.");

    }
}
