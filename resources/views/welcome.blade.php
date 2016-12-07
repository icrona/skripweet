@extends('main_landing')

@section('title', '| Welcome')

@section('stylesheets')
    <!--FAQ CSS-->
    <link rel="stylesheet" type="text/css" href="faq/font-awesome/css/font-awesome.min.css" />
    <script type="text/javascript" src="faq/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="faq/bootstrap/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        .stylish-panel {
            padding: 20px 0;
            text-align: center;
        }
        .stylish-panel > div > div{
            padding: 10px;
            border: 1px solid transparent;
            border-radius: 4px;
            transition: 0.2s;
        }
        .stylish-panel > div:hover > div{
            margin-top: -10px;
            border: 1px solid rgb(200, 200, 200);
            box-shadow: rgba(0, 0, 0, 0.1) 0px 5px 5px 2px;
            background: rgba(200, 200, 200, 0.1);
            transition: 0.5s;
        }

        .stylish-panel > div:hover img {
            border-radius: 50%;
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -o-transform: rotate(360deg);
            -ms-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        
        .responsive-background{
            background-size: cover;
            -moz-background-size: cover;  /* Firefox 3.6 */
            background-position: center;  /* Internet Explorer 7/8 */
            background-image: url(img/background.jpg);
        }
        
        .faqHeader {
            font-size: 27px;
            margin: 20px;
        }

        .panel-heading [data-toggle="collapse"]:after {
            font-family: 'Glyphicons Halflings';
            content: "\e072"; /* "play" icon */
            float: right;
            color: #F58723;
            font-size: 18px;
            line-height: 22px;
            /* rotate "play" icon from > (right arrow) to down arrow */
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            transform: rotate(-90deg);
        }

        .panel-heading [data-toggle="collapse"].collapsed:after {
            /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);
            color: #454444;
        }
    </style>
    
@endsection

@section('content')

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner text-center">
                            <h1>You can get this application for free</h1>
                            <a href="#download" class="btn btn-outline btn-xl page-scroll">Download Now!</a>
                            
                            <h2>OR</h2>
                            <a href="#gallery" class="btn btn-outline btn-xl page-scroll">Order Now!</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="img/demo-screen-1.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <section id="gallery" class="container-fluid features">
        <div class="container">
          <div class="page-header">
            <h1 class="text-center">Gallery</h1>
          </div>
          <p class="lead text-center">Baker's Galleries are Here!</p>
          <div class="container">
            <div class="row stylish-panel">
              <div class="col-md-4">
                <div>
                  <img src="gambar/Groudon.png" alt="Groudon" class="img-circle img-thumbnail">
                  <h2>Groudon</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <a href="orderUser.html" class="btn btn-primary" title="Order">Order >></a>
                </div>
              </div>
              <div class="col-md-4">
                <div>
                  <img src="gambar/Groudon.png" alt="Groudon" class="img-circle img-thumbnail">
                  <h2>Groudon 2</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <a href="orderUser.html" class="btn btn-primary" title="Order">Order »</a>
                </div>
              </div>
              <div class="col-md-4">
                <div>
                  <img src="gambar/Groudon.png" alt="Groudon" class="img-circle img-thumbnail">
                  <h2>Groudon 3</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                  <a href="orderUser.html" class="btn btn-primary" title="Order">Order »</a>
                </div>
              </div>
                
                <div class="col-md-12" style="margin-top:10%;">
                    <a type="button" class="btn btn-link" href="galleryUser.html" style="font-size:200%; text-align:right;">See More</a>
                </div>
              
            </div>
          </div>
        </div>
    </section>
    
    <section id="about_us" class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>About <i class="fa fa-heart"></i> Us!</h2>
            </div>
        </div>
    </section>
    
    <section id="contact" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Contact Us</h2>
                        <p class="text-muted">Find us!</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="img/demo-screen-1.jpg" class="img-responsive" alt=""> </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-envelope-open text-primary"></i>
                                    <h3>Email</h3>
                                    <p class="text-muted">skripsweet@cake.co.id</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-phone text-primary"></i>
                                    <h3>Phone</h3>
                                    <p class="text-muted">+62 8752 55555</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-screen-smartphone text-primary"></i>
                                    <h3>Free to Use Anywhere</h3>
                                    <p class="text-muted">You can using it from your smartphone!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-heart text-primary"></i>
                                    <h3>Quality Service</h3>
                                    <p class="text-muted">We serve you better!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    
    <section id="faq" class="container-fluid responsive-background" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Frequent Asked Questions</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="panel-group" id="accordion">
                @foreach($faqs as $faq)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$faq->id}}">{{$faq->question}}</a>
                        </h4>
                    </div>
                    <div id="collapse{{$faq->id}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{$faq->answer}}
                        </div>
                    </div>
                </div>
                @endforeach
            <div class="row stylish-panel">
                <div class="col-md-12">
                    <a type="button" class="btn btn-link" href="{{route('faq')}}" style="font-size:200%; text-align:right;">See More</a>
                </div>
            </div>
            
    </section>
    
    <section id="download" class="download features text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="section-heading">Discover what all the buzz is about!</h2>
                    <p>Our app is available on any mobile device! Download now to get started!</p>
                    <div class="badges">
                        <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection