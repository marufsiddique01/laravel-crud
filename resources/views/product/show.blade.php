@extends('product.layout') @section('content')


<br />
<br />
<div class="row">
    <div class="=" col-lg-12 margin-tb>
        <div class="pull-left">
            <h2>Product Details</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('product.index') }}">
                Back
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product Name:
                {{ $data -> product_name}}
            </strong>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product Code:</strong>
            {{ $data -> product_code}}

        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product Details:</strong>
            {{ $data -> details}}

        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product Image:</strong>
            <img src="{{ URL::to($data -> product_image) }}" height="150ps" width="150px" object-fit="contain">
        </div>
    </div>
</div>


@endsection