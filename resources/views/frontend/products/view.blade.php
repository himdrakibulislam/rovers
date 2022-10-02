@extends('layouts.front')
@section('title')
    {{$product->meta_title}}
@endsection
@section('content')
<div class="py-3 mb-3 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            Collections/ {{$product->category->name}} /{{$product->name}}
        </h6>
    </div>
</div>
<div class="container py-2">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{asset('assets/uploads/products/'.$product->image)}}" width="100%" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{$product->name}}
                        @if ($product->trending == '1')
                        <label  style="font-size: 16px" class="float-end badge bg-danger">Trending
                        </label>
                        @endif
                    </h2>
                    <hr>
                    <label  class="me-3">
                        Original Price : BDT <s>{{ $product->original_price }}</s></label>
                    <label  class="fw-bold">
                        Selling Price : BDT {{ $product->selling_price }}
                    </label>
                    <p class="mt-3">
                        {!! $product->small_description !!}
                    </p>
                    <hr>
                    @if ($product->qty > 0)
                        <label class="badge bg-success">
                            In stock
                        </label>
                        @else
                        <label class="badge bg-danger">
                            Out of stock
                        </label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-2 quantity">
                            <input type="hidden" value="{{$product->id}}" name="" class="prod_id">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3">
                                <div class="decrement-btn" 
                                style="cursor: pointer">
                                    <span class="input-group-text">
                                        -
                                    </span>
                                </div>
                              
                                <input type="text" name="quantity"
                                value="1" 
                                class="form-control qty-input text-center"
                                >
                                <div class="increment-btn" style="cursor: pointer">
                                    <span class="input-group-text">
                                        +
                                    </span>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br>
                            <button type="button" class="btn btn-success me-3 float-start addToWishlist">Add to Wishlist 
                                <i class="fa fa-heart"></i>
                            </button>
                          @if ($product->qty > 0 )
                          <button type="button" class="btn btn-primary me-3 float-start addToCart">
                            Add To Cart
                            <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                              
                          @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection