@extends('layouts.app')
@section('title', ' - Frequently asked Questions')
@section('content')
    <section class="faq-breadscrumb pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadscrumb-contain">
                        <h2>
                            Frequently asked Questions
                        </h2>
                        <p>We are glad having you here looking for the answer. As our team hardly working on the
                            product, feel free to ask any questions. We Believe only your feedback might move us
                            forward.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-contain">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="slider-4-2 product-wrapper">
                        <div>
                            <div class="faq-top-box">
                                <div class="faq-box-icon">
                                    <img src="../assets/images/inner-page/faq/start.png" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="faq-box-contain">
                                    <h3>Getting Started</h3>
                                    <p>Bring to the table win-win survival strategies to ensure proactive domination.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="faq-top-box">
                                <div class="faq-box-icon">
                                    <img src="../assets/images/inner-page/faq/help.png" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="faq-box-contain">
                                    <h3>Sales Question</h3>
                                    <p>Lorizzle ipsizzle boom shackalack sit get down get down.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="faq-top-box">
                                <div class="faq-box-icon">
                                    <img src="../assets/images/inner-page/faq/price.png" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="faq-box-contain">
                                    <h3>Pricing & Plans</h3>
                                    <p>Curabitizzle fizzle break yo neck, yall quis fo shizzle mah nizzle fo rizzle.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="faq-top-box">
                                <div class="faq-box-icon">
                                    <img src="../assets/images/inner-page/faq/contact.png" class="blur-up lazyload"
                                        alt="">
                                </div>

                                <div class="faq-box-contain">
                                    <h3>Support Contact</h3>
                                    <p>Gizzle fo shizzle bow wow wow bizzle leo bibendizzle check out this.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-box-contain section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="faq-contain">
                        <h2>Frequently Asked Questions</h2>
                        <p>
                            If you have any queries about recruitments, vacancies, or anything else, our team is ready to
                            response all your queries.
                        </p>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="faq-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        WHERE ARE YOU LOCATED?
                                        <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            We are located in Yangon Mandalay Expressway; however, we deliver puppies
                                            throughout Myanmar and internationally.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        ​CAN YOU DELIVER THE PUPPY DIRECTLY TO MY HOUSE?
                                        <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            If you live in Yangon, we will deliver to your house included in the price.
                                            Please <a href="{{ route('contact.index') }}">contact us</a> to enquire about
                                            other delivery destinations.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ​CAN I VISIT THE PUPPIES IN PERSON? <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, You can visit the our kennel.
                                            Our breeder network is widely dispersed geographically and it is necessary to
                                            avoid exposing puppies to potential infections before their immune system has
                                            fully developed. We carefully vet all of our breeders to assess the treatment,
                                            breeding methods and breed standards of the puppies. We can provide photos and
                                            videos for you to choose from.
                                        </p>
                                    </div>
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
