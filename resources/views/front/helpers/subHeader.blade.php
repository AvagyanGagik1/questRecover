
<section class="page-title bg-1" style="
    background: url({{$image}});ackground-size: cover;
    {{Request::route()->getName() === \App\Http\Helpers\Constants::FRONT_ADMISSION?
    " background-position: bottom;":"background-position: center;"}}
    background-repeat: no-repeat;
    ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <h1 class="text-capitalize mb-4">{{$header}}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
