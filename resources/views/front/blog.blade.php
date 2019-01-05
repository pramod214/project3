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

                                <div class="action">
                                    <a href="#" class="btn btn-default">Hire Me</a>
                                    <a href="#" class="btn btn-white">My Works</a>
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


<h1>{{$blog->title}}</h1>




    <div id="disqus_thread"></div>
    <script>

        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://blog-ejsfts5hui.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



    <div class="addthis_inline_share_toolbox"></div>



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


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c2f5f53be25414e"></script>


</body>
</html>
