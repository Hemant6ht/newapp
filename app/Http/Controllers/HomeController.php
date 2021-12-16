<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelControllers\ProductController;
use App\Http\Controllers\ModelControllers\CategoryController;
use App\Http\Controllers\ModelControllers\CartController;
use App\Http\Controllers\ModelControllers\OrderController;
use App\Http\Controllers\ModelControllers\UserController;
use App\Http\Controllers\ModelControllers\orderdetailController;
use App\Models\Order;
use App\Models\Orderdetail;
use Session;

class HomeController extends Controller
{
    function home(){
		$allPrds= ProductController::getRandomProducts(3);
		return view('index',["products"=>$allPrds]);
	}
	function productlist($catid){
		$products = ProductController::getAllProductsBycatid($catid);
		return view('productlist',["products"=>$products]);
	}
	function productdetail($pid){
		$products = ProductController::getAllProductsBypid($pid);
		if(!$products)
			return redirect('/');
		return view('productdetail',["product"=>$products]);
	}
	function addtocart(Request $request,$pid){
		if($request->session()->get('user'))
		{
			$userId=$request->session()->get('user');
			$check2 = ProductController::getAllProductsBypid($pid);
			if($check2){
				$check = CartController::addproducttocart($userId,$pid);
				if($check){
					$request->session()->flash('success','Added to cart!');
				}
				else{
					$request->session()->flash('error','!!!Product already exist');
				}
			}
			else{
				return redirect('/error');
			}
		}
		else{
			$request->session()->flash('error','Please login first...');
		}
		return back();
	}

	function loginregister(Request $request){
		if($request->session()->get('user')){
			return redirect('/');
		}
		return view('loginregister');
	}

	function login(Request $request){
		$email = $request->post('email');
		$pass = $request->post('password');
		$user = UserController::getUser($email,$pass);
		if($user){
			if($user->status){
				$request->session()->put('user',$user->userId);
				return redirect('/');
			}
			else{
				$request->session()->flash('error','You are Blocked !');
				return back();
			}
		}
		else{
			$request->session()->flash('error','Wrong Email/Password');
			return back();
		}
		
	}

	function logout(Request $request){
		$request->session()->remove('user');
		return redirect('/');
	}

	function register(Request $request){
		$name = $request->post('name');
		$email = $request->post('email');
		$mobile = $request->post('mobile');
		$pass = $request->post('password');
		$add = $request->post('address');
		$status = UserController::saveUser($request,$name,$email,$mobile,$pass,$add);
		return back();
	}

	function cart(Request $req){
		if(!$req->session()->has('user')){
			$req->session()->flash('error','Please login first');
			return back();
		}
		$allcart = CartController::getAllProductInCart($req->session()->get('user'));
		return view('cart',["cartprds"=>$allcart]);
	}
	function cartdelete(Request $req,$pid){
		if(!$req->session()->has('user')){
			$req->session()->flash('error','Bad Request');
			return back();
		}
		$status = CartController::deleteFromCart($req->session()->get('user'),$pid);
		if($status){
			$req->session()->flash('success','Successfully deleted from cart');	
		}
		else{
			$req->session()->flash('error','Item is not in your cart');
		}
		return back();
	}

	function buydetail(Request $req,$pid){
		if(!$req->session()->has('user')){
			$req->session()->flash('error','Please login first');
			return back();
		}
		$prd=ProductController::getAllProductsBypid($pid);
		if(!$prd){
			$req->session()->flash('error','Bad Request');
			return back();
		}
		$userdetail = UserController::getUserById($req->session()->get('user'));
		return view('buydetail',['prd'=>$prd,'userdetail'=>$userdetail]);
	}

	function buy(Request $req){
		if(!$req->session()->has('user')){
			$req->session()->flash('error','Please login first');
			return back();
		}
		$userid = $req->session()->get('user');
		$name = $req->post('name');
		$address = $req->post('address');
		$contact = $req->post('mobile');
		$quant = $req->post('quantity');
		$mop = $req->post('paymentmode');
		$pincode = $req->post('pincode');
		$pid = $req->post('pid');
		$prd=ProductController::getAllProductsBypid($pid);
		if(!$prd){
			$req->session()->flash('error','Bad Request');
			return back();
		}
		$total_price = $prd->p_price * $quant;
		if($name && $address && $contact && $quant && $mop && $total_price && $pincode){
			$orderdetail_pk = orderdetailController::saveOrderDetail($name,$address,$contact,$quant,$mop,$total_price,$pincode);
			if($orderdetail_pk){
				$orderid = OrderController::saveorder($userid,$pid,$orderdetail_pk);
				if($orderid){
					return view('thankyou',['orderid'=>$orderid]);
				}
				orderdetailController::delete($orderdetail_pk);
				$req->session()->flash('error','Something went wrong');

				return back();
			}
			$req->session()->flash('error','Something went wrong');
			return back();
		}
		$req->session()->flash('error','Please fill all the details');
		return back();
	}

	function orders(Request $req){
		if(!$req->session()->has('user')){
			$req->session()->flash('error','Please login first');
			return back();
		}
		$allOrder = OrderController::getAllOrder($req->session()->get('user'));
		return view('orders',['allOrds'=>$allOrder]);
	}
}
