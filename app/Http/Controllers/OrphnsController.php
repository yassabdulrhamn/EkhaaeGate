<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orphans;
use App\Homes;
use App\Auth;

class OrphnsController extends Controller
{
  public function getOrphans(){
$orphan = Orphans::
select('orphans.id','orpNationalID','orpEkhaaNo','orpFirstname','orpSecName','orpThirdName','orpMobile','orpGender','braName')
->leftJoin('branchs', 'orphans.orpBranch', '=', 'branchs.id')->get();

    return view('orphans/orphanslist')->with('orphans',$orphan);
  }

  public function submit(Request $requset)
  {
    $this->validate($requset,[
      'NationalID' => 'required|integer|digits:10|unique:orphans,orpNationalID',
      'MinistryNo' => 'required|integer|digits_between:3,5|unique:orphans,orpMinistryNo',
      'EkhaaNo' => 'required|integer|digits_between:3,5|unique:orphans,orpEkhaaNo',
      'Firstname' => 'required|string|max:255',
      'SecName' => 'required|string|max:255',
      'ThirdName' => 'required|string|max:255',
      'ForthName' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:orphans,orpEmail',
    ]);

    //Create New Message
    $orphan = new Orphans;
    $orphan->orpNationalID = $requset->input('NationalID');
    $orphan->orpMinistryNo = $requset->input('MinistryNo');
    $orphan->orpEkhaaNo = $requset->input('EkhaaNo');
    $orphan->orpEmail = $requset->input('email');
    $orphan->orpFirstname = $requset->input('Firstname');
    $orphan->orpSecName = $requset->input('SecName');
    $orphan->orpThirdName = $requset->input('ThirdName');
    $orphan->orpForthName = $requset->input('ForthName');
    $orphan->orpMobile = $requset->input('mobile');
    $orphan->orpGender = $requset->input('gender');
    $orphan->orpBranch = $requset->input('Branch');
    $orphan->orpReferralNo = $requset->input('Referral');
    $orphan->orpMinistryStatus = $requset->input('MinistryStatus');
    $orphan->oprEkhaaStatus = $requset->input('EkhaaStatus');
    $orphan->orpType = $requset->input('BackendTypes');


    //Save messages
    $orphan->save();

    $home = Homes::
    select('homes.id','homID','homType','homDistrict','braName')
    ->leftJoin('branchs', 'homes.homBranch', '=', 'branchs.id')
  ->where('branchs.id', '=', $requset->input('Branch'))
  ->get();
    return view('homes/homelist')->with('homes',$home)->with('orphanID',$orphan->orpNationalID);
  }

  //Assign home for the orphan
  public function assignHome(Request $request,$orphanID,$homID){
    $orphan = Orphans::where('orpNationalID',$orphanID) -> first();
    $orphan->orpHome = $homID;
    $orphan->save();


    return redirect('/');
  }

  //Yaser:
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function editOrphan($orpNationalID)
  {
    $orphan = Orphans::where('orpNationalID',$orpNationalID) -> first();
      return view('orphans/editorphan')->with('orphan',$orphan);
  }

  //Yaser:
  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $requset, $id)
  {
    $this->validate($requset,[
      'NationalID' => 'required|integer|digits:10',
      'MinistryNo' => 'required|integer|digits_between:3,5',
      'EkhaaNo' => 'required|integer|digits_between:3,5',
      'Firstname' => 'required|string|max:255',
      'SecName' => 'required|string|max:255',
      'ThirdName' => 'required|string|max:255',
      'ForthName' => 'required|string|max:255',
      'email' => 'required|string|email|max:255',
    ]);

    //Create New Message
    $orphan = Orphans::where('orpNationalID',$id) -> first();
    $orphan->orpNationalID = $requset->input('NationalID');
    $orphan->orpMinistryNo = $requset->input('MinistryNo');
    $orphan->orpEkhaaNo = $requset->input('EkhaaNo');
    $orphan->orpEmail = $requset->input('email');
    $orphan->orpFirstname = $requset->input('Firstname');
    $orphan->orpSecName = $requset->input('SecName');
    $orphan->orpThirdName = $requset->input('ThirdName');
    $orphan->orpForthName = $requset->input('ForthName');
    $orphan->orpMobile = $requset->input('mobile');
    $orphan->orpGender = $requset->input('gender');
    $orphan->orpBranch = $requset->input('Branch');
    $orphan->orpReferralNo = $requset->input('Referral');
    $orphan->orpMinistryStatus = $requset->input('MinistryStatus');
    $orphan->oprEkhaaStatus = $requset->input('EkhaaStatus');
    $orphan->orpType = $requset->input('BackendTypes');


    //Save messages
    $orphan->save();


    return redirect('/');
  }
}
