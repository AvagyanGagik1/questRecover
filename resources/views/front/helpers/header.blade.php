<header class="navigation">
    <div class="header-top ">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-md-4">
                    <div class="header-top-socials text-center text-lg-left text-md-left">
                        <a href="https://www.facebook.com/themefisher" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/themefisher" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://github.com/themefisher/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                    <div class="header-top-info">
                        <a href="tel:+23-345-67890">Call Us : <span>{{$contact->phone}}</span></a>
                        <a href="mailto:support@gmail.com"><i
                                class="fa fa-envelope mr-2"></i><span>{{$contact->email}}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-xl  py-4" id="navbar">
        <div class="container">
            <a class="navbar-brand col-2" href="{{route('front.index')}}">

                    <img class="img-fluid" src="images/static/Quest_Behavioral_ Health_Inc-03.png" alt="">
            </a>

            <button class="navbar-toggler collapsed text-light" type="button" data-toggle="collapse"
                    data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('front.index')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('front.about')}}">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{route('front.treatment')}}">TREATMENT</a>
                        <ul class="dropdown-menu d-xl-block d-none" aria-labelledby="dropdown03">
                            @foreach($treatmentTypes as $type)
                                <li><a class="dropdown-item" href="{{route('front.treatmentType',[$type->slug()])}}">{{$type->header}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @foreach($treatmentTypes as $type)
                        <li class="nav-item"><a class="nav-link d-xl-none" href="{{route('front.treatmentType',[$type->slug()])}}">{{$type->header}}</a></li>
                    @endforeach
{{--                    <li class="nav-item"><a class="nav-link" href="{{route('front.tour')}}">TOUR</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{route('front.testimonials')}}">TESTIMONIALS</a>--}}
{{--                    </li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{route('front.admissions')}}">ADMISSIONS</a></li>
{{--                    <li class="nav-item"><a class="nav-link" href="{{route('front.blog')}}">BLOG</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{route('front.contact')}}">Contact</a></li>--}}
                </ul>

                <div class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
                    <a href="tel:+18557837888" class="btn btn-solid-border btn-round-full">CALL NOW</a>
                </div>
            </div>
        </div>
    </nav>
</header>
