@extends('layouts.frontend')
@section('style')
<style>


</style>

@endsection

@section('content')

<main>
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="card mb-10">
            <div class="card-header">
              <nav class="header-navigation">
                <a href="#" class="btn btn-link">Back to the list</a>

                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Man</a></li>
                  <li class="breadcrumb-item"><a href="#">Clothes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">T-Shirts</li>
                </ol>

                <div class="btn-group">
                  <a href="#" class="btn btn-link btn-share">Share</a>
                  <a href="#" class="btn btn-link">Sell item like this</a>
                </div>
              </nav>
            </div>
            <div class="card-body store-body">
              <div class="product-info">
                <div class="product-gallery">
                  <div class="product-gallery-thumbnails">
                    <ol class="thumbnails-list list-unstyled">
                    @foreach ($product->productImgsUrls as $url)
                      <li><img class="img-fluid img-thumbnail ml-1 mt-2" src="{{ $url->product_img_url }}" alt="" style="max-width:100%; height:auto;"></li>

                    @endforeach
                    </ol>
                  </div>
                  <div class="product-gallery-featured">
                    @foreach ($product->productImgsUrls as $url)
                    <li><img class="img-fluid img-thumbnail ml-3" src="{{ $url->product_img_url }}" alt="" style="max-width:100%; height:auto;"></li>
                    @break
                    @endforeach

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <p class="text-center text-primary py-1"> Product Detail </p>
            </div>
            <div class="card-body">
                <div class="product-payment-details">
                    {{-- <p class="last-sold text-muted"><small>145 items sold</small></p> --}}
                    <h4 class="product-title mb-2">{{ $product->product_name }}</h4>
                    <input type="hidden" value="{{ $product->id }}" name="id" id="product-id" />
                    @if($product->discount)
                    <h2 class="product-price display-4">{{ $product->sale_price }}</h2>
                    <h2 class="product-price display-5"><del>{{ $product->original_price .'$'}}</del></h2>
                    <p class="text-success"><i class="fa fa-credit-card"></i>Discount:{{ $product->discount}} &nbsp; &#43; &nbsp;{{ ((str_replace('%','',$product->commission)+0)/2).'% Cashback' }}</p>
                    @else
                    <h2 class="product-price display-4">{{ $product->original_price.'$'}}</h2>
                    <p class="text-success"><i class="fa mr-2 fa-credit-card"></i>Discount: 00 % + {{ ((str_replace('%','',$product->commission)+0)/2).'% Cashback' }}</p>
                    @endif
                    <p class="mb-0"><i class="fa fa-truck"></i> Delivery in all territory</p>
                    <div class="text-muted mb-2"><small>know more about delivery time and shipping forms</small></div>
                    <label for="quant">Quantity</label>
                    <input type="number" name="quantity" min="1" id="quant" class="form-control mb-5 input-lg" placeholder="Choose the quantity">
                    @if ((isset(Auth::user()->email)))
                    <a class="btn btn-primary btn-lg btn-block" id="clicked"  href="{{ $product->product_url.'&cv='.$product->id.'&dp='.Auth::user()->email}}" target="_blank">Click to Buy</a>
                    {{-- <input type="hidden" value="{{ Auth::user()->email}}" name="user-email" id="user-email" /> --}}
                    {{-- href="{{ $product->product_url.'&cv='.$product->id.'&dp='.Auth::user()->email}}" --}}
                    {{-- {{ return redirect()->route('user.product-click') }} --}}
                    @else
                    <a class="btn btn-primary btn-lg btn-block" href="{{ $product->product_url.'&cv='.$product->id}}" target="_blank">Click to Buy</a>
                    @endif

                    <div class="alert alert-info mt-5" role="alert">
                        <p class="text-center text-danger">To get the CASHBACK, please first Signin into your bitcash.com account.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

   <div class="row mt-5">
    <div class="col-md-12 col-lg-12">
        <div class="bg-warning ">
            <div class="text text-center">
                <h3 class="text-center" style="font-family:Times New Roman', Times, serif">Recommended Products</h2>
            </div>
        </div>
    </div>
   </div>
   <div class="row mt-5">

            @foreach($products as $product)
            @foreach ($product->productImgsUrls as $url)
                <div class="col-md-3 col-lg-2 col-sm-4 ftco-animate">
                    <div class="product">
                        <a href="{{ route('product.detail',['id' =>$product->id])}}"  class="img-prod">
                            <img class="img-fluid product-image" src="{{ $url->product_img_url }}" alt="{{ $product->product_name }}" height="200" width="200">
                            @if($product->discount==null || $product->discount==0)
                            <span class="status ">0% off</span>
                            @else
                            <span class="status float-right">{{ $product->discount.' '.'off' }}</span>
                            @endif
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            {{-- <p><a href="{{ route('product.detail',['id' =>$product->id])}}" class="text-justify" style="font-size:12px">{{ implode(' ', array_slice(explode(' ', $product->product_name), 0, 9)) }}</a></p> --}}
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price" >
                                        @if($product->discount!=null && $product->discount!=0)
                                            @if ($product->original_price)
                                            <span class="mr-2 price-dc">{{ $product->original_price.''.'$'}}</span>
                                            @endif
                                            @if($product->sale_price)
                                            <span class="price-sale ml-1">{{ $product->sale_price.' '.'$'}}</span>
                                            @endif
                                        @else
                                            @if($product->original_price)
                                            <span class="price-sale ml-1">{{ $product->original_price.' '.'$'}}</span>
                                            @endif
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @break
            @endforeach
        @endforeach
</div>
<div class="row mb-3 mt-5">
    <div class="col-lg-12 col-md-6 d-flex align-items-center justify-content-center">
        <p>{{ $products->links() }}</p>
    </div>
</div>
<hr />



  </main>




@endsection

@section('scripts')
<script>

</script>
@endsection
