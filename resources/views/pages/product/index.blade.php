
@extends('layouts.master')

@section('content')
<div class="container margin-top-20">
      <div class="row">
        <div class="col-md-4">
       @include('partials.product-sidebars')
        </div>
        <div class="col-md-8">
          <div class="widget">
            <h3>All Product</h3>
                  @include('pages.product.partials.all_products')
            </div></div>
             </div></div>
      
@endsection