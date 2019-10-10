<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function newOrphan(){
    return view ('/orphans/neworphan');
  }
  public function newHome(){
    return view ('/homes/newhome');
  }
  //Not in use
  public function Dashboard(){
    return view ('/Dashboard');
  }

}
