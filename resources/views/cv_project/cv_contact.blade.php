@extends('layouts.cv_welcome')

@section('content')


<!-- Contacts section -->
<section class="site-section section-contact" id="contact">
    <div class="container">
        <h2>CONTACT ong-creation</h2>
        <p class="section-subtitle"><span>Here i am</span></p>
        <div class="row">
            <form action="/contact" method="post">
                @csrf
                <div class="col-md-4">
                    <input class="form-control" type="text" placeholder="Name" name="name" required>
                </div>
                <div class="col-md-4">
                    <input class="form-control" type="email" placeholder="Email" name="email" required>
                </div>
                <div class="col-md-4">
                    <input class="form-control" type="text" placeholder="Subject" name="sub" required>
                </div>
                <div class="col-sm-12">
                    <textarea class="form-control" placeholder="Your Message" name="urmessage" required></textarea>
                </div>

                <div class="col-sm-12">
                    <button class="btn btn-inverted" type="submit">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section><!-- /.section-contact-->
<!-- End Contacts section -->
@endsection
