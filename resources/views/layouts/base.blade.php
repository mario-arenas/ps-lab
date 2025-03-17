<!DOCTYPE html>
<html lang="en">
<head>
	<title>Parham Santana | The Brand Extension Agency</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway:400,300,700,500">
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/master.css">
    

    <!-- OG Tags -->
    <meta property="og:title" content="Parham Santana | The Brand Extension Agency" />
    <meta property="og:url" content="http://www.parhamsantana.com/" />
    <meta property="og:image" content="http://www.parhamsantana.com/assets/images/share-logo.png" />
    <!-- end OG Tags -->

    <!-- Twitter Summary Card -->
    <meta name="twitter:site" content="@parhamsantana" />
    <meta name="twitter:title" content="Parham Santana | The Brand Extension Agency" />
    <meta name="twitter:image" content="http://www.parhamsantana.com/assets/images/share-logo.png" />
    <meta name="twitter:url" content="http://www.parhamsantana.com/" />
    <!-- end Twitter Summary Card -->
</head>
<body  id="home">
    <!-- Navigation -->
    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand{{ !request()->segment(1) ? ' scroll' : '' }}" href="/" data-id="home"><img id="logo" src="/assets/images/logos/ps-main.svg" class="img-responsive" /></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="/?scrollTo=work" class="{{ !request()->segment(1) ? 'scroll' : '' }}" data-id="work">Work</a></li>
            <li ><a href="/?scrollTo=services" class="{{ !request()->segment(1) ? 'scroll' : '' }}" data-id="services">Services</a></li>
            <li class="{{ request()->segment(1) == 'process' ? 'active' : '' }}"><a href="/process">Process</a></li>
            <li class="{{ request()->segment(1) == 'services' ? 'active' : '' }}"><a href="/services/licensing-representation">Licensing</a></li>
            <li class="{{ request()->segment(1) == 'about' ? 'active' : '' }}"><a href="/about">About</a></li>
            <li><a href="/?scrollTo=contact" id="contact">Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div>
    <!-- end Navigation -->

    @yield('content')

    @include('partials.footer')

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/assets/velocity/1.2.1/velocity.min.js"></script>
    <script src="/assets/velocity/1.2.1/velocity.ui.min.js"></script>
    <script src="/assets/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            // Resize textarea in contact form
    	    $('.note').focus(function(){
        	    $(this).velocity({height: 125}, 250);
    	    });

            // Contact form modal
            var contactModal = $('#modal');
            contactModal.modal({
            	keyboard: false,
            	show: false
            });

            // Contact form reset button
            $('#contact-reset').on('click', function(event) {
                event.preventDefault();
                $('#contact-form .form-control').val('');
            });

            // Form validation
    	    $('#contact-form').validate({
    			rules: {
                    name: {
                        minlength: 2,
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    note: {
                        minlength: 2,
                        required: true
                    }
    			},
    			submitHandler: function(form) {
                    var data = $(form).serialize();
                    $.ajax({
                        url: "http://www.parhamsantana.com/content/utility-contact-process",
                        type: "POST",
                        data: data
                    }).done(function() {
                        contactModal.modal('show');
                        $('#contact-form .form-control').val('');
                    });

                    return false;
                }
    		});

    	    // Collapse navbar when item is selected
    	    $('.navbar-nav').on('click', 'li', function() {
        	     if ($('.navbar-toggle').is(":visible")) {$('.navbar-toggle').click();}
    	    });
        });

        $(window).load(function() {
            // Scroll to contact in footer
            var location = $('#footer');
            $('#contact, .go-to-contact').on('click', function(event) {
        	    event.preventDefault();
        	    location.velocity("scroll", { duration: 500, offset: -60 });
    	    });
        });
    </script>
    
    <script src="/assets/js/jquery.animateNumber.min.js"></script>
    <script type="text/javascript">
    // Check if touch device
    var touchDevice = 'false';
    
    // Show intro
    function showIntro() {
        $("#intro .item").velocity("transition.fadeIn", {stagger: 350});    
    }
    // Show intro
    function showIntroText() {
        var $introText = $(".intro-text");
        if ($introText) {
            $introText.velocity("transition.slideLeftIn", {stagger: 350, complete: showIntro});
        }
        
        var $workImages = $(".work-top-images");
        if ($workImages) {
            $workImages.velocity("transition.fadeIn", {stagger: 350});
        }

        $("#intro .item").velocity("transition.fadeIn", {stagger: 350});

        $('#fact-1-overlay').animateNumber({ number: 24 }, 1500).velocity({opacity: 0}, {duration: 125, complete: hideCanvas1});
        $('#fact-2-overlay').animateNumber({ number: 9 }, 900).velocity({opacity: 0}, {duration: 125, complete: hideCanvas2});
        $('#fact-3-overlay').animateNumber({ number: 10 }, 1250).velocity({opacity: 0}, {duration: 125, complete: hideCanvas3});
        $('#fact-4-overlay').animateNumber({ number: 4 }, 1000).velocity({opacity: 0}, {duration: 125, complete: hideCanvas4});
        $('#fact-5-overlay').animateNumber({ number: 99 }, 1750).velocity({opacity: 0}, {duration: 125, complete: hideCanvas5});
    }
    
    // Animate facts
    function animateNumber(overlay1, overlay2, overlay3, overlay4, overlay5) {
        if (touchDevice == 'false') {
    	    overlay1.animateNumber({ number: 24 }, 1500).velocity({opacity: 0}, {duration: 125, complete: hideCanvas1});
    	    overlay2.animateNumber({ number: 9 }, 900).velocity({opacity: 0}, {duration: 125, complete: hideCanvas2});
    	    overlay3.animateNumber({ number: 10 }, 1250).velocity({opacity: 0}, {duration: 125, complete: hideCanvas3});
    	    overlay4.animateNumber({ number: 4 }, 1000).velocity({opacity: 0}, {duration: 125, complete: hideCanvas4});
    	    overlay5.animateNumber({ number: 99 }, 1750).velocity({opacity: 0}, {duration: 125, complete: hideCanvas5});
        };    
    };
    function hideCanvas1() {
	    $('#fact-1-canvas').velocity({opacity: 0}, {duration: 0});   
    };
    function hideCanvas2() {
	    $('#fact-2-canvas').velocity({opacity: 0}, {duration: 0});   
    };
    function hideCanvas3() {
	    $('#fact-3-canvas').velocity({opacity: 0}, {duration: 0});   
    };
    function hideCanvas4() {
	    $('#fact-4-canvas').velocity({opacity: 0}, {duration: 0});   
    };
    function hideCanvas5() {
	    $('#fact-5-canvas').velocity({opacity: 0}, {duration: 0});   
    };
    
    //Document ready
    $(document).ready(function() {
        // Cache overlay and hide
        var $overlay = $('#overlay-loader');
        $overlay.velocity("fadeOut", {duration: 250, delay: 250, complete: showIntroText});
                
        // Disable hover effect for touch devices
        if (touchDevice == 'true') {
    	    $('#work .overlay').hide();
	    };
            
        // Initialize carousel and activate controls
        var $carousel = $('.carousel');    
        $carousel.carousel({
            interval: 3000
        });
        $('.move-left').on('click', function(event) {
           event.preventDefault();
           $carousel.carousel('prev');
        });
        $('.move-right').on('click', function(event) {
           event.preventDefault();
           $carousel.carousel('next');
        });
        
        // Animate when facts is reached
	    var didScroll = false,
	        $overlay1 = $('#fact-1-overlay'),
	        $overlay2 = $('#fact-2-overlay'),
	        $overlay3 = $('#fact-3-overlay'),
	        $overlay4 = $('#fact-4-overlay'),
	        $overlay5 = $('#fact-5-overlay');
	    $(window).scroll(function() {
    	    didScroll = true;    
	    });
	    
	    ;(function() {
    	    if(didScroll) {
    	        didScroll = false;
    	        var fromTop = $(window).scrollTop();
                var facts = $('.facts');
    	        var factsPosition = facts && facts.length > 0 ? $('.facts').offset().top : null;
    	        if (factsPosition && (fromTop >= factsPosition - 800)) {
        	        animateNumber($overlay1, $overlay2, $overlay3, $overlay4, $overlay5);
    	        }
    	    };
    	    setTimeout(arguments.callee, 100);
	    })();
    });
    
    //Window load
	$(window).load(function() {
        // Cache containers
        var containers = {
            home: $('#home'),
            work: $('#work'),
            services: $('#services'),
            contact: $('#footer'),
            chart: $('#chart'),
            team: $('#team')
        }
	    
	    // Scroll to location by direct entrance
	    var target = '{{ request()->input("scrollTo") }}';
	    if(target) {
	        containers[target].velocity("scroll", { duration: 500, offset: -66 });
	    }
	    
	    // Scroll to location using navbar
	    $('.scroll').on('click', function(event) {
    	    event.preventDefault();
    	    var location = $(this).attr('data-id');
    	    containers[location].velocity("scroll", { duration: 500, offset: -66 });  
	    });
	});
    </script>

    <!-- Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-1911681-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- end Analytics -->
</body>
</html>