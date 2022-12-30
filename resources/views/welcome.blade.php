@extends('layouts.app')
@section('title', ' - Home')
@section('content')

    @foreach ($dog_breed_groups as $dog_breed_group)
        <section class="product-section-4">
            <div class="container-fluid-lg">
                <div class="title">
                    <h2>
                        {{ $dog_breed_group->name ?? '' }}
                    </h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="slider-7_1 arrow-slider img-slider">
                            @foreach ($dog_breed_group->dog_tables as $dog)
                                <div class="">
                                    <div class="product-box-3 h-100 wow fadeInUp hover">
                                        <a href="{{ route('dog.show', $dog->id) }}">
                                            <img src="{{ $dog->main_photo }}" class="img-fluid blur-up lazyload"
                                                alt="">
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
    @endforeach

@endsection
