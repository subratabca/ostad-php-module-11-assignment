<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ProductController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }


  public function Index(){
    $product = DB::table('products')->get();
    return view('admin.product.index',compact('product'));
  }


  public function Create(){
    return view('admin.product.create');
  }


  public function Store(Request $request){
    $validateData = $request->validate([
      'name' => 'required|string|unique:products',
      'price' => 'required',
      'quantity' => 'required',

    ]);

    $data = array();
    $data['name'] = $request->name;
    $data['price'] = $request->price;
    $data['quantity'] = $request->quantity;
    $result = DB::table('products')->insert($data);
    $notification=array(
      'message'=>'Data Inserted Successfully',
      'alert-type'=>'success'
    );
    return Redirect()->route('all.product')->with($notification);

  }



  public function Edit($id){
    $product = DB::table('products')->where('id',$id)->first();
    return view('admin.product.edit',compact('product'));
  }


  public function Update(Request $request,$id){
    $validateData = $request->validate([
      'name' => 'required',
      'price' => 'required',
      'quantity' => 'required',

    ]);

    $data = array();
    $oldimg = $request->old_img;
    $data['name'] = $request->name;
    $data['price'] = $request->price;
    $data['quantity'] = $request->quantity;
    $result = DB::table('products')->where('id',$id)->update($data);
    $notification=array(
      'message'=>'Data Updated Successfully',
      'alert-type'=>'success'
    );
    return Redirect()->route('all.product')->with($notification);
  }



  public function Delete($id){
    DB::table('products')->where('id',$id)->delete();
    $notification=array(
      'message'=>'Data Deleted Successfully',
      'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification); 
  }


}


