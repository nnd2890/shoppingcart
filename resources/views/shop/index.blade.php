@extends('layouts.master')
@section('title')
	Shopping cart
@endsection
@section('content')
	<div class="row">
		@foreach($products as $product)
			<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item mt-3">
	        <div class="card h-100 card-shop">
	            <a href="#"><img class="card-img-top img-reponsive" src="{{$product->imagePath}}" alt="....."></a>
	            <div class="card-body card-content-shop">
	              	<h4 class="card-title">
	                	<a href="#">{{$product->title}}</a>
	              	</h4>
	              	<p class="card-text">{{$product->description}}</p>
	              	<div class="clearfix">
	              		<div class="pull-left price">{{$product->price}} $</div>
	              		<a class="btn btn-success pull-right" href="#" role="button">Add to cart</a>
	              	</div>
	            </div>
	        </div>
        </div>
		@endforeach
	</div>
@endsection