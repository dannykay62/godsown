<!DOCTYPE html>
<html lang="en">

  <head>
    <title>God's Own Choir</title>
    <!--SEO Meta Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tron Bootstrap based UI Kit, flat, modern front-end framework for faster and easier web development.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="8 Guild">
    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.ico" type="/main/TronBootstrapUIKit/image/x-icon">
    <link rel="icon" href="favicon.ico" type="/main/TronBootstrapUIKit/image/x-icon">

    <!-- Tron Bootstrap Skin and UI CSS -->
    <link href="/main/TronBootstrapUIKit/css/tron-ui.min.css" rel="stylesheet">
    <!-- Documentation extras -->
    <link href="/main/TronBootstrapUIKit/css/demo.css" rel="stylesheet">

    <!-- Outdated Browser Plugin Styles -->
    <link href="/main/TronBootstrapUIKit/outdatedbrowser/outdatedbrowser.css" rel="stylesheet">

     <!-- ============== Resources style ============== -->
            <link rel="stylesheet" href="css/style.css" />

    		<!-- Modernizr runs quickly on page load to detect features -->
    		<script src="js/modernizr.custom.js"></script>

  </head>

  <!-- Body -->

  <body>


    {{--<!-- Page preloader -->--}}
    		{{--<div id="loading">--}}
    			{{--<div id="preloader">--}}
    				{{--<span></span>--}}
    				{{--<span></span>--}}
    			{{--</div>--}}
    		{{--</div>--}}


<!-- Overlay and Constellation effect -->
		{{--<div class="global-overlay">--}}

			{{--<canvas id="constellationel"></canvas>--}}

			{{--<div class="overlay skew-part"></div>--}}

		{{--</div>--}}

  <!-- Login Modal -->
      <div class="modal fade" id="registerModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title">Sign Up Form</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="signup-email">Email</label>
                <input type="text" class="form-control" id="signup-email" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="signup-pass">Password</label>
                <input type="text" class="form-control" id="signup-pass" placeholder="Enter password">
              </div>
              <div class="form-group">
                <label for="signup-pass-repeat">Repeat password</label>
                <input type="text" class="form-control" id="signup-pass-repeat" placeholder="Repeat password">
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox">Read and agree with terms
                </label>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Sign Up</button>
              <a class="btn btn-info" href="auth/facebook" role="button">Login with facebook</a>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->


    <!-- Header -->
    <header class="navbar navbar-transparent navbar-fixed-top navbar-centered-nav tron-nav-demo-home">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".tron-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="/" class="navbar-logo">
            <img src="/img/logo.png" alt="God's Own Choir">
            <img class="alt-logo" src="/img/logo.png" alt="God's Own Choir">
          </a>
        </div>
        <nav class="collapse navbar-collapse tron-navbar-collapse" role="navigation">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/judges') }}">Judges</a></li>
                <li><a href="components.html">Coaches</a></li>
                <li><a href="javascript.html">Hosts</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/blog') }}">Blog</a></li>
            <li><a href="{{ url('/contestants') }}">Contestants</a></li>
            <li><a href="{{ url('/news') }}">News</a></li>
            <li><a href="{{ url('/videos') }}">Videos</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="{{ url('/downloads') }}">Downloads<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/auditions') }}">Auditions</a></li>
                <li><a href="examples/blog/index.html">Blog Page</a></li>
                <li><a href="examples/team/index.html">Team Page</a></li>
                <li><a href="examples/contacts/index.html">Contacts Page</a></li>
                <li><a href="examples/login/index.html">Login Page</a></li>
              </ul>
            </li>
          </ul>
<div class="navbar-right navbar-text">
            <a href="#" class="btn btn-danger navbar-btn" data-toggle="modal" data-target="#registerModal">Register</a>
          </div>
        </nav>
      </div>
    </header><!-- Header Close-->

    <!-- Intro Section -->
    {{--<section class="embed-responsive embed-responsive-16by9">--}}
        {{--<iframe class="embed-responsive-item" src="/videos/Wildlife.wmv">--}}
      {{--<div class="overlay"></div>--}}
      {{--<span></span>--}}
      {{--<div class="container">--}}
        {{--<h1>God's Own Choir</h1>--}}
        {{--<h4>Rewarding Gospel music...</h4>--}}
        {{--<p></p>--}}
        {{--<a href="#" class="btn btn-danger">Register NOW</a>--}}
        {{--<a href="#" class="btn btn-info">AUDITION INFORMATION...</a>--}}
      {{--</div>--}}
      {{--<a href="#features" class="see-more scrollTo" data-offset-top="110">See More<span></span></a>--}}
      {{--</iframe>--}}
    {{--</section><!-- Intro Section End -->--}}

    <!-- Responsive Embed -->
            <div class="row">
              <div class="col-md-12">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="/videos/Wildlife.wmv" width="500" height="281" allowfullscreen></iframe>
                </div>
              </div>
            </div>


    <!-- Features -->
    {{--<div class="row">--}}
        {{--<div class="col-md-6 col-sm-8">--}}

    <section class="container features" id="features">
      <div class="row">
          <div class="col-md-6 ">
              <h1 class="text-intro animated-middle fadeInUp">God's Own Choir</h1>
                <h3>The Future of Gospel Music is Here!</h3>
                <h2>More maintainable, and extendable. Easily customize colors, sizes and shapes with just few variables.
                    Tron is built with Less and follow Bootstrap Less structure. This makes Tron more maintainable, and extendable. Easily customize colors, sizes and shapes with just few variables.
                    Tron is built with Less and follow Bootstrap Less structure. This makes Tron more maintainable, and extendable. Easily customize colors, sizes and shapes with just few variables <a href="#">See more...</a> .</h2>
          </div>


          <div class="col-md-6 col-sm-8">

              <h1 class="text-intro animated-middle fadeInUp">Registeration Info</h1>
                <h3>!</h3>
                    <h2>This makes Tron more maintainable, and extendable. Easily customize colors, sizes and shapes with just few variables.
                      Tron is built with Less and follow Bootstrap Less structure. This makes Tron more maintainable, and extendable. Easily customize colors, sizes and shapes with just few variables.
                      Tron is built with Less and follow Bootstrap Less structure. This makes Tron more maintainable, and extendable. Easily customize colors, sizes and shapes with just few variables <a href="#">See more...</a>.</h2>
          </div>
      </div>
    </section>


    <!-- Carousel -->
    <section class="container carousel" id="carousel">
            <div class="row padding-top">
              <div class="col-md-12">
                <h3 class="block-heading space-bottom">Rewarding Gospel Music</h3>
                <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-captions" data-slide-to="1"></li>
                    <li data-target="#carousel-example-captions" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="/img/carousel/slide01.jpg" alt="First slide image">
                      <div class="carousel-caption">
                        <h3>WINNER</h3>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                      </div>
                    </div>
                    <div class="item">
                      <img src="/img/carousel/slide02.jpg" alt="Second slide image">
                      <div class="carousel-caption">
                        <h3>First Runner Up</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                    <div class="item">
                      <img src="/img/carousel/slide03.jpg" alt="Third slide image">
                      <div class="carousel-caption">
                        <h3>Second Runner Up</h3>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                      </div>
                    </div>
                  </div>
                  <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
                    <span class="flaticon-left216"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
                    <span class="flaticon-right237"></span>
                  </a>
                </div>
              </div>
            </div>
<a href="#judges" class="see-more scrollTo" data-offset-top="110">See More<span></span></a>
</section><!-- Carousel End -->

<br/>
<br/>
<br/>
<br/>
<br/>
<!-- Docs End -->

<!-- Judges Start -->
    <!-- Container -->
        <section class="container" id="judges">

          <!-- Block Header -->
          <div class="page-header text-center">
            <h2>JUDGES <small>People who take decisions</small></h2>
          </div><!-- Block Header End -->

          <!-- Content -->
          <div class="row space-top">
            <div class="col-sm-4">
              <div class="thumbnail with-caption">
                <img src="/img/judges/james-fortune.jpg" alt="Johnathan Doe">
                <div class="caption">
                  <h4>Johnathan Doe</h4>
                  <span class="text-muted">Co-Founder, CEO</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores mollitia magnam quae.</p>
                  <div class="social-buttons">
                    <a href="#" class="social-btn sb-twitter sb-sm"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-btn sb-google-plus sb-sm"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social-btn sb-facebook sb-sm"><i class="fa fa-facebook"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail with-caption">
                <img src="img/img01.png" alt="Susanna Davis">
                <div class="caption">
                  <h4>Susanna Davis</h4>
                  <span class="text-muted">Co-Founder, COO</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores mollitia magnam quae.</p>
                  <div class="social-buttons">
                    <a href="#" class="social-btn sb-skype sb-sm"><i class="fa fa-skype"></i></a>
                    <a href="#" class="social-btn sb-email sb-sm"><i class="fa fa-envelope"></i></a>
                    <a href="#" class="social-btn sb-linkedin sb-sm"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail with-caption">
                <img src="img/img01.png" alt="William Smith">
                <div class="caption">
                  <h4>William Smith</h4>
                  <span class="text-muted">Co-Founder, COO</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores mollitia magnam quae.</p>
                  <div class="social-buttons">
                    <a href="#" class="social-btn sb-twitter sb-sm"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-btn sb-facebook sb-sm"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-btn sb-foursquare sb-sm"><i class="fa fa-foursquare"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        {{--</section>--}}
    <!-- Judges End -->

    <!-- Block Header -->
          <div class="page-header text-center">
            <h2>Managers of Departments<small>People who rule the company</small></h2>
          </div><!-- Block Header End -->
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <div class="team-member">
                <img class="thumb img-circle" src="img/img02.png" alt="James Lewis">
                <h4>James Lewis</h4>
                <span class="text-muted">Financial Director</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="social-buttons">
                  <a href="#" class="social-btn sb-linkedin sb-sm"><i class="fa fa-linkedin"></i></a>
                  <a href="#" class="social-btn sb-email sb-sm"><i class="fa fa-envelope"></i></a>
                  <a href="#" class="social-btn sb-facebook sb-sm"><i class="fa fa-facebook"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-3">
              <div class="team-member">
                <img class="thumb img-circle" src="img/img02.png" alt="Angela Williams">
                <h4>Angela Williams</h4>
                <span class="text-muted">Marketing Director</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="social-buttons">
                  <a href="#" class="social-btn sb-twitter sb-sm"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="social-btn sb-google-plus sb-sm"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="social-btn sb-instagram sb-sm"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-3">
              <div class="team-member">
                <img class="thumb img-circle" src="img/img02.png" alt="Edward Jones">
                <h4>Edward Jones</h4>
                <span class="text-muted">Chief Engineer</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="social-buttons">
                  <a href="#" class="social-btn sb-twitter sb-sm"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="social-btn sb-github sb-sm"><i class="fa fa-github-alt"></i></a>
                  <a href="#" class="social-btn sb-google-plus sb-sm"><i class="fa fa-google-plus"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-3">
              <div class="team-member">
                <img class="thumb img-circle" src="img/img02.png" alt="Natali Oldman">
                <h4>Natali Oldman</h4>
                <span class="text-muted">Art Director</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="social-buttons">
                  <a href="#" class="social-btn sb-instagram sb-sm"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="social-btn sb-dribbble sb-sm"><i class="fa fa-dribbble"></i></a>
                  <a href="#" class="social-btn sb-facebook sb-sm"><i class="fa fa-facebook"></i></a>
                </div>
              </div>
            </div>
          </div><!-- Content End -->

        </section><!-- Container End -->



    <!-- Docs -->
    <section class="fw-bg">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 col-md-12">
            <div class="docs-well clearfix">
              Bootstrap like documentation
              <a href="docs/" class="btn btn-primary" target="_blank">View Docs</a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- Docs End -->

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <a href="index.html" class="logo"><img src="/img/logo.png" alt="Tron UI Kit"></a>
            <p>FEEDBACK: We want to hear from you.</p>
            <ul class="list-unstyled">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="core-css.html">Bootstrap</a></li>
              <li><a href="tron-exstras.html">Tron Extras</a></li>
              <li><a class="scrollTo" href="#examples" data-offset-top="110">Examples</a></li>
              <li><a href="docs/" target="_blank">Documentation</a></li>
            </ul>
          </div>
          <div class="col-sm-8">
            <h3>Subscribe to our newsletter</h3>
            <p>To receive information about latest updates.</p>

            <!-- Begin MailChimp Subscription Form -->
            <form action="//8guild.us3.list-manage.com/subscribe/post?u=168a366a98d3248fbc35c0b67&amp;id=011a3332a0" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate class="form-inline subscribe-form space-bottom-2x">
              <div class="form-group">
                <label class="sr-only" for="subscr-email">Email address</label>
                <input type="email" class="form-control required email" name="EMAIL" id="subscr-email" placeholder="Enter email">
              </div>

              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_168a366a98d3248fbc35c0b67_011a3332a0" tabindex="-1" value=""></div>

              <button type="submit" class="btn btn-warning">Subscribe</button>
            </form><!-- End MailChimp Subscription Form -->

            <h3>Follow us on:</h3>
            <div class="social-buttons">
              <a href="https://www.facebook.com/8guild?fref=ts" class="social-btn sb-facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/8Guild" class="social-btn sb-twitter" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="https://www.behance.net/8Guild" class="social-btn sb-behance" target="_blank"><i class="fa fa-behance"></i></a>
              <a href="https://plus.google.com/u/0/b/109505223181338808677/109505223181338808677/posts" class="social-btn sb-google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
              <a href="https://www.linkedin.com/profile/view?id=330938282" class="social-btn sb-linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p>Made by <a href="http://8guild.com/" target="_blank">8 Guild</a> in 2014</p>
          </div>
        </div>
      </div>
    </footer>
<!-- Footer End -->

    <!-- Outdated Browser
    ================================================== -->
    <div id="outdated">
      <span class="icon-outdated fa fa-exclamation-triangle"></span>
      <h2>Your browser is out-of-date!</h2>
      <p>Update your browser to view this website correctly. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update my browser now </a></p>
      <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
    </div>

    <!-- jQuery Library
    ================================================== -->
    <script src="/js/jquery.min.js"></script>

    <!-- Outdated Browser Plugin
    ================================================== -->
    <script src="/js/outdatedbrowser/outdatedbrowser.min.js"></script>
    <script src="/js/outdatedbrowser/outdatedbrowser.init.js"></script>

    <!-- Plugins and Custom scripts
    ================================================== -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/smoothscroll.js"></script>
    <script src="/js/tron-ui.js"></script>
    <script src="/js/demo.js"></script>

  </body><!-- Body End -->
</html>