@extends('layouts.front.index')


@section('content')
    <div class="main-wrapper ">
        <!-- contact form start -->
        <section class="contact-form-wrap section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12 m-auto">
                        <div class="contact-content pl-lg-5 mt-5 mt-lg-0">
                            <h2 class="mb-5 mt-2">{{$contact->header}}</h2>

                            <ul class="address-block list-unstyled">
                                <li>
                                    <i class="ti-direction mr-3"></i>Address: {{$contact->address}}
                                </li>
                                <li>
                                    <i class="ti-email mr-3"></i>Email: {{$contact->email}}
                                </li>
                                <li>
                                    <i class="ti-mobile mr-3"></i>Phone: {{$contact->phone}}
                                </li>
                            </ul>

                            <ul class="social-icons list-inline mt-5">
                                <li class="list-inline-item">
                                    <a href="http://www.themefisher.com"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.themefisher.com"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="http://www.themefisher.com"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="google-map">
            <div id="map"></div>
        </div>


    </div>
@endsection
