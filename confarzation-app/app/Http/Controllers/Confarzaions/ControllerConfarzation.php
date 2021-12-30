<?php

namespace App\Http\Controllers\Confarzaions;

use App\Models\Confarzation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerConfarzation extends Controller
{
 public function index(){
     $confarzations=Confarzation::get();
     return view('confarzations.index',compact('confarzations'));
 }
 public function show(Confarzation $confarzation ,Request $request){
    $confarzations=Confarzation::get();
    return view('confarzations.show',compact('confarzation','confarzations')); //  الكنفروينشن الاولى الي مبعوتة هوا الي تم طلبو من ال url


 }
}
