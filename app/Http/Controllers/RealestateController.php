<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Realestate;

class RealestateController extends Controller
{

  public function __construct()
  {
     $this->middleware('auth');
  }

  function create(){

    $realestate = new Realestate;

    $realestate->Type = $_POST['type'];

    $realestate->SallerName = $_POST['sellername'];

    $realestate->SallerName = $_POST['sellername'];

    $realestate->Email = $_POST['email'];

    $realestate->Phone = $_POST['phone'];

    $tempC = "";

    foreach($_POST['category'] as $selected) {
      $tempC = $tempC.$selected." - ";
    }

    $realestate->Category = $tempC;

    $realestate->Badrooms = $_POST['bedrooms'];

    $realestate->Bathrooms = $_POST['bathrooms'];

    $realestate->AskingPrice = $_POST['price'];

    $realestate->HouseSF = $_POST['house'];

    $realestate->LandSF = $_POST['land'];

    $realestate->Age = $_POST['age'];

    $realestate->View = $_POST['view'];

    $realestate->Parkining = $_POST['parking'];

    $realestate->Description = $_POST['description'];


    $realestate->Feature1 = $_POST['feature1'];
    $realestate->Feature2 = $_POST['feature2'];
    $realestate->Feature3 = $_POST['feature3'];
    $realestate->Feature4 = $_POST['feature4'];
    $realestate->Feature5 = $_POST['feature5'];

    $realestate->save();


    foreach ($_FILES["photos"]["error"] as $clave => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $nombre_tmp = $_FILES["photos"]["tmp_name"][$clave];

            $nombre = basename($_FILES["photos"]["name"][$clave]);

            if ($clave == 0) {
              $realestate->Photo1 = "A".$realestate->id.".".explode('.', $_FILES["photos"]["name"][$clave])[1];
              move_uploaded_file($nombre_tmp, "images/A".$realestate->id.".".explode('.', $_FILES["photos"]["name"][$clave])[1]);
            }
            if ($clave == 1) {
              $realestate->Photo2 = "B".$realestate->id.".".explode('.', $_FILES["photos"]["name"][$clave])[1];
              move_uploaded_file($nombre_tmp, "images/B".$realestate->id.".".explode('.', $_FILES["photos"]["name"][$clave])[1]);
            }
            if ($clave == 2) {
              $realestate->Photo3 = "C".$realestate->id.".".explode('.', $_FILES["photos"]["name"][$clave])[1];
              move_uploaded_file($nombre_tmp, "images/C".$realestate->id.".".explode('.', $_FILES["photos"]["name"][$clave])[1]);
            }
            if ($clave == 3) {
              $realestate->Photo4 = "D".$realestate->id.".".explode('.', $_FILES["photos"]["name"][$clave])[1];
              move_uploaded_file($nombre_tmp, "images/D".$realestate->id.".".explode('.', $_FILES["photos"]["name"][$clave])[1]);
            }
            if ($clave == 4) {
              $realestate->Photo5 = "E".$realestate->id.".".explode('.', $_FILES["photos"]["name"][$clave])[1];
              move_uploaded_file($nombre_tmp, "images/E".$realestate->id.".".explode('.', $_FILES["photos"]["name"][$clave])[1]);
            }


        }
    }




    $realestate->save();


    return view('realestatesales');


  }

  function show(){
    return view('realestatesales');
  }
}
