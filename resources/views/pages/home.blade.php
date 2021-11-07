@extends('layouts.app')

@section('title')
Nomads - Travel Website 
@endsection

@section('content')
    <header class="text-center">
    <h1>
        Explore the Beautiful World
        <br> As Easy One Click
    </h1>
    <p class="mt-3">You will see beautiful moment
        <br> you never see before
    </p>

    <a href="#" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>
<main>
    <div class="container">
        <!-- Statistik Section -->
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 pl-md-4 pl-lg-3 stats-detail">
                <h2 class="text-center">20k</h2>
                <p class="text-center">Members</p>
            </div>
            <div class="col-3 col-md-2 pl-md-4 pl-lg-3 stats-detail">
                <h2 class="text-center">12</h2>
                <p class="text-center">Countries</p>
            </div>
            <div class="col-3 col-md-2 pl-md-4 pl-lg-3 stats-detail">
                <h2 class="text-center">3k</h2>
                <p class="text-center">Hotels</p>
            </div>
            <div class="col-3 col-md-2 pl-md-4 pl-lg-3 stats-detail">
                <h2 class="text-center">72</h2>
                <p class="text-center">Partners</p>
            </div>
        </section>
    </div>

    <!-- Popular Section -->
    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Wisata Popular</h2>
                    <p>
                        Something that you never try <br> before in this world
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Content Section -->
    <section class="section-popular-content" id="popularContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-6 col-sm-6 col-md-5 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(frontend/images/popular-1.jpg)">
                        <div class="travel-country">
                            INDONESIA
                        </div>
                        <div class="travel-location">
                            MYSTICAL GATE
                        </div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-5 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(frontend/images/popular-2.jpg)">
                        <div class="travel-country">
                            SINGAPORE
                        </div>
                        <div class="travel-location" style="margin-right:-11px;">
                            SUPERTREE GROVE
                        </div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-5 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(frontend/images/popular-3.jpg)">
                        <div class="travel-country">
                            JAPAN
                        </div>
                        <div class="travel-location">
                            OLD TEMPLE
                        </div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-5 col-lg-3">
                    <div class="card-travel text-center d-flex flex-column" style="background-image:url(frontend/images/popular-4.jpg)">
                        <div class="travel-country">
                            KOREA
                        </div>
                        <div class="travel-location">
                            JEJU ISLAND
                        </div>
                        <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Networks Section -->
    <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our <span id="partner-header" style="color:#212EA7">Networks<span></h2>
                    <p>Companies are trusted us <br> more than just a trip</p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="frontend/images/partners.png" alt="Logo Partner" class="img-partners">
                </div>
            </div>
        </div>
    </section>

    <!-- Section Testimonial -->
    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are <span style="color:#FF4848">Loving</span> Us</h2>
                    <p>Something that you never try <br> before in this world</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Testimonial Content -->
    <section class="section-testimonial-content" id="testimonialContent">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-1.png" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Angga Rizky</h3>
                            <p class="testimonial">
                                “It was glorious and I could not stop to say wohooo for every single moment”
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Mystical Gate, Indonesia
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-2.png" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Michelle Vania</h3>
                            <p class="testimonial">
                                “The waves, the blue sky, the beach. It will forever stay in my heart” </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Jeju Island, Korea </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial-3.png" alt="User" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Michael Jackjon</h3>
                            <p class="testimonial">
                                “I love the old temple in Japan and all their traditional culture. I can feel the spirit of a Samurai” </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Old Temple, Japan </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection