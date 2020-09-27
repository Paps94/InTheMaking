<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BirthdayRequest;
use App\Http\Controllers\Controller;
use App\Birthday;
use Carbon\Carbon;

class BirthdaysController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $birthdays = Birthday::paginate(10);
      return view('birthdays.index', ['birthdays' => $birthdays]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('birthdays.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(BirthdayRequest $request)
  {
      $birthday = Birthday::create([
        'name' => $request->input('name'),
        'birthday' => $request->input('birthday'),
        'gender' => $request->input('gender'),
        'relation' => $request->input('relation'),
      ]);

      if($birthday){
        flash()->success('Success!!!', 'Another birthday added!');
        return redirect()->route('birthdays.index');
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
  public function show(Birthday $birthday)
  {
      $birthday = Birthday::find($birthday->id);
      return view('birthdays.show', ['birthday'=>$birthday]);

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
  public function destroy(Birthday $birthday)
  {
    $findBirthday = Birthday::find($birthday->id);
    if($findBirthday->delete()){
       //redirect
       flash()->success('Success!!!', 'Probably wasn\'t your friend anyway..');
       return redirect()->route('birthdays.index');
   }
   flash()->error('!! Error !!', 'Cannot remove birthday.');
   return back();

  }
}
