@extends('frontend.layouts.master')
@section('title')
    EASYBIMA - COMPARE AND BUY INSURANCE ONLINE
@endsection
@section('content')
    <section>
        <div class="background" style="background-image:url('{{ asset("frontend/imgs/home-bg.svg") }}'); padding-top:50px">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <h1 class="text-center welcome-heading">Shop the market and get insurance right.</h1>
                        <p class="text-center welcome-sub">Select a product to see your quotes</p>
                    </div>
                </div>

                <div class="row justify-content-md-center product-row">
                    <div class="col-md-10 text-center">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <a href="#" class="rcl__link-3qK rcl__neutral-1-3os home_hero-module--card--2q3kz">
                                    <p class="rcl__primary-3-2C1 home_hero-module--card-label--2UPq_ rcl__type-a-10-bold-2p_">Life</p>
                                    <img src="{{ asset('frontend/imgs/vector-logos/038-life insurance.png') }}" alt="Image" class="product-img">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <a href="#" class="rcl__link-3qK rcl__neutral-1-3os home_hero-module--card--2q3kz">
                                    <p class="rcl__primary-3-2C1 home_hero-module--card-label--2UPq_ rcl__type-a-10-bold-2p_">Homeowners</p>
                                    <img src="{{ asset('frontend/imgs/vector-logos/003-insurance.png') }}" alt="Image" class="product-img">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <a href="#" class="rcl__link-3qK rcl__neutral-1-3os home_hero-module--card--2q3kz">
                                    <p class="rcl__primary-3-2C1 home_hero-module--card-label--2UPq_ rcl__type-a-10-bold-2p_">Renters</p>
                                    <img src="{{ asset('frontend/imgs/vector-logos/028-insurance.png') }}" alt="Image" class="product-img">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <a href="#" class="rcl__link-3qK rcl__neutral-1-3os home_hero-module--card--2q3kz">
                                    <p class="rcl__primary-3-2C1 home_hero-module--card-label--2UPq_ rcl__type-a-10-bold-2p_">Auto</p>
                                    <img src="{{ asset('frontend/imgs/vector-logos/058-car insurance.png') }}" alt="Image" class="product-img">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <a href="#" class="rcl__link-3qK rcl__neutral-1-3os home_hero-module--card--2q3kz">
                                    <p class="rcl__primary-3-2C1 home_hero-module--card-label--2UPq_ rcl__type-a-10-bold-2p_">Disability</p>
                                    <img src="{{ asset('frontend/imgs/vector-logos/022-employee.png') }}" alt="Image" class="product-img">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <a href="#" class="rcl__link-3qK rcl__neutral-1-3os home_hero-module--card--2q3kz">
                                    <p class="rcl__primary-3-2C1 home_hero-module--card-label--2UPq_ rcl__type-a-10-bold-2p_">Pet</p>
                                    <img src="{{ asset('frontend/imgs/vector-logos/045-pet insurance.png') }}" alt="Image" class="product-img">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <a href="#" class="rcl__link-3qK rcl__neutral-1-3os home_hero-module--card--2q3kz">
                                    <p class="rcl__primary-3-2C1 home_hero-module--card-label--2UPq_ rcl__type-a-10-bold-2p_">Health</p>
                                    <img src="{{ asset('frontend/imgs/vector-logos/031-health insurance.png') }}" alt="Image" class="product-img">
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <a href="#" class="rcl__link-3qK rcl__neutral-1-3os home_hero-module--card--2q3kz">
                                    <p class="rcl__primary-3-2C1 home_hero-module--card-label--2UPq_ rcl__type-a-10-bold-2p_">More</p>
                                    <img src="{{ asset('frontend/imgs/vector-logos/055-shield.png') }}" alt="Image" class="product-img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row how-works">
            <div class="container">
                <p class="rcl__label-2pF text-center">Insurance simplified</p>
                <h3 class="text-center section-heading">How it works</h3>
                <div class="clearfix"></div>
                <div class="row ">
                    <div class="col-12 col-lg-8">
                            <img src="https://policygenius-images.imgix.net/photos/shared/compare-top-5-life-insurance-quotes-on-tablet.png?fit=max&auto=format&ch=Width,DPR&w=720">
                    </div>
                    <div class="col-12 col-lg-4">
                        <ul class="how-works-ul">
                            <li>
                                <p class="list-heading"><strong>Learn</strong></p>
                                <p class="list-disc">
                                    Find out everything you ever (or never) wanted to know about insurance. Unbiased advice, without the jargon.
                                </p>
                            </li>
                            <li>
                                <p class="list-heading"><strong>Compare</strong></p>
                                <p class="list-disc">
                                    Compare insurance quotes side by side to find the best option - and save money doing it.
                                </p>
                            </li>
                            <li>
                                <p class="list-heading"><strong>Apply</strong></p>
                                <p class="list-disc">
                                    Apply and buy through Policygenius and let our licensed advisors handle the rest. Free of hassle, free of charge.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row padding-bottom-50">
            <div class="container">
                <div class="row map-section justify-content-end">
                    <div class="col-12 col-md-6 col-lg-4 align-self-end">
                        <p class="rcl__label-2pF ">OUR TRACK RECORD</p>
                        <div class="clearfix "></div>
                        <br>
                        <h3>We've place billions of dollars in coverage.</h3>
                        <p class="p">
                            From coast to coast, we’ve helped over 30 million people shop for insurance, and protected our customers with over $35 billion in coverage.
                        </p>
                        <button type="button" class="btn btn-outline-success">GET QUOTES</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row padding-bottom-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="rcl__label-2pF ">WE'VE HELPED MILLIONS OF PEOPLE</p>
                        <h3>And they actually <br> enjoyed it.</h3>
                        <br>
                        <p class="p">Awesome Service! Awesome Service! Awesome Service! Awesome Service! Awesome Service! Awesome Service!</p>
                        <br>
                        <p class="p"><b>-Bred Pit.</b></p>
                    </div>

                    <div class="col-12 col-md-6">
                        <img src="https://policygenius-images.imgix.net/photos/home/father-holding-up-son-reviews.jpg?fit=max&auto=format&ch=Width,DPR&w=1080" alt="Image" class="img-test">
                    </div>
                </div>
            </div>
        </div>
        <div class="row padding-bottom-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center">Let’s get you some life insurance.</h3>
                        <div class="clearfix"></div>

                    </div>
                </div>
                <form action="#" class="form-group" method="GET">
                    <div class="row justify-content-md-center padding-left-100">
                        <div class="col-md-4">
                            <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="col-md-4">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn--gradient">GET QUOTES</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row padding-bottom-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p class="rcl__label-2pF ">REAL HUMAN HELP</p>
                        <h3>Let our people protect your people.</h3>

                        <p class="p">
                            Our licensed advisors deal with the insurer so you don’t have to. No AI bots, no robocalls, no salespeople. Just real human help from start to finish.
                        </p>
                        <br>
                        <a href="#" class="btn btn-outline-success">GET QUOTE</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="https://policygenius-images.imgix.net/photos/home/agent-talking-to-customer-on-the-phone.jpg?fit=max&auto=format&ch=Width,DPR&w=1080" alt="IMAGE" class="img-test">
                    </div>
                </div>
            </div>
        </div>

        <div class="row how-works padding-bottom-50">
            <div class="container">
                <h3 class="text-center">The top questions people ask us.</h3>

                <section id="accordion1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                                <div class="accordion accordion-1" id="accordion01">
                                    <!-- Panel 01 -->
                                    <div class="card">
                                        <div class="card-heading">
                                            <a class="card-link" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-3">What Payment Methods Are Available? </a>
                                        </div>
                                        <div id="collapse01-3" class="collapse show" data-parent="#accordion01">
                                            <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to provide sensitive information online or over the internet.</div>
                                        </div>
                                    </div>
                                    <!-- Panel 02 -->
                                    <div class="card">
                                        <div class="card-heading">
                                            <a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2">Do I have to commit to a contract? </a>
                                        </div>
                                        <div id="collapse01-2" class="collapse" data-parent="#accordion01">
                                            <div class="card-body">Trends, vision dominates a lot of our subconscious interpretation of the world around us. On top it, pleasing images create a better user experience. Rounding up a bunch of specific designs.Trends, vision dominates a lot of our subconscious interpretation of the world around us. </div>
                                        </div>
                                    </div>
                                    <!-- Panel 03 -->

                                    <div class="card">
                                        <div class="card-heading">
                                            <a class="card-link collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1">Which Plan Is Right For Me?</a>
                                        </div>
                                        <div id="collapse01-1" class="collapse" data-parent="#accordion01">
                                            <div class="card-body">Trends, vision dominates a lot of our subconscious interpretation of the world around us. On top it, pleasing images create a better user experience. Rounding up a bunch of specific designs.Trends, vision dominates a lot of our subconscious interpretation of the world around us. </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                         </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row padding-bottom-50 margin-top-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center">Let’s get you some life insurance.</h3>
                        <div class="clearfix"></div>

                    </div>
                </div>
                <form action="#" class="form-group" method="GET">
                    <div class="row justify-content-sm-center padding-left-100">
                        <div class="col-md-4">
                            <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
                        </div>
                        <div class="col-md-4">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email Address">
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn--gradient">GET QUOTES</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-11 offset-md-1 bg-grey padding-40">
                <h1 class="text-end mt-5 lh1">Read the latest articles from <br>Easybima Magazine.</h1>
            </div>
        </div>

        <div class="row mt-50">
            <div class="container">

                <div class="row">

                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-customer filter-tips">
                        <div class="case-item-container">
                            <div class="case--img">
                                <img src="https://policygenius-images.imgix.net/photos/home/owl.jpeg?fit=max&auto=format&ch=Width,DPR&w=180%20180w" alt="case Item">
                                <div class="case--hover">
                                    <div class="case--action">
                                        <a href="#" title="case Item"></a>
                                    </div>
                                    <!-- .case-action end -->
                                </div>
                                <!-- .case-hover end -->
                            </div>
                            <!-- .case-img end -->
                            <div class="case--content">
                                <div class="case--cat">
                                    <a href="#">Business Tips</a><a href="#">Consulting</a>
                                </div>
                                <div class="case--title">
                                    <h4><a href="case-study-single.html">Grow your business with an unexpected niche!</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-customer filter-tips">
                        <div class="case-item-container">
                            <div class="case--img">
                                <img src="https://policygenius-images.imgix.net/photos/home/owl.jpeg?fit=max&auto=format&ch=Width,DPR&w=180%20180w" alt="case Item">
                                <div class="case--hover">
                                    <div class="case--action">
                                        <a href="#" title="case Item"></a>
                                    </div>
                                    <!-- .case-action end -->
                                </div>
                                <!-- .case-hover end -->
                            </div>
                            <!-- .case-img end -->
                            <div class="case--content">
                                <div class="case--cat">
                                    <a href="#">Business Tips</a><a href="#">Consulting</a>
                                </div>
                                <div class="case--title">
                                    <h4><a href="case-study-single.html">Grow your business with an unexpected niche!</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 case-item filter-customer filter-tips">
                        <div class="case-item-container">
                            <div class="case--img">
                                <img src="https://policygenius-images.imgix.net/photos/home/owl.jpeg?fit=max&auto=format&ch=Width,DPR&w=180%20180w" alt="case Item">
                                <div class="case--hover">
                                    <div class="case--action">
                                        <a href="#" title="case Item"></a>
                                    </div>
                                    <!-- .case-action end -->
                                </div>
                                <!-- .case-hover end -->
                            </div>
                            <!-- .case-img end -->
                            <div class="case--content">
                                <div class="case--cat">
                                    <a href="#">Business Tips</a><a href="#">Consulting</a>
                                </div>
                                <div class="case--title">
                                    <h4><a href="case-study-single.html">Grow your business with an unexpected niche!</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <div class="row mt-100 padding-40">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3>JOIN OUR NEWSLETTER</h3>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="row justify-content-md-end">
                            <div class="col-6">
                                <input type="email" name="email" class="form-control" placeholder="ENTER EMAIL ADDRESS">
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn--gradient">GET QUOTES</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
