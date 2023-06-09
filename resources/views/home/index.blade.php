@extends('layouts.app')

@section('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div>
        <div class="container-fluid px-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="Image">
                        <div class="carousel-caption" style="left: 0; bottom: 0;">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 text-start">
                                        <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">25 Years
                                            of Working Experience</p>
                                        <h1 class="display-1 text-white mb-5 animated slideInRight">Industrial Solution
                                            Providing Company</h1>
                                        <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="Image">
                        <div class="carousel-caption" style="left: 0; bottom: 0;">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 text-start">
                                        <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">25 Years
                                            of Working Experience</p>
                                        <h1 class="display-1 text-white mb-5 animated slideInRight">The Best Reliable
                                            Industry Solution</h1>
                                        <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row gx-3 h-100">
                            <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                                <img class="img-fluid" src="{{ asset('assets/img/about-1.jpg') }}">
                            </div>
                            <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                                <img class="img-fluid" src="{{ asset('assets/img/about-2.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <p class="fw-medium text-uppercase text-primary mb-2">About Us</p>
                        <h1 class="display-5 mb-4">We Are Leader In Industrial Market</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                            et
                            eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0 bg-primary p-4">
                                <h1 class="display-2">25</h1>
                                <h5 class="text-white">Years of</h5>
                                <h5 class="text-white">Experience</h5>
                            </div>
                            <div class="ms-4">
                                <p><i class="fa fa-check text-primary me-2"></i>Power & Energy</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Civil Engineering</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Chemical Engineering</p>
                                <p><i class="fa fa-check text-primary me-2"></i>Mechanical Engineering</p>
                                <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Oil & Gas Engineering</p>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-envelope-open text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="mb-2">Email us</p>
                                        <h5 class="mb-0">sindos@example.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="mb-2">Call us</p>
                                        <h5 class="mb-0">+012 345 6789</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid facts my-5 p-5">
            <div class="row g-5">
                <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="text-center border p-5">
                        <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                        <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">25</h1>
                        <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="text-center border p-5">
                        <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                        <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">135</h1>
                        <span class="fs-5 fw-semi-bold text-white">Team Members</span>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="text-center border p-5">
                        <i class="fa fa-users fa-3x text-white mb-3"></i>
                        <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">957</h1>
                        <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="text-center border p-5">
                        <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                        <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">1839</h1>
                        <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative me-lg-4">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/feature.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <p class="fw-medium text-uppercase text-primary mb-2">Why Choosing Us!</p>
                        <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                            et
                            eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h4>Experienced Workers</h4>
                                        <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                            dolore erat amet</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h4>Reliable Industrial Services</h4>
                                        <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                            dolore erat amet</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h4>24/7 Customer Support</h4>
                                        <span>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                            dolore erat amet</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="fw-medium text-uppercase text-primary mb-2">Our Services</p>
                    <h1 class="display-5 mb-4">We Provide Best Industrial Services</h1>
                </div>
                <div class="row gy-5 gx-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <img class="img-fluid" src="{{ asset('assets/img/service-1.jpg') }}" alt="">
                            <div class="service-img">
                                <img class="img-fluid" src="{{ asset('assets/img/service-1.jpg') }}" alt="">
                            </div>
                            <div class="service-detail">
                                <div class="service-title">
                                    <hr class="w-25">
                                    <h3 class="mb-0">Civil & Gas Engineering</h3>
                                    <hr class="w-25">
                                </div>
                                <div class="service-text">
                                    <p class="text-white mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                        lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                            <a class="btn btn-light" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <img class="img-fluid" src="{{ asset('assets/img/service-2.jpg') }}" alt="">
                            <div class="service-img">
                                <img class="img-fluid" src="{{ asset('assets/img/service-2.jpg') }}" alt="">
                            </div>
                            <div class="service-detail">
                                <div class="service-title">
                                    <hr class="w-25">
                                    <h3 class="mb-0">Power & Energy Engineering</h3>
                                    <hr class="w-25">
                                </div>
                                <div class="service-text">
                                    <p class="text-white mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                        lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                            <a class="btn btn-light" href="">Read More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item">
                            <img class="img-fluid" src="{{ asset('assets/img/service-3.jpg') }}" alt="">
                            <div class="service-img">
                                <img class="img-fluid" src="{{ asset('assets/img/service-3.jpg') }}" alt="">
                            </div>
                            <div class="service-detail">
                                <div class="service-title">
                                    <hr class="w-25">
                                    <h3 class="mb-0">Plumbing & Water Treatment</h3>
                                    <hr class="w-25">
                                </div>
                                <div class="service-text">
                                    <p class="text-white mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos
                                        lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                            <a class="btn btn-light" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="fw-medium text-uppercase text-primary mb-2">Testimonial</p>
                    <h1 class="display-5 mb-5">What Our Clients Say!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item text-center">
                        <div class="testimonial-img position-relative">
                            <img class="img-fluid rounded-circle mx-auto mb-5"
                                src="{{ asset('assets/img/testimonial-1.jpg') }}">
                            <div class="btn-square bg-primary rounded-circle">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                                ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                                clita.</p>
                            <h5 class="mb-1">Client Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="testimonial-img position-relative">
                            <img class="img-fluid rounded-circle mx-auto mb-5"
                                src="{{ asset('assets/img/testimonial-2.jpg') }}">
                            <div class="btn-square bg-primary rounded-circle">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                                ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                                clita.</p>
                            <h5 class="mb-1">Client Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="testimonial-img position-relative">
                            <img class="img-fluid rounded-circle mx-auto mb-5"
                                src="{{ asset('assets/img/testimonial-3.jpg') }}">
                            <div class="btn-square bg-primary rounded-circle">
                                <i class="fa fa-quote-left text-white"></i>
                            </div>
                        </div>
                        <div class="testimonial-text text-center rounded p-4">
                            <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                                ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                                clita.</p>
                            <h5 class="mb-1">Client Name</h5>
                            <span class="fst-italic">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
