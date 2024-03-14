@extends('frontend.layouts.main')
@section('main-container')


    <!-- Masthead-->
    <header class="masthead" style="background: linear-gradient(to bottom, rgba(254, 221, 2, 0.5), rgba(110, 193, 228, 0.5)),url({{ url('frontend/assets/img/bg-masthead.jpg') }});">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="text-center logo-container" style="margin-bottom: 0px;">
                    <img src="{{ url('frontend/assets/img/gng_logo.png') }}" class="img-responsive"
                        style="background-color: whitesmoke; border-radius: 1.9rem;">
                </div>
                <div class="col-lg-8 align-self-end">
                    <h2 class="text-dark font-weight-bold">We help you grow.</h2>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <h5 class="text-dark-75 mb-3" style="font-weight: bold;">We take you to glory.</h5>
                    <!-- Reduced mb value -->
                    <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                </div>
            </div>
        </div>

    </header>
    <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <!-- First Row for Founder and Vision -->
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <!-- Founder Card -->
                <div class="col-lg-4 text-center">
                    <div class="card special" style="padding-top: 10%;border-radius: 3.5rem; background-color:#fedd02">
                        <div class="card-body" style="border-radius: 3.5rem;">
                            <img class="img-rounded" src="{{ url('frontend/assets/img/pk_alt.jpeg') }}"
                                style="height:auto;width:75%;">
                            <div class="card-footer">
                                <p class="text-dark"><b>Prashant Katikar, Founder</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Vision -->
                <div class="col-lg-4 text-center">
                    <h2 class="text-dark mt-0">Vision!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-dark-75 mb-4">Growth & Glory Consulting seeks to empower organisations, new or
                        established, by being the right professional adviser on their journey towards growth and glory.!
                    </p>
                </div>
                <!-- Award Card -->
                <div class="col-lg-4 text-center">
                    <div class="card special" style="padding-top: 10%;border-radius: 3.5rem;background-color:#fedd02;">
                        <div class="card-body" style="border-radius: 3.5rem;">
                            <img class="img-rounded" src="{{ url('frontend/assets/img/award.jpeg') }}"
                                style="height:auto;width:75%;">
                            <div class="card-footer">
                                <p class="text-dark"><b>Asia's Top 30 Information Technology<br>
                                        Leaders Award 2015</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second Row for About Us -->
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-dark mt-0">About Us!</h2>
                    <hr class="divider divider-light" />
                    <p class="text-dark-75 mb-4">Led from the front by Prashant Katikar, who has been the recipient of
                        Asia's Top 30 Information Technology Leaders Award 2015, Growth & Glory Consulting was brought
                        to life in the year 2012.
                        With a rich experience in Information Technology, IT services, Product Development, Services
                        Platform Development, and Product Marketing, G & G brings a lot to the table and envisions to
                        leverage this experience to collaborate with organisations who are on the look out for the right
                        guidance to either enhance or start their business.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Our Expertise</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-lightbulb fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Start-Up Advisor</h3>
                        <p class="text-muted mb-0">Guiding start-ups through early-stage challenges, focusing on
                            strategy, planning, and market entry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-cpu fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Product Development</h3>
                        <p class="text-muted mb-0">Transforming ideas into market-ready products with innovative
                            technology and design thinking.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-diagram-3 fs-1 text-primary"></i></div>
                        <h3 class="h4 mb-2">Digital Manufacturing & IoT</h3>
                        <p class="text-muted mb-0">Empowering industries with smart manufacturing solutions and IoT
                            integration for efficiency and growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ url('frontend\assets/img/g1.jpeg') }}" title="Trade Show">
                        <img class="img-fluid" src="{{ url('frontend\assets/img/g1.jpeg') }}" alt="Trade Show" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Business</div>
                            <div class="project-name">Trade Show</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ url('frontend\assets/img/g2.jpeg') }}" title="Corporate Event">
                        <img class="img-fluid" src="{{ url('frontend\assets/img/g2.jpeg') }}" alt="Corporate Event" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Corporate</div>
                            <div class="project-name">Corporate Event</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ url('frontend\assets/img/g3.jpeg') }}" title="Networking Event">
                        <img class="img-fluid" src="{{ url('frontend\assets/img/g3.jpeg') }}" alt="Networking Event" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Professional</div>
                            <div class="project-name">Networking Event</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ url('frontend\assets/img/g4.jpeg') }}" title="Seminar">
                        <img class="img-fluid" src="{{ url('frontend\assets/img/g4.jpeg') }}" alt="Seminar" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Education</div>
                            <div class="project-name">Professional Seminar</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ url('frontend\assets/img/g5.jpeg') }}" title="Conference">
                        <img class="img-fluid" src="{{ url('frontend\assets/img/g5.jpeg') }}" alt="Conference" />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Business</div>
                            <div class="project-name">Conference</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ url('frontend\assets/img/auto_cl') }}uster_event.jpeg"
                        title="Webinar">
                        <img class="img-fluid" src="{{ url('frontend\assets/img/auto_cl') }}uster_event.jpeg"
                            alt="Webinar" />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Institute</div>
                            <div class="project-name">Webinar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Testimonials-->
    <section id="testimonials" class="py-5">
        <div class="container">
            <h2 class="text-center mt-0">Testimonials</h2>
            <hr class="divider" />
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img src="{{ url('frontend/assets/img/auto_cluster_event.jpeg') }}" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item active">
                        <img src="{{ url('frontend/assets/img/think_digital_rochester.jpeg') }}" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('frontend/assets/img/g2.jpeg') }}" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"
                        style="background-color: #000;color: aliceblue; border-radius: 2rem;" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"
                        style="background-color: #000;color: aliceblue; border-radius: 2rem;" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Let's Get In Touch!</h2>
                    <hr class="divider" />
                    <h6>Growth & Glory Consulting</h6>
                    <p class="text-muted mb-5">C-815, Five Gardens<br>
                        Pune 411017<br>
                        India</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                required.
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                                style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>

                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                            </div>
                        </div>

                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton"
                                type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-item">
                                <i class="bi-phone fs-2 mb-3 text-muted"></i>
                                <p>(+91) 97635 82190</p>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="mail-item">
                                <i class="bi-envelope fs-2 mb-3 text-muted"></i>
                                <p>prashant@growthandglory.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
