@extends('index')

@section('content')
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('Template/img/product/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
            <div class="card-body">
              <h5 class="card-title">Towel</h5>
              <p class="card-text">{{ $product->name }}</p>
              <p class="text-warning">{{ $product->unit_price }}</p>
              <p class="text-black">{{ $product->description }}</p>
              <a href="#" class="btn btn-primary">Đặt hàng</a>
            </div>
          </div>
    </div>
@endsection
