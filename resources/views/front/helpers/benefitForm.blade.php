<div class="col-lg-12">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif
    <form action="{{route('front.save_benefit')}}" method="post" class="contact-form bg-white rounded p-5" id="comment-form">
        @csrf
        <h4 class="mb-4">Write a comment</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="first_name" id="first-name"
                           placeholder="First Name:">
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
                    <input class="form-control" type="text" name="phone_number" id="phone-number"
                           placeholder="Phone Number:">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="email" name="email" id="email"
                           placeholder="Email Address:">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="date" name="birthday" id="birthday"
                           placeholder="Date Of Birth:">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="insurance_provider" id="insurance-provider"
                           placeholder="Insurance Provider:">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="member_id" id="member-id"
                           placeholder="Member ID:">
                </div>
            </div>
        </div>

        <div class="form-group">
            <select name="type_of_insurance" class="form-control" id="type-of-insurance">
                <option value="PPO">PPO</option>
                <option value="POS">POS</option>
                <option value="HMO/EPO">HMO/EPO</option>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="insurance_phone_number" id="insurance-phone-number"
                           placeholder="Insurance Telephone:">
                </div>
            </div>
        </div>

        <input class="btn btn-main btn-round-full" type="submit" name="submit-contact"
               id="submit_contact" value="Submit">
    </form>
</div>
