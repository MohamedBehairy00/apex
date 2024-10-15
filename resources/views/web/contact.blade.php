@extends('web.partials.main')
@section('content')
    <!-- Start Contact
                                                      ============================================= -->
    <div id="contact" class="contact-area de-pt wow fadeInUp" style="position:relative" data-wow-duration="3s"
        data-wow-delay=".2s">
        <img class="right-top-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">
        <img class="left-bottom-teama" src="{{ asset('web/assets/img/teama.png') }}" alt="teama">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="site-title mb-60 text-center">
                        <h2 class="mb-0">
                            Contact Us
                        </h2>
                    </div>
                </div>
            </div>
            <div class="contact-wpr">
                <div class="contact-content">
                    <div class="contact-lpm mb-100">
                        <div class="row g-5">
                            <div class="col-xl-4 col-md-6 col-lg-6">
                                <div class="contact-addr-box">
                                    <div class="contact-addr-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="contact-addr-desc">
                                        <h4>Phone Number</h4>
                                        <p>+44 (0) 750 750 8437 <br> +44 (0) 744 230 4594</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-6">
                                <div class="contact-addr-box">
                                    <div class="contact-addr-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="contact-addr-desc">
                                        <h4>Mail Address</h4>
                                        <p>info@apexglobus.co.uk</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-lg-6">
                                <div class="contact-addr-box">
                                    <div class="contact-addr-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact-addr-desc">
                                        <h4>Office Address</h4>
                                        <p>71-75 Shelton Street, <br> Covent Garden <br> London, UK</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form class="contact-form"  action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <h4 class="contact-tl">Send Message</h4>
                        <div class="row g-4">
                            <div class="col-md-6 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".3s">
                                <input type="text" name="full_name" class="form-control input-style-2"
                                    placeholder="Your Full Name*">
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
                                <input type="email" name="email" class="form-control input-style-2"
                                    placeholder="Your Email Address*">
                            </div>
                            <div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
                                <input type="text" name="subject" class="form-control input-style-2"
                                    placeholder="Subject...">
                            </div>
                            <div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s">
                                <textarea class="form-control input-style-2" name="message" placeholder="Your Message..."></textarea>
                            </div>
                            <div class="col-md-12 mt-50 contact-sub-btn text-center wow fadeInUp" data-wow-duration=".6s"
                                data-wow-delay=".6s">
                                <button type="submit" class="tm-btn-2">
                                    Submit Message
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                            <div class="col-md-12 mt-20">
                                <p class="form-message"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="map-section col-lg-12 col-md-12 col-sm-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9931.631612740543!2d-0.1235464!3d51.5149056!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760520785ee31f%3A0xa5e0ad1ba1c4d578!2sAPEX%20GLOBUS%20LIMITED!5e0!3m2!1sen!2seg!4v1714544732142!5m2!1sen!2seg"
                    width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- End Contact -->
    </main>
@endsection
