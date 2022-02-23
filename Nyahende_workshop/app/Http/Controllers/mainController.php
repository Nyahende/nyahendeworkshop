<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
   public function main(){
       return view('nyahende.main');
   }
   public function products(){
    return view('nyahende.products');
  }
  public function products60(){
    return view('nyahende.products60');
  }
  public function products180(){
    return view('nyahende.products180');
  }
  public function products540(){
    return view('nyahende.products540');
  }
  public function chalks(){
    return view('nyahende.chalks');
  }
  public function services(){
    return view('nyahende.services');
  }
  public function achievements(){
    return view('nyahende.achievements');
  }
  public function livestockkeeping(){
    return view('nyahende.livestockkeeping');
  }
  public function typesofchicken(){
    return view('nyahende.typesofchicken');
  }
  public function diseases(){
    return view('nyahende.diseases');
  }
  public function others(){
    return view('nyahende.others');
  }
  public function contacts(){
    return view('nyahende.contacts');
  }
  public function veta(){
    return view('nyahende.veta');
  }
  public function patent(){
    return view('nyahende.patent');
  }
  public function tuzo(){
    return view('nyahende.tuzo');
  }
  public function costech(){
    return view('nyahende.costech');
  }
  public function babies(){
    return view('nyahende.babies');
  }
  public function ventilator(){
    return view('nyahende.ventilator');
  }
}

