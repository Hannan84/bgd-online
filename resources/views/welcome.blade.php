<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <title>BGD Online Limited</title>

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid py-2 d-none d-md-flex border-bottom-1px">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-black-50"><a href="mailto:info@bgdonline.com"><i class="fas fa-envelope me-2 text-dark"></i>info@bgdonline.net</a></small>
                        <small class="me-3 text-black-50"><a href="tel:"><i class="fas fa-phone fa-rotate-90 me-2 text-dark"></i>+88 01904-111666</a></small>
                    </div>
                    <div class="top-link">
                        <a href="" class="bg-success nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-white"></i></a>
                        <a href="" class="bg-success nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-youtube text-white"></i></a>
                        <a href="" class="bg-success nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-google text-white"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <div class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-0">
                    <a href="index.html" class="navbar-brand">
                        <img class="d-block" src="http://bgdonline.net/wp-content/uploads/2017/07/bgd-online-LIMITED.png" alt="">
                    </a>
                    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                        <div class="navbar-nav ms-auto mx-xl-auto p-0">
                            <a href="index.html" class="nav-item nav-link active text-secondary">HOME</a>
                            <div class="nav-item dropdown">
                                <a href="about.html" class="nav-link" data-bs-toggle="dropdown">ABOUT US</a>
                                <div class="dropdown-menu rounded">
                                    <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Our Blog</a>
                                    <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>Testimonial</a>
                                    <a href="404.html" class="dropdown-item"><i class="arrow-right"></i>404 Page</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="about.html" class="nav-link" data-bs-toggle="dropdown">SERVICES</a>
                                <div class="dropdown-menu mega-menu rounded">
                                    <div class="row">
                                        <div class="col v-line">
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>Internet Connectivity</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Corporate</a>
                                            <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>Small Offices</a>
                                            <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>Home User</a>
                                            <br>
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>Web Hosting</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Shared web hosting</a>
                                            <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>Windows hosting</a>
                                            <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>Linux Hosting</a>
                                            <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>Reseller hosting (Windows)</a>
                                            <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>Reseller hosting (Linux)</a>
                                            <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>VPS Hosting</a>
                                            <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>Dedicated Server</a>
                                        </div>
                                        <div class="col v-line">
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>Data Connectivity</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Nationwide Secure Connectivity</a>
                                            <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>Dark Fiber Connectivity</a>
                                            <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>Clear Channel Connectivity</a>
                                            <a href="404.html" class="dropdown-item"><i class="arrow-right"></i>Capacity Based Connectivity</a>
                                            <br>
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>Managed Services</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Office PC Maintenance</a>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Radio Maintenance</a>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Fiber Optic Networks Maintenance</a>
                                        </div>
                                        <div class="col">
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>Web Development</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Starter Package</a>
                                            <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>Basic Package</a>
                                            <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>Economy Package</a>
                                            <a href="404.html" class="dropdown-item"><i class="arrow-right"></i>Deluxe Package</a>
                                            <a href="404.html" class="dropdown-item"><i class="arrow-right"></i>Gold Package</a>
                                            <a href="404.html" class="dropdown-item"><i class="arrow-right"></i>Platinum Package</a>
                                            <br>
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>Domain</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Domain Registration</a>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Domain Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="about.html" class="nav-link" data-bs-toggle="dropdown">PRODUCTS</a>
                                <div class="dropdown-menu mega-menu rounded">
                                    <div class="row">
                                        <div class="col v-line">
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>Camera</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>CC Camera</a>
                                            <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>IP Camera</a>
                                        </div>
                                        <div class="col v-line">
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>Network Products</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Router</a>
                                            <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>Switch</a>
                                            <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>TJ Box</a>
                                            <a href="404.html" class="dropdown-item"><i class="arrow-right"></i>Fiber Optic Cable</a>
                                            <a href="404.html" class="dropdown-item"><i class="arrow-right"></i>UTP Cable</a>
                                        </div>
                                        <div class="col">
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>Radio Station</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Radio Station</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="about.html" class="nav-link" data-bs-toggle="dropdown">SOLUTIONS</a>
                                <div class="dropdown-menu mega-menu rounded">
                                    <div class="row">
                                        <div class="col v-line">
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>Enterprize</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Networks</a>
                                            <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>IP- VPN</a>
                                            <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>Hosting</a>
                                            <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>Co- location</a>
                                        </div>
                                        <div class="col v-line">
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>System Integration</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>ICT Consultancy</a>
                                            <a href="team.html" class="dropdown-item"><i class="arrow-right"></i>Customized Solution</a>
                                            <a href="testimonial.html" class="dropdown-item"><i class="arrow-right"></i>Training</a>
                                        </div>
                                        <div class="col">
                                            <span style="color:red; font-weight: 700;"><i class="arrow-right"></i>IP Phone</span>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>IPPBX</a>
                                            <a href="blog.html" class="dropdown-item"><i class="arrow-right"></i>Call Center</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link" style="color:red; font-weight: 700;">CLIENT LOGIN</a>
                            <a href="contact.html" class="nav-item nav-link" style="color:red;">BLOG</a>
                            <a href="contact.html" class="nav-item nav-link">CONTACT US</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Hero slider start -->

        <section>
            <div class="hero_slider">
                <div class="hero_slider_bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="hero_text">
                                    <h1 style="color:#FFF">Data Connectivity</h1>
                                    <p><p>Fast &amp; Secure Data Connection.</p></p>
                                    <div class="hero_btn common_btn hvr-rectangle-out"> <a href="#" style="color:#FFF">Get start now</a> </div>
                                </div>
                            </div>
                            <!-- column End -->
                            <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
                                <div class="romana_hero_img"> <img width="453" height="339" src="https://bgdonline.net/wp-content/uploads/2017/03/dataconnectivity-453x339.png" class="attachment-home-full-size size-home-full-size wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="https://bgdonline.net/wp-content/uploads/2017/03/dataconnectivity.png 453w, https://bgdonline.net/wp-content/uploads/2017/03/dataconnectivity-300x225.png 300w" sizes="(max-width: 453px) 100vw, 453px" /> </div>
                            </div>
                            <!-- column end -->
                        </div>
                        <!-- row end -->
                    </div>
                    <!-- container end -->
                </div>
            </div>
        </section>

        <!-- Hero slider end -->

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('lib/wow/wow.min.js')}}"></script>
        <script src="{{asset('lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
    </body>

</html>