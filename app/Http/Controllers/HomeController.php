<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function getHome(){
        return view('pages.home');
    }
    function getDetail(){
        return view('pages.type');
    }
    function getContactUs(){
        return view('pages.contactUs');
    }
    function getAbouttUs(){
        return view('pages.aboutUs');
    }
    function getBlog(){
        return view('pages.Blog');
    }
    function getCheckout(){
        return view('pages.checkout');
    }
    function getAccount(){
        return view('pages.account');
    }
    function getSingleProduct(){
        return view('pages.singleProduct');
    }
}
