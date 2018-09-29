<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IssueRequest;
use App\Http\Controllers\Controller;
use App\Issue;
use App\Photo;

class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues= Issue::paginate(6);
        return view('issues.index', ['issues' => $issues]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        flash()->gif('MEMES', 'Only way to make adding new issues to your website bareable...');
        return view('issues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IssueRequest $request)
    {
        $issue = Issue::create([
          'name' => $request->input('name'),
          'deadline' => $request->input('deadline'),
          'priority' => $request->input('priority'),
          'description' => $request->input('description'),
        ]);

        if($issue){
          flash()->success('Success!!!', 'Issue successfully created.. Well done?!?');
          return redirect()->route('issues.index');
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
    public function show(Issue $issue)
    {
        $issue = Issue::find($issue->id);

        return view('issues.show', ['issue'=>$issue]);
    }

    public function addPhoto($id, Request $request, Issue $issue)
    {
      $this->validate($request, [
        'photo' => 'require|mimes:jpg,jpeg,png'
      ]);

      Photo::fromForm($request->file('photo'));

      Issue::where($issue->id)->addPhoto($photo);

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
    public function destroy(Issue $issue)
    {
      $findIssue = Issue::find($issue->id);
      if($findIssue->delete()){
         //redirect
         flash()->success('Success!!!', 'Issue fixed!! Wooooooooooo!');
         return redirect()->route('issues.index');
     }
     flash()->success('!! Error !!', 'Issue unable to be removed.');
     return back();

    }
}
