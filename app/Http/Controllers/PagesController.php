<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    /*public function users(){
        return view('users.users');
    

    public function addUser(){
        return view('addUser');
    }*/

    public function files(){
        return view('files');
    }
}
