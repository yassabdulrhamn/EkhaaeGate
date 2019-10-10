<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
//Yaser: store new home
/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
      $this->validate($request,[
        'homeid' => 'required|integer|digits:4',
        'District' => 'required|string|max:255',
      ]);

      $home = new Homes;
      $home->homID  = $request->input('homeid');
      $home->homBranch  = $request->input('Branch');
      $home->homType  = $request->input('Type');
      $home->homDistrict = $request->input('District');


      //Save messages
      $home->save();


      return redirect('/');
    }
//Yaser: Get all the homes with (Edit) button
    public function getHomes(){

  $home = Homes::
  select('homes.id','homID','homType','homDistrict','braName')
  ->leftJoin('branchs', 'homes.homBranch', '=', 'branchs.id')->get();
      return view('homes/homelist')->with('homes',$home)->with('orphanID',0);
    }

//Yaser: to get the home into the EditHome page
/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
  $home = Homes::where('id',$id) -> first();
    return view('homes/edithome')->with('home',$home);
}

//Yaser to save the updated data for the homes
/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
  $this->validate($request,[
    'District' => 'required|string|max:255',
  ]);
  $home = Homes::where('id',$id) -> first();
  $home->homBranch  = $request->input('Branch');
  $home->homType  = $request->input('Type');
  $home->homDistrict = $request->input('District');


  //Save messages
  $home->save();


  return redirect('/');
}
}
