<?php


namespace App\Http\Controllers;

use App\Realestate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Realestate extends Controller
{

  public function index()
  {
    $test = Realestate::where('Type','Buy')->get();
    dd($test);
  }
}
