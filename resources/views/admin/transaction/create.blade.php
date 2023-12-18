@extends('admin.admin_layouts')


@section('admin_content')
<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Transaction</a>
    <span class="breadcrumb-item active">New Transaction</span>
  </nav>

  <div class="sl-pagebody">


    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">Create New Transaction
        <a href="{{ route('all.transaction')}}" class="btn btn-success btn-sm pull-right"> Transaction List</a>
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
      <form method="post" action="{{ route('store.transaction')}}" >    
        @csrf

        <div class="form-layout">              
          <div class="row mg-b-25">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="example-text-input" class="form-label">Order Date</label>
                <input class="form-control example-date-input" name="date" type="date"  value="{{ $today }}">
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Select Product: <span class="tx-danger">*</span></label>
                <select class="form-control" name="product_id">
                  <option value="" selected="" disabled="">Select Product</option>
                  @foreach($products as $product)
                  <option value="{{ $product->id }}">{{ $product->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Product Quantity: <span class="tx-danger">*</span></label>
                <input class="form-control" type="number" name="qty" value=1 >
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
