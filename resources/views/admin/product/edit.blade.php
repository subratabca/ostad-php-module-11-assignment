@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <span class="breadcrumb-item active">Product Section</span>
  </nav>

  <div class="sl-pagebody">
    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">Update Product 
        <a href="{{ route('all.product')}}" class="btn btn-success btn-sm pull-right"> All Product</a>
      </h6>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif 
      <form method="post" action="{{ url('update/product/'.$product->id) }} " enctype="multipart/form-data">    
        @csrf

        <div class="form-layout">
          <div class="row mg-b-25">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ $product->name }}" >
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Product Price: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="price"  value="{{ $product->price }}" >
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Product Quantity <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="quantity" value="{{ $product->quantity }}" >
              </div>
            </div>
          </div><br>

          <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5">Update Product</button>
          </div>
        </div>
      </div>
    </form>  
  </div>

</div>

@endsection
