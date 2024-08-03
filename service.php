<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Indigo Catering Services</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="img/indigo_logo.png" sizes="32x32" />
        <link rel="icon" href="img/indigo_logo.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="img/indigo_logo.png" />
        <meta name="msapplication-TileImage" content="img/indigo_logo.png" />
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid nav-bar">
            <div class="container">
                <nav class="navbar navbar-light navbar-expand-lg py-4">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/indigo_logo.png" class="mb-0" alt="indigo logo" width="100px">
                        <!-- <h1 class="text-primary fw-bold mb-0">Indigo<span class="text-dark">Catering</span> </h1> -->
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <!-- <a href="about.php" class="nav-item nav-link">About</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="about.php#overview" class="dropdown-item">Company Overview</a>
                                    <a href="about.php#mission" class="dropdown-item">Our Mission</a>
                                    <a href="about.php#vision" class="dropdown-item">Our Vision</a>
                                    <a href="about.php#core" class="dropdown-item">Core Values</a>
                                    <a href="about.php#team" class="dropdown-item">Our Team</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="service.php#onsitefoodserve" class="dropdown-item">Onsite Food Service</a>
                                    <a href="service.php#buildingmaintenance" class="dropdown-item">Building Maintenance & Upkeep Services</a>
                                    <a href="service.php#staffingpayrollsolutions" class="dropdown-item">Staffing & Payroll Solutions</a>
                                    <a href="service.php#vehiclerentalservices" class="dropdown-item">Vehicle Rental Services</a> 
                                    <a href="service.php#projectlocation" class="dropdown-item">Project Location</a> 
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Why Choose Us</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="why_choose_us.php#whyindigo" class="dropdown-item">Why Indigo</a>
                                    <a href="why_choose_us.php#peacewithsafety" class="dropdown-item">Peace With Safety</a>
                                </div>
                            </div>
                            <a href="director_speech.php" class="nav-item nav-link">Director's' Say</a>
                            <a href="event.php" class="nav-item nav-link">Events</a>
                            <!-- <a href="menu.php" class="nav-item nav-link">Menu</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu bg-light">
                                    <a href="book.php" class="dropdown-item">Booking</a>
                                    <a href="blog.php" class="dropdown-item">Our Blog</a>
                                    <a href="team.php" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                    <a href="404.php" class="dropdown-item">404 Page</a>
                                </div>
                            </div> -->
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <!-- <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a> -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->        <!-- Hero Start -->
        <div class="container-fluid bg-light py-6 my-6 mt-0">
            <div class="container text-center animated bounceInDown">
                <h1 class="display-1 mb-4">Services</h1>
                <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark" aria-current="page">Services</li>
                </ol>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Service Start -->
        <div class="container-fluid service py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Services</small>
                    <h1 class="display-5 mb-5">What We Offer</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <!-- <i class="fas fa-cheese fa-7x text-primary mb-4"></i> -->
                                    <img src="img/about_1.jpg" class="img-fluid rounded mb-4" width="100px">
                                    <h4 class="mb-3">Onsite Food Service</h4>
                                    <p class="mb-4">Experience exceptional onsite food service provided by us, offering diverse menus, impeccable quality, and personalized culinary experiences for every occasion.</p>
                                    <a href="service.php#onsitefoodserve" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <!-- <i class="fas fa-pizza-slice fa-7x text-primary mb-4"></i> -->
                                    <!-- <i class="fas fa-walking fa-7x text-primary mb-4"></i> -->
                                    <img src="img/maintenance.jpg" class="img-fluid rounded mb-4" width="100px">
                                    <h4 class="mb-3">Building Maintenance & Upkeep Services</h4>
                                    <p class="mb-4">Elevate your property's standards with our comprehensive building maintenance and upkeep services, ensuring optimal functionality and aesthetic appeal.</p>
                                    <a href="service.php#buildingmaintenance" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <!-- <i class="fas fa-hotdog fa-7x text-primary mb-4"></i> -->
                                    <!-- <i class="fas fa-walking fa-7x text-primary mb-4"></i> -->
                                    <img src="img/payroll.jpg" class="img-fluid rounded mb-4" width="100px">
                                    <h4 class="mb-3">Staffing & Payroll Solutions</h4>
                                    <p class="mb-4">We provide tailored staffing solutions with dedicated roles and compliance reviews, along with outsourced payroll services for seamless administrative operations.</p>
                                    <a href="service.php#staffingpayrollsolutions" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <!-- <i class="fas fa-wine-glass-alt fa-7x text-primary mb-4"></i> -->
                                    <!-- <i class="fas fa-wheelchair fa-7x text-primary mb-4"></i> -->
                                    <img src="img/car_rent.jpg" class="img-fluid rounded mb-4" width="100px">
                                    <h4 class="mb-3">Vehicle Rental Services</h4>
                                    <p class="mb-4">Experience convenient and reliable vehicle rental services tailored to your needs, ensuring seamless transportation solutions for every occasion.</p>
                                    <a href="service.php#vehiclerentalservices" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-hamburger fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Bento Catering</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.3s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-walking fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Home Delivery</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.5s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-wheelchair fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Sit-down Catering</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.7s">
                        <div class="bg-light rounded service-item">
                            <div class="service-content d-flex align-items-center justify-content-center p-4">
                                <div class="service-content-icon text-center">
                                    <i class="fas fa-utensils fa-7x text-primary mb-4"></i>
                                    <h4 class="mb-3">Buffet Catering</h4>
                                    <p class="mb-4">Contrary to popular belief, ipsum is not simply random.</p>
                                    <a href="#" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- service details start  -->

        <div class="container-fluid py-6" id="onsitefoodserve" style="background-color: #f5c2a34d;">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Onsite Food Service</small>
                        <h1 class="display-5 mb-4">Indulge in our exceptional onsite food service—diverse menus, impeccable quality, personalized experiences for every occasion.</h1>
                        <p class="mb-4">
                            Indigo Catering and Services offers customized turnkey Solutions for Onsite food services, Housekeeping services and technical maintenance services across the country since year 2007.
                        </p>
                        <p class="mb-4">
                            These services are being provide to different segments with each having its own distinct prioritites.
                        </p>
                        <p class="mb-4">
                            We provide duration based onsite catering services to a minimum of 50 to any number on permanent basis. 
                        </p>
                        <p class="mb-4">
                            These services are fully customized depending clients requirement. Indigo supports these services across the country.
                        </p>
                        <div class="row g-4 text-dark mb-5">
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Industrial Canteens
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Institutional Hostel Messes Camp Catering
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Remote site
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Hospital Catering
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Retail Food Courts
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <img src="img/about_1.jpg" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-6" id="buildingmaintenance">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <img src="img/maintenance.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Building Maintenance & Upkeep Services</small>
                        <h1 class="display-5 mb-4">Enhance your property through our thorough maintenance services, guaranteeing both functionality and aesthetic allure</h1>
                        <p class="mb-4">
                            We specialize in turnkey building maintenance services, providing Integrated Facility Management solutions tailored to your needs. Our comprehensive offerings encompass mechanized housekeeping solutions, engineering services, and soft services, ensuring your property is impeccably maintained from top to bottom.
                        </p>
                        <p class="mb-4">
                            Moreover, our technical maintenance services cover a wide range of essential operations, including Periodic Services such as DG Operations, HVAC Operations, Transformer PMS, ETP Handling, STP Handling, OWC handling, Pump Operations, and Lift Maintenance. With our expertise and attention to detail, we guarantee the smooth functioning and longevity of critical systems within your facility.
                        </p>
                        <p class="mb-4">
                            In addition to scheduled maintenance tasks, we understand the importance of addressing unforeseen issues promptly. That's why we offer responsive breakdown maintenance services to our clients. 
                        </p>
                        <p class="mb-4">
                            At every step, we prioritize excellence and customer satisfaction, delivering reliable maintenance solutions that uphold the integrity and value of your property. With our integrated approach and commitment to service excellence, you can trust us to keep your building in optimal condition, now and in the future.
                        </p>
                        <div class="row g-4 text-dark mb-5">
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Camp Housekeeping
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Plant Housekeeping
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Hospital Housekeeping
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Guest House Management
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Laundry Services
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Mechanised Housekeeping
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Facade Cleaning
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-6" id="staffingpayrollsolutions" style="background-color: #f5c2a34d;">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Staffing & Payroll Solutions</small>
                        <h1 class="display-5 mb-4">Our customized staffing solutions include roles matched to specific tasks, compliance assessments, and outsourced payroll services, ensuring smooth administrative operations.</h1>
                        <p class="mb-4">
                            Our staffing solutions for administrative roles are meticulously tailored to match specific job requirements outlined in Service Level Agreements (SLAs). Each member of our administrative team is assigned a role optimized for efficiency and task effectiveness.
                        </p>
                        <p class="mb-4">
                            Compliance is a top priority in our administrative services. Our staff undergo regular reviews against comprehensive checklists to ensure adherence to industry standards and regulations, guaranteeing top-tier support for our clients.
                        </p>
                        <p class="mb-4">
                            We offer outsourced payroll management services to alleviate the complexity of payroll tasks for businesses. From processing payroll to managing tax obligations, our expertise ensures accurate and reliable payroll administration. 
                        </p>
                        <p class="mb-4">
                            Entrusting us with administrative staffing and payroll needs allows clients to focus on core business objectives. With our commitment to excellence and customer-centric approach, we serve as a trusted partner in ensuring organizational success.
                        </p>
                        <div class="row g-4 text-dark mb-5">
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Industries and Factories
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Depots
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>FMCG
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Institututions
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Hospitals
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <img src="img/payroll.jpg" class="img-fluid rounded" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-6" id="vehiclerentalservices">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                        <img src="img/car_rent.jpg" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Vehicle Rental Services</small>
                        <h1 class="display-5 mb-4">Enjoy convenient and dependable vehicle rental services customized to suit your requirements, providing effortless transportation solutions for any event.</h1>
                        <p class="mb-4">
                            With a fleet of approximately 60 vehicles available for fixed-term rental, we offer flexible transportation solutions to meet diverse needs. Whether for short-term projects or long-term commitments, our vehicles are ready to serve clients across Eastern India efficiently and reliably.
                        </p>
                        <p class="mb-4">
                            Additionally, our vehicle management services extend to overseeing up to 100 vehicles for our valued clients. Through meticulous attention to detail and effective coordination, we ensure that all vehicles operate seamlessly, meeting the transportation demands of businesses and individuals throughout the region.
                        </p>
                        <p class="mb-4">
                            Safety and compliance are paramount in our operations. Each vehicle in our fleet is equipped with robust security measures and meets all regulatory standards. Real-time GPS tracking enhances security and enables efficient fleet management, giving clients peace of mind knowing their assets are protected and accounted for at all times. 
                        </p>
                        <p class="mb-4">
                            Furthermore, our comprehensive rental packages include insurance coverage for both passengers and drivers, further enhancing the safety and security of every journey. By prioritizing safety, compliance, and reliability, we strive to deliver exceptional vehicle rental services that exceed the expectations of our clients and customers across Eastern India.
                        </p>
                        <div class="row g-4 text-dark mb-5">
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Companies Needing Customised Vans
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Cement Companies for Technical Mobile Vans and Commercial Vans
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Passenger Carrying Vehicles
                            </div>
                            <div class="col-sm-6">
                                <i class="fas fa-share text-primary me-2"></i>Buses for Staff Transportation
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service details end  -->

        <!-- Testimonial Start -->
        <div class="container-fluid py-6">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Testimonial</small>
                    <h1 class="display-5 mb-5">Our Valuable Clients</h1>
                </div>
                <div class="owl-carousel owl-theme testimonial-carousel client-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/jsw.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/alstom.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/cmpdi.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/coal_ind.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/ongc.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/vedanta.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/arkay.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/arvind.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/dalmia.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/nit_rourkela.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/lic.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/ocl.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/ogd.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/iim_ranchi.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/client/wabtec.png" class="img-fluid" style="width: 100% !important;">
                        </div>
                    </div>
                    <!-- <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-2.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-3.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="testimonial-item rounded bg-light">
                        <div class="d-flex mb-3">
                            <img src="img/testimonial-4.jpg" class="img-fluid rounded-circle flex-shrink-0" alt="">
                            <div class="position-absolute" style="top: 15px; right: 20px;">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                            <div class="ps-3 my-auto">
                                <h4 class="mb-0">Person Name</h4>
                                <p class="m-0">Profession</p>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <p class="fs-5 m-0 pt-3">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        
        <!-- Project Location Start -->
        <div class="container-fluid menu bg-light py-6 my-6" id="projectlocation">
            <div class="container">
                <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Project Location</small>
                    <h1 class="display-5 mb-5">Our Project Foot Prints</h1>
                </div>
                <div class="tab-class text-center">
                    <div class="tab-content">
                        <div class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Andhra Pradesh</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Assam</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Arunachal Pradesh</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Bihar</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Jharkhand</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Himachal Pradesh</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Gujarat</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Madhya Pradesh</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Maharashtra</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Mizoram</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Odisha</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Tamil Nadu</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Tripura</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Uttar Pradesh</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>West Bengal</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/map_pin.png" width="50px" style="padding: 10px; background-color: #f5c2a34d;" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Offshore - Mumbai</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6 wow bounceInUp" data-wow-delay="0.2s">
                                    <div class="menu-item d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded-circle" src="img/menu-02.jpg" alt="">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <div class="d-flex justify-content-between border-bottom border-primary pb-2 mb-2">
                                                <h4>Sweet Potato</h4>
                                                <h4 class="text-primary">$90</h4>
                                            </div>
                                            <p class="mb-0">Consectetur adipiscing elit sed dwso eiusmod tempor incididunt ut labore.</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Location End -->
<!-- Footer Start -->

<div class="container-fluid py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Certifications</small>
            <h1 class="display-5 mb-5">Our Certifications</h1>
        </div>
        <div class="owl-carousel owl-theme testimonial-carousel certificate-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="img/certificate/c_1.png" class="img-fluid" style="width: 100% !important;">
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="img/certificate/c_2.png" class="img-fluid" style="width: 100% !important;">
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="img/certificate/c_3.png" class="img-fluid" style="width: 100% !important;">
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="img/certificate/c_4.png" class="img-fluid" style="width: 100% !important;">
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="img/certificate/c_5.png" class="img-fluid" style="width: 100% !important;">
                </div>
            </div>
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    <img src="img/certificate/c_6.png" class="img-fluid" style="width: 100% !important;">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer py-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <img src="img/indigo_logo.png" class="mb-0" alt="indigo logo" width="100px">
                    <p class="lh-lg mb-4">We are here for all your business needs. Providing Turnkey Support in Hospitality, Facility, and Admin Services with a Focus on Value and Safety</p>
                    <div class="footer-icon d-flex">
                        <a class="btn btn-primary btn-sm-square me-2 rounded-circle" target="_blank" href="https://www.facebook.com/indigoservicesL"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="mb-4">Contact Us</h4>
                    <div class="d-flex flex-column align-items-start">
                        <p><a href="https://maps.app.goo.gl/ukiZytn372XDaRdaA" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt text-primary me-2"></i> 5A, Shantiniketan Apartment, Kaikhali Main Road, Kolkata - 700053</a></p>
                        <p><a href="tel: +91 6512531173" target="_blank" rel="noopener noreferrer"><i class="fa fa-phone-alt text-primary me-2"></i> +91 6512531173</a></p>
                        <p><a href="https://api.whatsapp.com/send?phone=8877070000" target="_blank" rel="noopener noreferrer"><i class="fa fa-phone-alt text-primary me-2"></i> +91 8877070000</a></p>
                        <p><a href="mailto:contact@indigoservices.co.in" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope text-primary me-2"></i> contact@indigoservices.co.in</a></p>
                        <p><a href="https://maps.app.goo.gl/ozkheWKxnuMdnDDMA" target="_blank" rel="noopener noreferrer"><i class="fa fa-map-marker-alt text-primary me-2"></i> Head Office: 701; 7th Floor Nile Complex, Old HB Road, Ranchi, 834001</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="footer-item">
                    <h4 class="mb-4">Find Us</h4>
                    <div class="d-flex flex-column align-items-start">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.5054164408853!2d88.43125818623555!3d22.634937077704215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89e35e6108d1b%3A0x6fc4f0c62df98a5b!2sShantiniketan%20Apartment%2C%20Narayanpur%20Rd%2C%20Kaikhali%2C%20West%20Bengal%20700052!5e0!3m2!1sen!2sin!4v1713796295051!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="mb-4">Special Facilities</h4>
                    <div class="d-flex flex-column align-items-start">
                        <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Cheese Burger</a>
                        <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Sandwich</a>
                        <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Panner Burger</a>
                        <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Special Sweets</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="mb-4">Social Gallery</h4>
                    <div class="row g-2">
                        <div class="col-4">
                                <img src="img/menu-01.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                        </div>
                        <div class="col-4">
                                <img src="img/menu-02.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                        </div>
                        <div class="col-4">
                                <img src="img/menu-03.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                        </div>
                        <div class="col-4">
                                <img src="img/menu-04.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                        </div>
                        <div class="col-4">
                                <img src="img/menu-05.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                        </div>
                        <div class="col-4">
                                <img src="img/menu-06.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Indigo Catering & Services </a>2024 All right reserved.</span>
            </div>
            <div class="col-md-6 my-auto text-center text-md-end text-white">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Reserved for <a class="border-bottom" href="https://website.indigoservices.co.in/new/">Indigo Catering & Services</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script type='text/javascript' src='http://maps.google.com/maps/api/js?key='></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>