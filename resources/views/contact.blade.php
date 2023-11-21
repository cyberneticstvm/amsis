@extends("base")
@section("content")
<!-- rts about area start -->
<div class="rts-section-gap rts-about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt_md--50 mt_sm--50">
                <div class="about-eight-content-main-wrapper">
                    <div class="title-area">
                        <h2 class="title">Contact Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/contact/01.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('assets/images/contact/shape/01.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>Call Us 24/7</span>
                                <a href="tel:+914752999599">
                                    <h5>+91 475 2999599</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/contact/02.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('assets/images/contact/shape/02.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>MAke A Quote</span>
                                <a href="mailto:mva@amsisindia.com">
                                    <h5>mva@amsisindia.com</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
                <!-- single contact area -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-one-inner">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/contact/03.jpg') }}" alt="">
                        </div>
                        <div class="content">
                            <div class="icone">
                                <img src="{{ asset('assets/images/contact/shape/03.svg') }}" alt="">
                            </div>
                            <div class="info">
                                <span>Address</span>
                                <a href="#">
                                    <h5>AMSIS, Opposite to Avaneeswaram Railway Station, Kollam, Kerala - 691508</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single contact area end -->
            </div>
            <div class="row">
                <div class="mian-wrapper-form">
                    <div class="title-mid-wrapper-home-two sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                        <span class="pre">Get In Touch</span>
                        <h2 class="title">Need Help? Let's Get in Touch</h2>
                    </div>
                    <div id="form-messages"></div>
                    <form id="contact-form" class="contact-form-contact" action="{{ route('send.contact.email') }}" method="post">
                        <div class="name-email">
                            <input type="text" name="name" placeholder="Full Name" required="">
                            <input type="email" name="email" placeholder="Email Address" required="">
                        </div>
                        <input type="text" name="subject" placeholder="Your Subject">
                        <textarea placeholder="Type Your Message" name="message"></textarea>
                        <button type="submit" class="rts-btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection