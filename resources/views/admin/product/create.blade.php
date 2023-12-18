@extends('admin.admin_layouts')


@section('admin_content')
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Product</a>
    <span class="breadcrumb-item active">New Product</span>
  </nav>

  <div class="sl-pagebody">

    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">Create New Product
        <a href="{{ route('all.product')}}" class="btn btn-success btn-sm pull-right">Product List</a>
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
      <form method="post" action="{{ route('store.product')}}" enctype="multipart/form-data">    
        @csrf

        <div class="form-layout">              
          <div class="row mg-b-25">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Product Name: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="name"  placeholder="Enter Product Name">
              </div>
            </div>


            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Product Price: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="price" placeholder="Enter Price" >
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Product Quantity: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="quantity" placeholder="Enter Product Quantity" >
              </div>
            </div>
          </div>

          <hr>

        </div>
        <div class="form-layout-footer">
          <button class="btn btn-info mg-r-5">Submit Form</button>
        </div>
      </div>
    </form> 
  </div>
</div>
</div>

@endsection
