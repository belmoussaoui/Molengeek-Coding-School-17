<!-- ======= Contact Section ======= -->
<section id="contact" class="contact section-bg">
<div class="container" data-aos="fade-up">

    <div class="section-title">
    <h2>{{ $contact->section->title }}</h2>
    <p>{{ $contact->section->text }}</p>
    </div>

    <div class="row">

    <div class="col-lg-6">

        <div class="row">
        <div class="col-md-12">
            <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>{{ $contact->address_street }}, {{ $contact->address_city }}, {{ $contact->address_number }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box mt-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>{{ $contact->email1 }}<br>{{ $contact->email2 }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box mt-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>{{ $contact->phone1 }}<br>{{ $contact->phone2 }}</p>
            </div>
        </div>
        </div>

    </div>

    <div class="col-lg-6 mt-4 mt-md-0">
        <form  action="/send-mail"  method="post"  role="form"  class="php-email-form">
        @csrf
        <div class="row">
            <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
    </div>

    </div>

</div>
</section><!-- End Contact Section -->