@extends('admin.admin_layouts')

@section('admin_content')

<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Product List</h5>
    </div>

    <div class="card pd-20 pd-sm-40">
      <h6 class="card-body-title">Product List
        <a href="{{ route('add.product') }}" class="btn btn-sm btn-warning" style="float: right;">Add New</a>
      </h6>


      <div class="table-wrapper">
        <table id="datatable1" class="table display responsive nowrap">
          <thead>
            <tr>
              <th class="wd-10p">Product Name</th>
              <th class="wd-10p">Price</th>
              <th class="wd-10p">Quantity</th>
              <th class="wd-10p">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($product as $row)
            <tr>
              <td>{{ $row->name }}</td>
              <td>{{ $row->price }}</td>
              <td>{{ $row->quantity }}</td>
              <td>
                <a href="{{ URL::to('edit/product/'.$row->id) }} " class="btn btn-sm btn-info" title="edit"><i class="fa fa-edit"></i></a>
                <a href="{{ URL::to('delete/product/'.$row->id) }}" class="btn btn-sm btn-danger" title="delete" id="delete"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @endsection