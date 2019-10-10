<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orphans;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
  public function Dashboard(){

    $Branches = DB::table('orphans')
    ->leftJoin('branchs', 'orphans.orpBranch', '=', 'branchs.id')
    ->select(DB::raw('count(orphans.id) as orphans,count(orphans.orpHome) as homes, orphans.orpBranch as ID,branchs.braName as name'))
                         ->groupBy('orphans.orpBranch')
                         ->get();
        return view('Dashboard')->with('Branches',$Branches);

  }
}
