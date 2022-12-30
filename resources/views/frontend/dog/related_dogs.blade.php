<section class="product-list-section section-b-space" style="background-color: black">
    <div class="container-fluid-lg">
        <div class="title">
            <h2 style="color: white">
                Related of {{ $dog->dog_breed_group_table->name ?? '' }}
            </h2>
            <span class="title-leaf"></span>
        </div>
        <div class="row">
            <div class="col-12">
                <style>
                    .hover:hover {
                        background-color: #7DBA44;
                    }
                </style>
                <div
                    class="row g-sm-4 g-3 row-cols-xxl-5 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                    @foreach ($dog_breed_groups_relates as $dog_breed_groups_relate)
                        <div class="">
                            {{-- product-box-3  --}}
                            <div class="product-box-3 h-100 wow fadeInUp hover">
                                <a href="{{ route('dog.show', $dog_breed_groups_relate->id) }}">
                                    <img src="{{ $dog_breed_groups_relate->main_photo }}"
                                        class="img-fluid blur-up lazyload" alt="">
                                </a>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <a href="{{ route('dog.show', $dog_breed_groups_relate->id) }}">
                                            <h5 class="name">
                                                {{ $dog_breed_groups_relate->name ?? '' }}
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
