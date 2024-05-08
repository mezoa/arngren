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
                <h3>Thank You</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('app.index') }}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Thank You</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="checkout-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>Thank you for shopping with us!</p>
            </div>
        </div>
    </div>
</section>

@endsection
