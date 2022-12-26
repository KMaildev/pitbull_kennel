@extends('layouts.app')
@section('title', $dog->name ?? 'Dog')
@section('content')
    <section class="product-section" style="background-color: black">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 wow fadeInUp">
                    <div class="row g-4">

                        <div class="col-xl-6 wow fadeInUp">
                            <div class="product-left-box">
                                <div class="row g-2">
                                    <div class="col-xxl-10 col-lg-12 col-md-10 order-xxl-2 order-lg-1 order-md-2">
                                        <div class="product-main-2 no-arrow">
                                            @php
                                                $dog_imgs = explode(',', $dog->photo);
                                            @endphp
                                            @foreach ($dog_imgs as $photo)
                                                <div>
                                                    <div class="slider-image">
                                                        <img src="{{ $photo }}" id="img-1"
                                                            data-zoom-image="{{ $photo }}"
                                                            class="img-fluid image_zoom_cls-0 blur-up lazyload"
                                                            alt="" style="width: 100%;">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-xxl-2 col-lg-12 col-md-2 order-xxl-1 order-lg-2 order-md-1">
                                        <div class="left-slider-image-2 left-slider no-arrow slick-top">
                                            @foreach ($dog_imgs as $dog_image)
                                                <div>
                                                    <div class="sidebar-image">
                                                        <img src="{{ $dog_image }}" class="img-fluid blur-up lazyload"
                                                            alt="">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="right-box-contain">
                                <h2 class="name text-white">
                                    {{ $dog->name ?? '' }}
                                </h2>

                                <div class="table-responsive">
                                    <table class="table info-table">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="color: #7DBA44; text-align: left; font-weight: bold; font-size: 20px; width: 50%;">
                                                    NAME :
                                                </td>
                                                <td
                                                    style="color: white; text-align: left; font-weight: bold; font-size: 20px;">
                                                    {{ $dog->name ?? '' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="color: #7DBA44; text-align: left; font-weight: bold; font-size: 20px;">
                                                    BREED :
                                                </td>
                                                <td
                                                    style="color: white; text-align: left; font-weight: bold; font-size: 20px;">
                                                    {{ $dog->breed ?? '' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="color: #7DBA44; text-align: left; font-weight: bold; font-size: 20px;">
                                                    SEX :
                                                </td>
                                                <td
                                                    style="color: white; text-align: left; font-weight: bold; font-size: 20px;">
                                                    {{ $dog->sex ?? '' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="color: #7DBA44; text-align: left; font-weight: bold; font-size: 20px;">
                                                    COLOR :
                                                </td>
                                                <td
                                                    style="color: white; text-align: left; font-weight: bold; font-size: 20px;">
                                                    {{ $dog->color ?? '' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="color: #7DBA44; text-align: left; font-weight: bold; font-size: 20px;">
                                                    DATE OF BIRTH :
                                                </td>
                                                <td
                                                    style="color: white; text-align: left; font-weight: bold; font-size: 20px;">
                                                    {{ $dog->date_of_birth ?? '' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="color: #7DBA44; text-align: left; font-weight: bold; font-size: 20px;">
                                                    BREEDER :
                                                </td>
                                                <td
                                                    style="color: white; text-align: left; font-weight: bold; font-size: 20px;">
                                                    {{ $dog->breeder ?? '' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="color: #7DBA44; text-align: left; font-weight: bold; font-size: 20px;">
                                                    OWNER :
                                                </td>
                                                <td
                                                    style="color: white; text-align: left; font-weight: bold; font-size: 20px;">
                                                    {{ $dog->owner ?? '' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="color: #7DBA44; text-align: left; font-weight: bold; font-size: 20px;">
                                                    REG NO :
                                                </td>
                                                <td
                                                    style="color: white; text-align: left; font-weight: bold; font-size: 20px;">
                                                    {{ $dog->reg_no ?? '' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="color: #7DBA44; text-align: left; font-weight: bold; font-size: 20px;">
                                                    REGISTERED :
                                                </td>
                                                <td
                                                    style="color: white; text-align: left; font-weight: bold; font-size: 20px;">
                                                    {{ $dog->registered ?? '' }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td
                                                    style="color: #7DBA44; text-align: left; font-weight: bold; font-size: 20px;">
                                                    REGISTRAR :
                                                </td>
                                                <td
                                                    style="color: white; text-align: left; font-weight: bold; font-size: 20px;">
                                                    {{ $dog->registrar ?? '' }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
