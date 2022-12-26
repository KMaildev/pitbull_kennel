@extends('layouts.app')
@section('title', ' - KENNELS')
@section('content')

    <section class="breadscrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>
                            KENNELS
                            /
                            {{ $dog_breed_group->name ?? '' }}
                        </h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">
                                        <i class="fa fa-dog"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    KENNELS
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-b-space shop-section" style="background-color: black">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <style>
                        .hover:hover {
                            background-color: #7DBA44;
                        }
                    </style>
                    <div
                        class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                        @foreach ($dogs as $dog)
                            <div class="">
                                {{-- product-box-3  --}}
                                <div class="product-box-3 h-100 wow fadeInUp hover">
                                    <a href="{{ route('dog.show', $dog->id) }}">
                                        <img src="{{ $dog->main_photo }}" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <div class="product-footer">
                                        <div class="product-detail">
                                            <a href="{{ route('dog.show', $dog->id) }}">
                                                <h5 class="name">
                                                    {{ $dog->name ?? '' }}
                                                </h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
