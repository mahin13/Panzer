
@extends('layouts.master')

@section('content')
<div class="container margin-top-20">
      <div class="row">
        <div class="col-md-4">
       @include('partials.product-sidebars')
        </div>

        <div class="col-md-8">
          <div class="widget">
            <h3>All Product in <span class="product-item badge badge-info">{{ $category->name }} Category</span></h3>
            @php
            $products = $category->products()->simplePaginate(3);
            @endphp
            @if($products->count()>0)
             @include('pages.product.partials.all_products')
            @else
                 <div class="alert alert-warning">
                  No Products in this Category!!
                    @endif
                 </div>
            </div></div>
             </div></div>
      
@endsection