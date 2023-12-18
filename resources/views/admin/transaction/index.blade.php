@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Transaction List</h5>
    </div>

    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">Transaction List
        <a href="{{ route('add.transaction') }}" class="btn btn-sm btn-warning" style="float: right;">Add New</a>
      </h6>


      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-10p">Order Date</th>
              <th class="wd-10p">Product Name</th>
              <th class="wd-10p">Price</th>
              <th class="wd-10p">Quantity</th>
              <th class="wd-10p">Total</th>
              <th class="wd-10p">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($products as $row)
            <tr>
              <td>{{ $row->order_date }}</td>
              <td>{{ $row->product->name }}</td>
              <td>{{ $row->product->price }}</td>
              <td>{{ $row->qty }}</td>
              <td>{{ $row->qty * $row->product->price}}</td>
              <td>
                <!-- <a href="{{ URL::to('edit/transaction/'.$row->id) }} " class="btn btn-sm btn-info" title="edit"><i class="fa fa-edit"></i></a> -->
                <a href="{{ URL::to('delete/transaction/'.$row->id) }}" class="btn btn-sm btn-danger" title="delete" id="delete"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @endsection