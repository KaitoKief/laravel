<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function getIndex() {
      return view('welcome');
  }

  public function getAbout() {
      $companyname = "Code Executable";
      $isUserRegistered = false;

      $users = array("Baka1", "Baka2", "Baka3", "Baka4");
        return view('pages.about')
        ->with ("companyname", $companyname)
        ->with ("isUserRegistered", $isUserRegistered)
        ->with ("users", $users)
        ;
  }

  public function getContact() {
        return view('pages.contact');
  }

  public function getHelp() {
    return view('pages.help');
  }
}
