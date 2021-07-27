@extends('product.layout') @section('content')
<br />
<br />
<div class="row">
    <div class="=" col-lg-12 margin-tb>
        <div class="pull-left">
            <h2>Laravel Product List</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="">
                Create New Product
            </a>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th width="150px">
                Product Name
            </th>
            <th width="150px">
                Product Code
            </th>
            <th width="200px">
                Details
            </th>
            <th width="150px">
                Product Image
            </th>
            <th width="280px">
                Action
            </th>
        </tr>

        <tr>
            @foreach($product as $pro)
            <td>{{ $pro -> product_name  }}</td>
            <td>{{ $pro -> product_code }}</td>
            <td>{{ $pro -> details }}</td>
            <td></td>
            <td>
                <a class="btn btn-info" href="">
                    Show
                </a>
                <a class="btn btn-primary" href="">
                    Edit
                </a>
                <a class="btn btn-danger" href="">
                    Delete
                </a>
            </td>
            @endforeach
        </tr>
    </table>
</div>

@endsection
