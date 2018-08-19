<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\products;

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

    function getLevelTwo(Request $req){
        $levelTwo = Categories::where('id_parent',$req->id)->get();
        if(empty($levelTwo->toArray())){
            echo "nolevel2";
        }
        else{
            return view('ajax.leveltwo',compact('levelTwo'));
        }
    }
    function getlistProduct($idType){
        $nameType=categories::where('id',$idType)->value('name');
        $products = Products::where('id_type',$idType)->paginate(10); //paginate dung de phan trang
        return view('pages.list-product',compact('products','nameType'));
    }

    function featuredProduct(){
        $feature = products::where('status',1)->get();
        $normalProduct = products::where('status',0)->paginate(3);
        $topSeller = products::where('promotion_price','!=',0)->get();
        $newProduct = products::where('new','=',1)->get();
        $oldProduct = products::where('new','=',0)->paginate(3);
        $levelOne = Categories::where('id_parent',NULL)->get();
        //$levelTwo = Categories::where('id_parent',)->get();
        return view('pages.home',compact('feature','topSeller','newProduct','oldProduct','normalProduct','levelOne','levelTwo'));
    }
    
        
        
    
    
}
