@extends("base")
@section("content")
<!-- rts about area start -->
<div class="rts-section-gap rts-about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt_md--50 mt_sm--50">
                <div class="about-eight-content-main-wrapper">
                    <div class="title-area">
                        <h2 class="title">About Us</h2>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="thumbnail-about-eight">
                        <img src="{{ asset('assets/images/about/more.jpg') }}" alt="about-image">
                        <div class="experience-area">
                            <div class="image-area">
                                <img src="{{ asset('assets/images/about/16.jpg') }}" alt="about">
                                <span>5+</span>
                            </div>
                            <p>Years Of <br>
                                Experiences</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt_md--50 mt_sm--50">
                    <div class="about-eight-content-main-wrapper">
                        <div class="title-area">
                            <span>More About AMSIS</span>
                            <h2 class="title">We Build for Your Comfort</h2>
                        </div>
                        <p class="disc-1">
                            Our comprehensive technologies, products and services, enable our multidisciplinary teams of experts to cater to Industries, Institutions, Municipalities, Communities, and Homes.<br/>
                            we serve our markets with a sustained focus on customer satisfaction, technological innovation and dedicated service.<br/>
                            Our capability to deliver comprehensive solutions with complete technical support makes us a partner to depend on.
                        </p>
                        <div class="contacta-area mt--40 mt_sm--20">
                            <a href="/contact" class="rts-btn btn-primary">Make Appointment</a>
                            <div class="call-area">
                                <div class="icon">
                                    <i class="fa-regular fa-phone-volume"></i>
                                </div>
                                <div class="detail">
                                    <span>Call Us Now</span>
                                    <a href="tel:+914752999599" class="number">
                                        +91 475 2999599
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection