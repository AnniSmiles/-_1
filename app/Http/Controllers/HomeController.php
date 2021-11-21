<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getName()
    {
        $info = "first name: ani";
        return view("information", compact("info"));
    }

    public function getLName()
    {
        $info = "last name: katsitadze";
        return view("information", compact("info"));

    }

    public function getHobby()
    {
        $info = "hobby: singing,computer games";
        return view("information", compact("info"));

    }

    public function getPet()
    {
        $info = "favorite dog breed: Akita Inu";
        return view("information", compact("info"));

    }

    public function getCountry()
    {
        $info = "favorite country: Japan";
        return view("information", compact("info"));

    }
}
