@extends('layout/main')

@section('container')

<!-- container start here -->

<div class="container contact">
    <div class="row">
        <div class="col-lg-8 col-sm-12">
            <div class="contact-form-right">
                <h2>GET IN TOUCH</h2>
                <p>If you want to talk to us about your complaint, we want to hear from you.</p>
                <form method="POST" action="{{ route('contact.submit') }}" enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required data-error="Please enter your Subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="msg" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="submit-button text-center">
                                <button class="btn btn-custom tombol" id="submit" type="submit">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="contact-info-left">
                <div class="container">
                    <h2>CONTACT INFO</h2>
                        <p>We are very approachable and want to talk to you. Feel free to call, email us, Tweet us or just complete the inquiry form. </p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 9000 <br>Preston Street Wichita,<br> KS 87213 </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+62-81318418394">+62-8131 841 8394</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:nadyaaazahraa@gmail.com">milkyWay@gmail.com</a></p>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- container ends here -->

@endsection