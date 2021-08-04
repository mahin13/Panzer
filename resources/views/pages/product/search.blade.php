
@extends('layouts.master')

@section('content')
<div class="container margin-top-20">
      <div class="row">
        <div class="col-md-4">
       @include('partials.product-sidebars')
        </div>
        <div class="col-md-8">
          <div class="widget">
            
            <h3>Searched Product For- <div class="product-item"><span class="badge badge-primary">{{ $search }}</span></div></h3>
                  @include('pages.product.partials.all_products')
            </div></div>
             </div></div>
      
@endsection