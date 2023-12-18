<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Carbon;
use DB;

class TransactionController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }


  public function Index(){
    $products = Transaction::latest()->get();
    return view('admin.transaction.index',compact('products'));
  }


  public function Create(){
    $products = DB::table('products')->get();
    $today = Carbon::now()->toDateString();
    //$today = date('Y-m-d');
    //dd($today);
    return view('admin.transaction.create',compact('products','today'));
  }


  public function Store(Request $request){
    $validateData = $request->validate([
      'date' => 'required',
      'product_id' => 'required',
      'qty' => 'required|numeric',

    ]);

    $productId = $request->product_id;
    $product = Product::where('id',$productId)->first();
    $stock = $product->quantity;
    $price = $product->price;
    $quantitySold = intval($request->qty);

    if($stock >= $quantitySold){
      $data = array();
      $data['order_date'] = $request->date;
      $data['product_id'] = $request->product_id;
      $data['qty'] = $request->qty;
      $data['amount'] = $request->qty * $price;
      $result = DB::table('transactions')->insert($data);
      $product->quantity -= $quantitySold;
      $product->save();
      $notification=array(
        'message'=>'Product Sale Successfully',
        'alert-type'=>'success'
      );
      return Redirect()->route('all.transaction')->with($notification);
    }else{
      $notification=array(
        'message'=>'Not enough stock for the sale!',
        'alert-type'=>'warning'
      );
      return Redirect()->back()->with($notification);
    }

  }




  public function Delete($id){
    DB::table('transactions')->where('id',$id)->delete();
    $notification=array(
      'message'=>'Data Deleted Successfully',
      'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification); 
  }


}


