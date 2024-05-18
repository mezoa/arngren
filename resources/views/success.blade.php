@extends('layouts.base')

@section('content')

<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Congratulations!</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('app.index') }}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Order Success</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="checkout-section section-b-space" style="font-family: 'Montserrat', sans-serif; font-size: 18px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 style="font-size: 24px;">Your order has been placed successfully!</h2>
                <p style="margin: 20px 0;">We're excited for you to receive your items. Thank you for choosing us for your shopping needs. We hope you enjoy your new purchase!</p>
                <p style="margin: 20px 0; margin-right: 40px">Want to continue shopping? <a href="{{ route('app.index') }}">Click here</a> to explore more great products.</p>
            </div>
            <div class="col-md-4" style="padding-left: 150px;">
                <img src="{{ asset('assets/images/fashion/product/front/shopping-bag.png') }}" alt="Happy Shopping" style="max-width: 37%;">
            </div>
        </div>
    </div>
</section>

<!-- Subscribe Section Start -->
<section class="subscribe-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="subscribe-details">
                    <h2 class="mb-3">Subscribe Our News</h2>
                    <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                        and fantastic Products.</h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                <div class="subsribe-input">
                    <div class="input-group">
                        <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                        <button class="btn btn-solid-default" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Subscribe Section End -->

@endsection