<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('front.includes.head')
<body data-spy="scroll" data-target="#headerNav" data-offset="100">

    <!-- Preloader Start -->
    <div id="preloader" class="bg-primary">
        <div class="preloader--spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        <header id="header" class="header--section">
            <!-- Header Navbar Start -->
            <nav class="header--navbar navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Logo Start -->
                        <a href="{{route('frontend.index')}}" class="navbar-brand">
                            <span class="vc--parent">
                                <span class="vc--child">
                                    <img src="{{asset('public/frontend/img/logo.png')}}" alt="">
                                </span>
                            </span>
                        </a>
                        <!-- Logo End -->
                    </div>

                    <div id="headerNav" class="navbar-collapse collapse">
                        <!-- Header Nav Links Start -->
                        <ul class="header--nav-links ff--primary nav navbar-right">
                            <li class="active"><a href="#header" data-trigger="scroll">Home</a></li>
                            <li><a href="#aboutme" data-trigger="scroll">About Me</a></li>
                            <li><a href="#services" data-trigger="scroll">Services</a></li>
                            <li><a href="#portfolio" data-trigger="scroll">Portfolio</a></li>
                            <li><a href="#skills" data-trigger="scroll">Skills</a></li>
                            <li><a href="#blog" data-trigger="scroll">Blog</a></li>
                            <li><a href="#contact" data-trigger="scroll">Contact</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<span class="caret"></span></a>

                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home Page</a></li>
                                    <li><a href="blog.html">Blog Page</a></li>
                                    <li><a href="blog-details.html">Blog Details Page</a></li>
                                    <li><a href="contact.html">Contact Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Header Nav Links End -->
                    </div>
                </div>
            </nav>
            <!-- Header Navbar End -->
        </header>
        <!-- Header Section End -->

        <!-- Banner Section Start -->
        <section id="banner" class="banner--section" data-bg-parallax="{{asset('public/adminpanel/uploads/slider/'.$slider->image)}}" data-overlay="0.8">
            <div class="vc--parent">
                <div class="vc--child">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <!-- Banner Content Start -->
                                <div class="banner--content text-center pt--160 pb--100">
                                    <div class="title text-uppercase">
                                        <h2 class="h3 text-white"><span class="text-primary">Hello</span> I'm</h2>
                                    </div>

                                    <div class="name text-uppercase">
                                        <h3 class="h2 text-white">{{$slider->name}}</h3>
                                    </div>

                                <div class="role fs--18 fw--700 text-white">
                                    <p>{{$slider->designation}}</p>
                                </div>

                                <div class="desc">
                                    <p>
                                        {!! htmlspecialchars_decode($slider->content) !!}
                                    </p>
                                </div>


                                </div>
                                <!-- Banner Content End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->

        <!-- About Section Start -->
        <section id="aboutme" class="section pt--100 pb--40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center">
                    <h2 class="h2 text-uppercase">About Me</h2>
                </div>
                <!-- Section Title End -->

                <div class="row row--md-vc">
                    <div class="col-md-6 pb--60">
                        <!-- Image Block Start -->
                        <div class="img--block">
                            <img src="{{asset('public/adminpanel/uploads/about/'.$about->image)}}" alt="">
                        </div>
                        <!-- Image Block End -->
                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- About Block Start -->
                        <div class="about--block">
                            <div class="title">
                                <h2 class="h4 fw--700 text-uppercase">Personal Details</h2>
                            </div>

                            <div class="details pt--30 text-dark">
                                <p>{{$about->details}}</p>
                            </div>



                            <div class="info pt--50">
                                <table class="ff--primary">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <i class="fa fa-calendar"></i>
                                                <span>Brithday</span>
                                            </th>
                                            <td>{{$about->birthdate}}</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="fa fa-phone"></i>
                                                <span>Phone</span>
                                            </th>
                                            <td><a href="tel:9844732031" class="btn-link">{{$about->phone}}</a></td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="fa fa-envelope"></i>
                                                <span>Email</span>
                                            </th>
                                            <td><a href="{{$about->gmail}}" class="btn-link">{{$about->email}}</a></td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="fa fa-skype"></i>
                                                <span>Skype</span>
                                            </th>
                                            <td>{{$about->skype}}</td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <i class="fa fa-globe"></i>
                                                <span>Website</span>
                                            </th>
                                            <td><a href="www.johndoe.com" class="btn-link">{{$about->website}}</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="social text-dark pt--30">
                                <ul class="nav">
                                    <li><a href="{{$about->facebook}}" target="_blank"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="{{$about->twitter}}" target="_blank"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="{{$about->gmail}}" target="_blank"><span class="fa fa-google-plus"></span></a></li>
                                    <li><a href="{{$about->linkedin}}" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                            </div>


                        <!-- About Block End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <!-- Services Section Start -->
        <section id="services" class="section pt--100 pb--40 bg-light">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center">
                    <h2 class="h2 text-uppercase">Services I Offer</h2>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow" data-scroll-reveal="group">

                    @foreach($services as $service)
                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--60">
                            <!-- Service Block Start -->
                            <div class="service--block">
                                <div class="icon">
                                    <i class="fa {{$service->icon}}"></i>
                                </div>

                                <div class="title">
                                    <h3 class="h4">{{$service->name}}</h3>
                                </div>

                                <div class="desc">
                                    <p>{{$service->body}}</p>
                                </div>
                            </div>
                            <!-- Service Block End -->
                        </div>

                    @endforeach
                </div>
        </section>
        <!-- Services Section End -->

        <!-- Portfolio Section Start -->
        <section id="portfolio" class="section pt--100 pb--40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center">
                    <h2 class="h2 text-uppercase">Portfolio</h2>
                </div>
                <!-- Section Title End -->

                <!-- Portfolio Filter Menu Start -->
                <div class="portfolio--filter-menu pb--50">
                    <ul class="nav">
                        <li data-target="*" class="active">All Works</li>
                        @foreach($categories as $category)
                        <li data-target="category{{$category->id}}">{{$category->name}}</li>
                            @endforeach
                    </ul>
                </div>
                <!-- Portfolio Filter Menu End -->

                <!-- Portfolio Items Start -->
                <div class="portfolio--items row MasonryRow pb--30" data-trigger="gallery_popup">

@foreach($ports as $port)
                    <div class="col-md-3 col-xs-6 col-xxs-12 pb--30" data-cat="category{{$port->portfolio_category_id}}">
                        <!-- Portfolio Item Start -->
                        <div class="portfolio--item">
                            <img src="{{asset('public/adminpanel/uploads/portfolio/'.$port->image)}}" alt="">

                            <a href="{{asset('portfolioCategory')}}" class="caption">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <h3 class="h6">{{$port->name}}</h3>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Portfolio Item End -->
                    </div>
@endforeach

                </div>
                <!-- Portfolio Items End -->
            </div>
        </section>
        <!-- Portfolio Section End -->

        <!-- Call To Action Start -->
        <section class="section pt--100 pb--100" data-bg-parallax="img/call-to-action-img/bg.jpg" data-overlay="0.1">

        </section>
        <!-- Call To Action End -->

        <!-- Resume Section Start -->
        <section id="resume" class="section pt--100 pb--100">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center">
                    <h2 class="h2 text-uppercase">My Resume</h2>
                </div>
                <!-- Section Title End -->

                <!-- Timeline Block Start -->
                <div class="timeline--block">
                    <div class="title">
                        <h3 class="h5">Education</h3>
                    </div>

                    <div class="sub-title">
                        <p class="fs--16">Knowledge is power. Information is liberating. Eduction is the premise of progress, in every society, in every family.</p>
                    </div>

                    <!-- Timeline Items Start -->
                    <ul class="timeline--items nav">
                        @foreach($resumes as $resume)
                        <li>
                            <!-- Timeline Item Start -->
                            <div class="timeline--item">
                                <div class="icon bg-default">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>

                                <table class="table" data-scroll-reveal="bottom">
                                    <tr>
                                        <td>
                                            <p class="date bg-primary">{{$resume->date}}</p>

                                            <div class="bottom">
                                                <h4 class="name h6 fw--700">{{$resume->name}}</h4>

                                                <p class="institute ff--primary">{{$resume->qualification}}</p>

                                                <p class="location fs--12">{{$resume->address}}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="content">
                                                <p>{{$resume->body}}</p>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Timeline Item End -->
                        </li>
                            @endforeach

                    </ul>
                    <!-- Timeline Items End -->
                </div>
                <!-- Timeline Block End -->
            </div>
        </section>
        <!-- Resume Section End -->

        <!-- Experience Section Start -->
        <section class="section pt--100 pb--100 bg-light">
            <div class="container">
                <!-- Timeline Block Start -->
                <div class="timeline--block">
                    <div class="title">
                        <h3 class="h5">Experience</h3>
                    </div>

                    <div class="sub-title">
                        <p class="fs--16">No matter how long you train someone to be brave, you never know if they are not until something real happens.</p>
                    </div>

                    <!-- Timeline Items Start -->
                    <ul class="timeline--items nav">

                        @foreach($experiences as $experience)
                            <li>
                                <!-- Timeline Item Start -->
                                <div class="timeline--item">
                                    <div class="icon bg-light">
                                        <i class="fa fa-briefcase"></i>
                                    </div>

                                    <table class="table" data-scroll-reveal="bottom">
                                        <tr>
                                            <td>
                                                <p class="date bg-primary">{{$experience->date}}</p>

                                                <div class="bottom">
                                                    <h4 class="name h6 fw--700">{{$experience->company_name}}</h4>

                                                    <p class="institute ff--primary">{{$experience->job_title}}</p>

                                                    <p class="location fs--12">{{$experience->address}}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="content">
                                                    <p>{{$experience->body}}</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- Timeline Item End -->
                            </li>
                            @endforeach


                            <!-- Timeline Item End -->

                    </ul>
                    <!-- Timeline Items End -->
                </div>
                <!-- Timeline Block End -->
            </div>
        </section>
        <!-- Experience Section End -->

        <!-- Skills Section Start -->
        <section id="skills" class="section pt--100 pb--40" data-bg-img="{{asset('public/adminpanel/image/bg.jpg')}}" data-overlay="0.5">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center">
                    <h2 class="h2 text-white text-uppercase">My Skills</h2>
                </div>
                <!-- Section Title End -->

                <div class="row">
                    <div class="col-md-6 pb--60">
                        <!-- Skills Items Start -->
                        <div class="skills--items">
                            <div class="skill--title text-uppercase">
                                <h3 class="h4 text-white">Personal Skills</h3>
                            </div>

                            @foreach($personalskills as $personal)
                            <!-- Skill Item Start -->
                            <div class="skill--item">
                                <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                    <span class="skill--text">{{$personal->name}}</span>
                                    <span class="skill--count float--right">{{$personal->percentage}}%</span>
                                </h4>

                                <p class="skill--progress" style="width: {{$personal->percentage}}%;" data-trigger="progress_bar"></p>
                            </div>
                            <!-- Skill Item End -->
                            @endforeach
                        </div>
                        <!-- Skills Items End -->
                    </div>

                    <div class="col-md-6 pb--60">
                        <!-- Skills Items Start -->
                        <div class="skills--items">
                            <div class="skill--title text-uppercase">
                                <h3 class="h4 text-white">Professional Skills</h3>
                            </div>

                            <!-- Skill Item Start -->
                            @foreach($professional as $pro)
                            <div class="skill--item">
                                <h4 class="h6 fw--400 text-white text-uppercase clearfix">
                                    <span class="skill--text">{{$pro->name}}</span>
                                    <span class="skill--count float--right">{{$pro->percentage}}</span>
                                </h4>

                                <p class="skill--progress" style="width: {{$pro->percentage}};" data-trigger="progress_bar"></p>
                            </div>
                            <!-- Skill Item End -->
                            @endforeach

                        </div>
                        <!-- Skills Items End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Skills Section End -->

        <!-- Pricing Section Start -->
        <section id="pricing" class="section pt--100 pb--40 bg-light">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center">
                    <h2 class="h2 text-uppercase">Pricing Plan</h2>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow">
                    <div class="col-md-4 col-xs-12 pb--60">
                        <!-- Pricing Item Start -->
                        <div class="pricing--item">
                            <div class="pricing--header bg-primary">
                                <div class="plan">
                                    <h3 class="h3 text-primary">Starter</h3>
                                </div>

                                <div class="price ff--primary">
                                    <p>Form <span>$50</span></p>
                                </div>
                            </div>

                            <div class="pricing--features fs--16 ff--primary">
                                <ul class="nav">
                                    <li>Web Design Service</li>
                                    <li>Web Development Service</li>
                                    <li>Graphic Design Service</li>
                                    <li>SEO Service</li>
                                </ul>
                            </div>

                            <div class="pricing--action">
                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>
                        <!-- Pricing Item End -->
                    </div>

                    <div class="col-md-4 col-xs-12 pb--60">
                        <!-- Pricing Item Start -->
                        <div class="pricing--item">
                            <div class="pricing--header bg-primary">
                                <div class="plan">
                                    <h3 class="h3 text-primary">Starter</h3>
                                </div>

                                <div class="price ff--primary">
                                    <p>Form <span>$150</span></p>
                                </div>
                            </div>

                            <div class="pricing--features fs--16 ff--primary">
                                <ul class="nav">
                                    <li>Web Design Service</li>
                                    <li>Web Development Service</li>
                                    <li>Graphic Design Service</li>
                                    <li>SEO Service</li>
                                </ul>
                            </div>

                            <div class="pricing--action">
                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>
                        <!-- Pricing Item End -->
                    </div>

                    <div class="col-md-4 col-xs-12 pb--60">
                        <!-- Pricing Item Start -->
                        <div class="pricing--item">
                            <div class="pricing--header bg-primary">
                                <div class="plan">
                                    <h3 class="h3 text-primary">Starter</h3>
                                </div>

                                <div class="price ff--primary">
                                    <p>Form <span>$250</span></p>
                                </div>
                            </div>

                            <div class="pricing--features fs--16 ff--primary">
                                <ul class="nav">
                                    <li>Web Design Service</li>
                                    <li>Web Development Service</li>
                                    <li>Graphic Design Service</li>
                                    <li>SEO Service</li>
                                </ul>
                            </div>

                            <div class="pricing--action">
                                <a href="#" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>
                        <!-- Pricing Item End -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Section End -->

        <!-- Team Section Start -->
        <section id="team" class="section pt--100 pb--40">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center">
                    <h2 class="h2 text-uppercase">Meet My Team</h2>
                </div>
                <!-- Section Title End -->
                <div class="row AdjustRow">
                    @foreach($team as $t)

                    <div class="col-md-4 col-xs-12 pb--60">
                        <!-- Team Member Item Start -->
                        <div class="team--member" data-scroll-reveal="bottom">
                            <div class="img">
                                <img src="{{asset('public/adminpanel/uploads/team/'.$t->image)}}" alt="">
                            </div>

                            <div class="caption">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <div class="name">
                                            <h3 class="h3 fw--400">{{$t->name}}</h3>
                                        </div>

                                        <div class="company ff--primary">
                                            <p>{{$t->position}}</p>
                                        </div>

                                        <div class="social">
                                            <ul class="nav">
                                                <li><a href="{{$t->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Team Member Item End -->
                    </div>


                    @endforeach

                </div>
            </div>
        </section>
        <!-- Team Section End -->

        <!-- Blog Section Start -->
        <section id="blog" class="section pt--100 pb--40 bg-light">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center">
                    <h2 class="h2 text-uppercase">Blog &amp; News</h2>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow">

@foreach($blogs as $blog)
                    <div class="col-md-4 col-xs-12 pb--60">
                        <!-- Post Item Start -->
                        <div class="post--item">
                            <!-- Post Image Start -->
                            <div class="post--img">
                                <a href="blog-details.html"><img src="{{asset('public/frontend/img/blog-img/post-item-02.jpg')}}" alt=""></a>

                                <a href="#" class="date">25 Jan 2017</a>
                            </div>
                            <!-- Post Image End -->

                            <!-- Post Title Start -->
                            <div class="post--title text-uppercase">
                                <h3 class="h3 fs--22">
                                    <a href="{{route('blog', $blog->id)}}" class="btn-link">{{$blog->title}}</a>
                                </h3>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi dignissimos molestiae voluptates ullam dolor mollitia quos commodi...</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action text-uppercase">
                                <a href="blog-details.html" class="btn-link">Read More<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                            <!-- Post Action End -->
                        </div>
                        <!-- Post Item End -->
                    </div>
@endforeach

                </div>

                <!-- Section Footer Start -->
                <div class="section--footer text-center pb--60">
                    <a href="blog.html" class="btn btn-primary">View All Posts</a>
                </div>
                <!-- Section Footer End -->
            </div>
        </section>
        <!-- Blog Section End -->



        <!-- Testimonial Section Start -->
        <section id="testimonial" class="section pt--90 pb--90" data-bg-parallax="img/testimonial-img/bg.jpg" data-overlay="1">
            <div class="container">
                <!-- Testimonial Slider Start -->
                <div class="testimonial--slider owl-carousel" data-owl-dots="true">
                    <!-- Testimonial Item Start -->
                    <div class="testimonial--item text-white">
                        <div class="icon">
                            <i class="fa fa-comments"></i>
                        </div>

                        <blockquote>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                            <footer>James Stone @ Company Inc.</footer>
                        </blockquote>
                    </div>
                    <!-- Testimonial Item End -->

                    <!-- Testimonial Item Start -->
                    <div class="testimonial--item text-white">
                        <div class="icon">
                            <i class="fa fa-comments"></i>
                        </div>

                        <blockquote>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                            <footer>Roger Martin @ Company Inc.</footer>
                        </blockquote>
                    </div>
                    <!-- Testimonial Item End -->

                    <!-- Testimonial Item Start -->
                    <div class="testimonial--item text-white">
                        <div class="icon">
                            <i class="fa fa-comments"></i>
                        </div>

                        <blockquote>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                            <footer>Wayne Stone @ Company Inc.</footer>
                        </blockquote>
                    </div>
                    <!-- Testimonial Item End -->
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </section>
        <!-- Testimonial Section End -->

        <!-- Contact Section Start -->
        <section id="contact" class="section pt--100 pb--40 bg-light">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section--title pb--60 text-center">
                    <h2 class="h2 text-uppercase">Contact With Me</h2>
                </div>
                <!-- Section Title End -->

                <div class="row AdjustRow pb--10">
                    <div class="col-md-4 col-xs-12 pb--40">
                        <!-- Contact Info Block Start -->
                        <div class="contact--info-block" data-scroll-reveal="bottom">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>

                            <div class="title text-uppercase">
                                <h3 class="h4">Call Me</h3>
                            </div>

                            <div class="desc">
                                <p><a href="{{$site->phone}}" class="btn-link">{{$site->phone}}</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Block End -->
                    </div>

                    <div class="col-md-4 col-xs-12 pb--40">
                        <!-- Contact Info Block Start -->
                        <div class="contact--info-block" data-scroll-reveal="bottom">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>

                            <div class="title text-uppercase">
                                <h3 class="h4">Visit Me</h3>
                            </div>

                            <div class="desc">
                                <p>{{$site->location}}</p>
                            </div>
                        </div>
                        <!-- Contact Info Block End -->
                    </div>

                    <div class="col-md-4 col-xs-12 pb--40">
                        <!-- Contact Info Block Start -->
                        <div class="contact--info-block" data-scroll-reveal="bottom">
                            <div class="icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>

                            <div class="title text-uppercase">
                                <h3 class="h4">Send A Message</h3>
                            </div>

                            <div class="desc">
                                <p><a href="mailto:{{$site->email}}" class="btn-link">{{$site->email}}</a></p>
                            </div>
                        </div>
                        <!-- Contact Info Block End -->
                    </div>
                </div>

                <!-- Contact Form Start -->
                <div class="contact--form pb--60" data-form="ajax">
                    <div class="title text-center text-uppercase pb--30">
                        <h3 class="h4">You can drop me a line here</h3>
                    </div>

                    <form action="forms/contact-form.php">
                        <div class="status"></div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name *" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="E-mail *" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject *" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Message *" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form End -->
            </div>
        </section>
        <!-- Contact Section End -->

      @include('front.includes.footer')
    </div>
    <!-- Wrapper End -->

    <!-- Back To Top Button Start -->
    <div id="backToTop">
        <a href="#" class="btn btn-default active"><i class="fa fa-long-arrow-up"></i></a>
    </div>
    <!-- Back To Top Button End -->

    <!-- ==== Plugins Bundle ==== -->
    <script src="{{asset('public/frontend/js/plugins.min.js')}}"></script>

    <!-- ==== Main Script ==== -->
    <script src="{{asset('public/frontend/js/main.js')}}"></script>

</body>
</html>
