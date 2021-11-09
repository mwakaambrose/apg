@extends("template/others")
@section("content")
    <!--====== Page Title Start ======-->
    <section class="page-title-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8">
                    <h1 class="page-title">Contact Us</h1>
                </div>
                <div class="col-auto">
                    <ul class="page-breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== Contact Section Start ======-->
    <section class="contact-section section-gap-extra-bottom">
        <div class="container">
            <!-- Contact Info Start -->
            <div class="row align-items-center justify-content-center">
                <div class="col-lx-4 col-lg-5 col-sm-10">
                    <div class="contact-info-text mb-md-70">
                        <div class="common-heading mb-30">
                            <span class="tagline">
                                <i class="fas fa-plus"></i> Donate Projects
                                <span class="heading-shadow-text">Donate</span>
                            </span>
                            <h2 class="title">Ready to Get More Information</h2>
                        </div>
                        <p>
                            Sedut perspiciatis unde omnis natus voluptatem accusantium dolore dantiumy totam apeam
                            eaquey quaventore veritatis architecto beatae.
                        </p>
                        <a href="events.html" class="main-btn mt-35">Get Free Quote <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 offset-xl-1">
                    <div class="contact-info-boxes">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-6 col-sm-10">
                                <div class="info-box text-center wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="icon">
                                        <i class="flaticon-place"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Our Location</h5>
                                        <p>
                                            Olia Road, 2nd Floor, URA Building
                                        </p>
                                    </div>
                                </div>
                                <div class="info-box text-center mt-30 mb-sm-30 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="icon">
                                        <i class="flaticon-envelope"></i>
                                    </div>
                                    <div class="info-content text-wrap overflow-hidden">
                                        <h5>Email Address</h5>
                                        <a href="#"><span class="__cf_email__">acholipaliamentarygroup@gmail.com</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-10">
                                <div class="info-box text-center wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="icon">
                                        <i class="flaticon-phone-call-1"></i>
                                    </div>
                                    <div class="info-content">
                                        <h5>Support 24/7</h5>
                                        <p>
                                            +012 (345) 689 37 <br>
                                            012345687
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Info End -->
            <div class="contact-from-area">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <div class="contact-maps">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d48372.81123152747!2d-73.96448279177292!3d40.733408396164116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1627206548218!5m2!1sen!2sbd"
                                loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <form action="#">
                                <h3 class="form-title">Send Us Message</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-field mb-25">
                                            <label for="name">Your Name</label>
                                            <input type="text" placeholder="Willie M. Stanley" id="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-field mb-25">
                                            <label for="phone-number">Phone Number</label>
                                            <input type="text" placeholder="Willie M. Stanley" id="phone-number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-field mb-25">
                                            <label for="email">Email Address</label>
                                            <input type="text" placeholder="support@gmail.com" id="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-field mb-25">
                                            <label for="subject">Subject</label>
                                            <input type="text" placeholder="I would like to" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-field mb-30">
                                            <label for="message">Write Message</label>
                                            <textarea id="message" placeholder="Hello"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-field">
                                            <button class="main-btn">Send Us Message <i class="far fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Section End ======-->
@endsection
