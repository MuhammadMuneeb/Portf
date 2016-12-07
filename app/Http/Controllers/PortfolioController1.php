<?php

namespace App\Http\Controllers;


use App\Http\Requests\PortfolioRequest;
//use Request;
use App\Portfolio;

class PortfolioController extends Controller
{

    public function index(){
      //
    }


    public function store(PortfolioRequest $request){
      $input = Request::all();
      portfolio::create($input);
      return redirect('/');
    }
}
