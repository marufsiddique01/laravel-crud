@extends('product.layout') @section('content')
<br />
<br />
<div class="row">
    <div class="=" col-lg-12 margin-tb>
        <div class="pull-left">
            <h2>Laravel Product List</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('product.create') }}">
                Create New Product
            </a>
        </div>
    </div>
</div>
@if($message = Session::get('success'))

<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>

@endif




<table class="table table-bordered">
    <tr>
        <th width="150px">
            Product Name
        </th>
        <th width="100px">
            Product Code
        </th>
        <th width="250px">
            Details
        </th>
        <th width="150px">
            Product Image
        </th>
        <th width="280px">
            Action
        </th>
    </tr>
    @foreach($product as $pro)
    <tr>
        <td>{{ $pro -> product_name  }}</td>
        <td>{{ $pro -> product_code }}</td>
        <td>{{str_limit($pro -> details, $limit = 200)}}</td>
        <td>
            <img src="{{ URL::to($pro->product_image) }}" height="100px" width="100px" />
        </td>
        <td>
            <a class="btn btn-info" href="{{ URL::to('details/product/'.$pro->id) }}">
                Show
            </a>

            <a class="btn btn-primary" href="{{ URL::to('edit/product/'.$pro->id) }}">
                Edit
            </a>
            <a class="btn btn-danger" href="{{ URL::to('delete/product/'.$pro->id)}}"
                onclick="return confirm('Are you sure?')">
                Delete
            </a>
        </td>
    </tr>
    @endforeach
</table>

{!! $product->links() !!}

@endsection