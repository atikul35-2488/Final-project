<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
   public function index()
{
return view('frontEnd.welcome');
}
   public function aboutus()
{
return view('frontEnd.about');
}
public function eventsus()
{
    return view('frontEnd.events');
}
public function products()
{
    return view('frontEnd.products');
}
public function services()
{
    return view('frontEnd.services');
}
public function bread()
{
    return view('frontEnd.bread');
}
public function household()
{
    return view('frontEnd.household');
}
public function login()
{
    return view('frontEnd.login');
}
public function vegetables()
{
    return view('frontEnd.vegetables');
}
public function kitchen()
{
    return view('frontEnd.kitchen');
}
public function drinks()
{
    return view('frontEnd.drinks');
}
public function pet()
{
    return view('frontEnd.pet');
}

public function frozen()
{
    return view('frontEnd.frozen');
}








}
