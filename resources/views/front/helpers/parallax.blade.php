{{--to do background--}}
<section class="section cta" style="background: url({{optional($contact)->image}}) fixed 50% 50%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="cta-item  bg-white p-5 rounded">
                    <h2 class="mt-2 mb-4">Contact us NOW</h2>
                    <h3><a href="tel:{{optional($contact)->phone}}"><i class="ti-mobile mr-3 text-color"></i>{{optional($contact)->phone}}</a></h3>
                </div>
            </div>
        </div>
    </div>
</section>
