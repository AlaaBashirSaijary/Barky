@extends('master.app')
@section('content')
    {{-- <div class="site-banner"> --}}
    <div class="banner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content colored">
                        <h1>Contact Us</h1>
                        <div class="breadcum-items">
                            <span class="item color-primary"><a href={{ route('Home') }}>Home /</a></span>
                            <span class="item colored">Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    <!--site-banner-->

    <section class="contact-information padding-large mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 mb-3">
                    <div class="container">
                        <h2>Get in Touch</h2>

                        <div class="contact-detail d-flex flex-wrap mt-4">
                            <div class="detail mr-6 mb-4">
                                <h3>Phones</h3>
                                <ul class="list-unstyled">
                                    <li><i class="icon icon-phone"></i>+1650-243-0000</li>
                                    <li><i class="icon icon-phone"></i>+1650-243-0000</li>
                                </ul>
                            </div><!--detail-->
                            <div class="detail mb-4">
                                <h3>Emails</h3>
                                <ul class="list-unstyled">
                                    <li><i class="icon icon-envelope-o"></i>
                                        <a href="mailto:info@bakery.com">info@bakery.com</a>
                                    </li>
                                    <li><i class="icon icon-envelope-o"></i>
                                        <a href="mailto:info@bakery.com">info@bakery.com</a>
                                    </li>
                                </ul>
                            </div><!--detail-->
                            <div class="address detail mb-4">
                                <h3>Address</h3>
                                <ul class="list-unstyled">
                                    <li><i class="icon icon-map-marker"></i>
                                        North Melbourne VIC 3051, Australia</li>
                                    <li><i class="icon icon-map-marker"></i>
                                        North Melbourne VIC 3051, Australia</li>
                                </ul>
                            </div><!--detail-->
                            <div class="detail mb-4">
                                <h3>Social Links</h3>
                                <div class="social-links flex-container">
                                    <a href="#" class="icon icon-facebook"></a>
                                    <a href="#" class="icon icon-twitter"></a>
                                    <a href="#" class="icon icon-pinterest-p"></a>
                                    <a href="#" class="icon icon-youtube"></a>
                                    <a href="#" class="icon icon-linkedin"></a>
                                </div><!--social-links-->
                            </div><!--detail-->

                        </div><!--contact-detail-->
                    </div>
                </div><!--col-md-6-->

                <div class="col-md-6 p-0">
                    <div class="container">
                        <div class="row">
                            <div class="contact-information col-md-12">
                                <h2>Send A Message</h2>
                                <form action="{{ route('contact') }}" method="post"
                                    class="contact-form d-flex flex-wrap mt-4">
                                    @csrf
                                    <div class="text-input flex-container">
                                        <input type="text" name="name" placeholder="Name" class="name mr-3 mb-3">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <input type="text" name="email" placeholder="E-mail" class="mb-3">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div><!--text-input-->
                                    <textarea name="message" placeholder="Message" style="height: 150px;"></textarea>
                                    <button type="submit" name="submit">Submit</button>
                                </form>
                            </div><!--contact-information-->
                        </div>
                    </div>
                </div><!--col-md-6-->

            </div>
        </div>
    </section>

    <section class="google-map">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                    href="https://getasearch.com/fmovies"></a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 500px;
                        width: 100%;
                    }
                </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 500px;
                        width: 100%;
                    }
                </style>
            </div>
        </div>
    </section>
@endsection
