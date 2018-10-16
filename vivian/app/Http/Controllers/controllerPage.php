<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slides;
use App\categories;
use App\products;
use App\images;
class controllerPage extends Controller
{
    public function getIndex(){
        $slide=slides::all();
        $category = categories::all();
        $new_product= products::where('new',1)->get();
        return view('page.index',['slides'=>$slide,'categories'=>$category,'products'=>$new_product]);
    }

    public function getCollectionWomen(){
    	return view('page.collection_women');
    }

    public function getListingMenu(){
        $category = categories::all();
        return view('page.listingMenu',['categories'=>$category]);
    }

    public function getProductTitle(Request $req){
        $sanpham=products::where('id',$req->id)->first();
        $same=products::where('id_small_categories',$sanpham->id_small_categories)->get();
        $image_products=images::where('id_product',$sanpham->id)->get();
        //$image_product=products::where('id',images::where('id_product'))->get();
    	return view('page.productTitle',compact('sanpham','image_products'),['products'=>$same]);
    }
/*
    public function getListing(){
        $category = categories::all();
        return view('page.listing',['categories'=>$category]);
    }
    */
   public function getCart(){
        return view('page.cart');
   }
}
