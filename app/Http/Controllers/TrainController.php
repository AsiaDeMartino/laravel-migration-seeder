<?php

namespace App\Http\Controllers;

use App\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('giorno_di_partenza','2014-06-02')->get();
        return view('welcome',compact('trains'));
    }
}
