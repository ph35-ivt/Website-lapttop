<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PagesController extends Controller
{
    function trangchu()
    {
    	return view('pages.trangchu');
    }
    function lap_gioithieu()
    {
        return view('pages.lap_gioithieu');
    }
    function repair(){
    	  return view('pages.repair');
    }
     function tintuc(){
    	  return view('pages.tintuc');
    }
    function lienhe(){
    	  return view('pages.lienhe');
    }
    function giohang(){
          return view('pages.giohang');
    }
    function login(){
          return view('pages.login');
    }
    function dangki(){
          return view('pages.dangki');
    }
}
