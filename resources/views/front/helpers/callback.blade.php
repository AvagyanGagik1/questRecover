<div class="col-lg-12">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif
    <form action="{{route('front.callback')}}" method="post" class="contact-form bg-white rounded p-5" id="comment-form">
        @csrf
        <h4 class="mb-4">REQUEST A CONFIDENTIAL CALLBACK 24/7</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="first_name"
                           id="first-name" placeholder="First Name:">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="last_name" id="last-name"
                           placeholder="Last Name:">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="email" name="email" id="mail"
                           placeholder="Email:">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="tel" name="phone" id="phone"
                           placeholder="Phone:">
                </div>
            </div>
        </div>


        <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                  placeholder="Comment"></textarea>

        <input class="btn btn-main btn-round-full" type="submit" name="submit-contact"
               id="submit_contact" value="Submit">
    </form>
</div>
