@extends('admin.admin_layouts')

 

@section('admin_content')
  <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">E-commerce</a>
        <span class="breadcrumb-item active">Product Section</span>
      </nav>

      <div class="sl-pagebody">


 <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Product Details Page  
          <a href="{{ route('all.product')}}" class="btn btn-success btn-sm pull-right"> All Product</a>
        </h6>
           
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Title: <span class="tx-danger">*</span></label><br>
                 <strong>{{ $product->title }}</strong>
                </div>
              </div>
               
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label><br>
                  <strong>{{ $product->category_name }}</strong>
       
                </div>
              </div>



              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Medium: <span class="tx-danger">*</span></label>
                  <br>
                  <strong>{{ $product->medium_name }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                  <br>
                  <strong>{{ $product->selling_price }}</strong>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                  <br>
                  <strong>{{ $product->product_size }}</strong>
                </div>
              </div>


              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                  <br>
                  <strong>{{ $product->selling_price }}</strong>
                </div>
              </div>


               <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Product Details: <span class="tx-danger">*</span></label>
                  <br>
                 <p>{!! $product->product_details !!}</p>
                </div>
              </div>

              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image One ( Main Thumbnali): <span class="tx-danger">*</span></label><br>
                  <label class="custom-file">
                    <img src="{{ URL::to($product->image_one) }}" style="height: 80px; width: 80px;">
                  </label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Two: <span class="tx-danger">*</span></label><br>
                  <label class="custom-file">
                    <img src="{{ URL::to($product->image_two) }}" style="height: 80px; width: 80px;">
                  </label>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Image Three: <span class="tx-danger">*</span></label><br>
                  <label class="custom-file">
                    <img src="{{ URL::to($product->image_three) }}" style="height: 80px; width: 80px;">
                  </label>
                </div>
              </div>
            </div>

  <hr>
  <br><br>


 
 

            
          </div>
        </div>
 
        
        </div>

  
    </div>

 
 

 

 
@endsection
