<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
       $data = product::all();
       return view('product',['products' =>$data]);
    }

    public function detail($id){
        $data = product::find($id); 
        return view('detail',['product' =>$data]);
    }

    public function search(Request $request){
     $data = product::where('name', 'like', '%'.$request->input('query').'%')->get();
    return view('search',['products'=>$data]);
    }

    public function addToCart(Request $request){
        if($request->session()->has('user')){
            $cart= new cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    public function cartlist(){
       $userId= Session::get('user')['id'];
       $data= DB::table('cart')
       ->join('products','cart.product_id','products.id')
       ->select('products.*','cart.id as cart_id')
       ->where('cart.user_id',$userId)
       ->get();
       return view('cartlist',['products'=>$data]);    
    }

    public function removeCart($id){
        Cart::destroy($id);
       return redirect('cartlist');      
    }

    public function orderNow(){
        $userId= Session::get('user')['id'];
        $total= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);  
    }
}
