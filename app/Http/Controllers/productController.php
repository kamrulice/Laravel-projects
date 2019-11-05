<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter;
use App\Product;
use DB;

class productController extends Controller
{
    public function createProduct(){
        $chapters = Chapter::all();
        return view('Admin.product.createProduct',['chapters'=>$chapters]);
    }
    public function storeProduct(Request $request){
       $product = new Product();
       $product->chapterId = $request->chapterId ;
        $product->title = $request->title ;
        $product->chapterDescription = $request->chapterDescription ;
        $product->publicationStatus = $request->publicationStatus ;
        $product->save();
        return redirect('/add/product')->with('message','Product Info Save Successfully');
    }
    public function manageProduct(){
        $products = DB::table('products')
                ->join('chapters','products.chapterId','=','chapters.id')
                ->select('products.*','chapters.chapterName')
                ->get();
        return view('Admin.product.productContain',['products'=>$products]);
    }
   
}

