@extends('layouts.app')

@section('title','Nomads - Detail Travel ')

@section('content')
<main>
    <!-- Details Section -->
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Supertree Grove</h1>
                        <p>Singapore</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{url('frontend/images/gambar-details.jpg')}}" class="xzoom" id="xzoom-default" xoriginal="frontend/images/gambar-details.jpg">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="{{url('frontend/images/gambar-details.jpg')}}">
                                    <img src="{{url('frontend/images/thumbnails-1.jpg')}}" class="xzoom-gallery" width="128" height="76" xpreview="frontend/images/thumbnails-1.jpg">
                                </a>
                                <a href="{{url('frontend/images/gambar-details.jpg')}}">
                                    <img src="{{url('frontend/images/thumbnails-2.jpg')}}" class="xzoom-gallery" width="120" height="76" xpreview="frontend/images/thumbnails-2.jpg">
                                </a>
                                <a href="{{url('frontend/images/gambar-details.jpg')}}">
                                    <img src="{{url('frontend/images/thumbnails-3.jpg')}}" class="xzoom-gallery" width="128" height="76" xpreview="frontend/images/thumbnails-3.jpg">
                                </a>
                                <a href="{{url('frontend/images/gambar-details.jpg')}}">
                                    <img src="{{url('frontend/images/thumbnails-4.jpg')}}" class="xzoom-gallery" width="128" height="76" xpreview="frontend/images/thumbnails-4.jpg">
                                </a>
                                <a href="{{url('frontend/images/gambar-details.jpg')}}">
                                    <img src="{{url('frontend/images/thumbnails-5.jpg')}}" class="xzoom-gallery" width="128" height="76" xpreview="frontend/images/thumbnails-5.jpg">
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>Gardens by the Bay was part of the nation's plans to transform its "Garden City" to a "City in a Garden", with the aim of raising the quality of life by enhancing greenery and flora in the city. First announced by Prime Minister
                            Lee Hsien Loong at Singapore's National Day Rally in 2005, Gardens by the Bay was intended to be Singapore's premier urban outdoor recreation space and a national icon.
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="{{url('frontend/images/ic_event.png')}}" alt="Icon" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Night Forest</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{url('frontend/images/ic_language.png')}}" alt="Icon" class="features-image">
                                <div class="description">
                                    <h3>Language</h3>
                                    <p>English</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{url('frontend/images/ic_food.png')}}" alt="Icon" class="features-image">
                                <div class="description">
                                    <h3>Food</h3>
                                    <p>Chilli Crab</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="{{url('frontend/images/members-1.png')}}" alt="Member" class="members-image mr-1">
                            <img src="{{url('frontend/images/members-2.png')}}" alt="Member" class="members-image mr-1">
                            <img src="{{url('frontend/images/members-3.png')}}" alt="Member" class="members-image mr-1">
                            <img src="{{url('frontend/images/members-4.png')}}" alt="Member" class="members-image mr-1">
                            <img src="{{url('frontend/images/members-5.png')}}" alt="Member" class="members-image mr-1">
                        </div>
                        <hr>
                        <h2>Trip Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departures</th>
                                <td width="50%" class="text-right">
                                    22 Aug, 2019
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">
                                    4D 3N
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">
                                    Open Trip
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">
                                    $80,00 / Person
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
 <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush
@push('addon-script')
    <script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
    </script>       
@endpush