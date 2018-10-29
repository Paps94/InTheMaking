<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskManagmentIssueRequest;
use App\Http\Controllers\Controller;
use App\TaskManagmentIssue;
use App\Photo;
use Carbon\Carbon;

class TaskManagmentIssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tmissues= TaskManagmentIssue::paginate(6);
        return view('tmissues.index', ['tmissues' => $tmissues]);
        flash()->overlay('Issue or Fix?', 'Come on man... Please tell me this one is a fix...', 'question');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        flash()->gif('Seriously?!?!?', 'Another one??? Come on... I mean this is getting ridiculous!!! I can\'t take much more of this..');
        return view('tmissues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskManagmentIssueRequest $request)
    {
        $tmissue = TaskManagmentIssue::create([
          'name' => $request->input('name'),
          'deadline' => $request->input('deadline'),
          'priority' => $request->input('priority'),
          'description' => $request->input('description'),
        ]);

        if($tmissue){
          flash()->success('Success!!!', 'Task successfully created.. Get started!');
          return redirect()->route('tmissues.index');
        }
          flash()->error('Error!!!', 'You cannot even do this right...');
          return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TaskManagmentIssue $tmissue)
    {
        flash()->overlay_dual('Hmmm...', 'Is this the issue we are fixing today?', 'Yeap', 'Probably not');
        $tmissue = TaskManagmentIssue::find($tmissue->id);
        return view('tmissues.show', ['tmissue'=>$tmissue]);

    }

    /**
     * Show the form for editing the specified resource
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function destroy(TaskManagmentIssue $tmissue)
    {
      $findTMIssue = TaskManagmentIssue::find($tmissue->id);
      if($findTMIssue->delete()){
         //redirect
         flash()->success('Success!!!', 'Task completed!! You the man!');
         return redirect()->route('tmissues.index');
     }
     flash()->success('!! Error !!', 'Task unable to be removed.');
     return back();

    }
}
