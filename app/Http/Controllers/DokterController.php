<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;

class DokterController extends Controller
{
   public function index(){
   	$Dokter = Dokter::all();

   	return view('welcome', compact('Dokter'));
   }

}
