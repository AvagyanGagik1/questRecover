<section class="section service border-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="section-title">
                    <h2 class="mt-3 content-title ">TREATMENT SERVICES</h2>
                    <p>A digital agency isn't here to replace your internal team, we're here to partner</p>
                </div>
            </div>
        </div>
        @if(isset($data))
            @foreach($data as $datum)
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="service-item mb-5">
                            <h4 class="mb-3 text-center">{{$datum->header}}</h4>
                            <div class="d-flex">
                                {!! $datum->text !!}
                                <img src="{{$datum->image}}" alt="" style="width: 70%;margin-left: 20px;
    margin-bottom: 30px;" height="200">
                            </div>
                            <a href="{{route('front.treatmentType',[$datum->slug()])}}"
                               class="btn btn-main btn-round-full">{{$datum->name}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>
