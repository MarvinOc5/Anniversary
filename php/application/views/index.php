    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>SINGLE PAGE | Flat Design Mini Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Flat Design Mini Portfolio">
    <meta name="keywords" content="responsive, bootstrap, flat design, flat ui, portfolio">
    <meta name="author" content="Dzyngiri">
    <meta name="description" content="This is a responsive flat design mini portfolio for creative folks who want to showcase their work online.">
    <!-- styles -->
    <link href="<?php echo $base ?>/media/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $base ?>/media/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo $base ?>/media/css/style-single-page.css" rel="stylesheet">
    <link href="<?php echo $base ?>/media/font/css/fontello.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Add jQuery library -->
    <script type="text/javascript" src="<?php echo $base ?>/media/js/jquery-1.10.1.min.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="<?php echo $base ?>/media/js/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $base ?>/media/css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script>
                $(document).ready(function() {
            $(".fancybox-thumb").fancybox({
                helpers	: {
                    title	: {
                        type: 'inside'
                    },
                    overlay : {
                                css : {
                                    'background' : 'rgba(1,1,1,0.65)'
                                }
                            }
                }
            });
        });
            </script>
    </head>
    <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#profile"><img src="<?php echo $base ?>/media/img/userpoke.jpg"/></a>
          <ul class="nav nav-collapse pull-right">
            <li><a href="#profile"><i class="icon-user"></i> Profile</a></li>
            <li><a href="#skills"><i class="icon-trophy"></i> Magic</a></li>
            <li><a href="#work"><i class="icon-picture"></i> Work</a></li>
          </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix">
      <!--Profile container-->
      <div id="profile" class="container">
        <div class="span3"> <img src="<?php echo $base ?>/media/img/buddypoke.png"> </div>
        <div class="span5">
          <h1>Hi! My name is Ford,</h1>
          <h3>A Virtual Assistant at your service!</h3>
          <p>Some time on July 8, 2012 These 2 twitter friends @Coco_Marvin & @Erik_Krom met. They talked everyday for hours and hours and they became great friends and could
		  tell each other anything and everything and the other would undersand. A few months later they advanced their friendship into a romantic relationship.
		  They expressed their love for each other all the time and the phrase 'I love you' never lost it's meaning. Today, they will be celebrating their
		  2nd Anniversary! I'll show you some information have made it.</p>
          <a href="#skills" class="hire-me"><i class="icon-paper-plane"></i>Let's Get Started!</a>
          <div class="row social">
            <ul class="social-icons">
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/fb.png" alt="facebook"></a></li>
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/tw.png" alt="twitter"></a></li>
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/go.png" alt="google plus"></a></li>
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/pin.png" alt="pinterest"></a></li>
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/st.png" alt="stumbleupon"></a></li>
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/dr.png" alt="dribbble"></a></li>
            </ul>
          </div>
        </div>
        <!-- Social Icons -->
        <!-- END: Social Icons -->
      </div>
      <!--END: Profile container-->
      <!--Skills container-->
      <div id="skills" class="container">
        <h2>The Magic</h2>
        <div class="row">
          <div class="span3">
            <div class="ps">
              <h3>Love</h3>
            </div>
          </div>
          <div class="span5">
            <h3>LOVE <span>100%</span></h3>
            <div class="expand-bg"> <span class="expand ps2"> &nbsp; </span> </div>
          </div>
        </div>
        <div class="row">
          <div class="span3">
            <div class="ai">
              <h3>Faith</h3>
            </div>
          </div>
          <div class="span5">
            <h3>FAITH<span>100%</span></h3>
            <div class="expand-bg"> <span class="expand ai2"> &nbsp; </span> </div>
          </div>
        </div>
        <div class="row">
          <div class="span3">
            <div class="html">
              <h3>Trust</h3>
            </div>
          </div>
          <div class="span5">
            <h3>TRUST<span>100%</span></h3>
            <div class="expand-bg"> <span class="expand html2"> &nbsp; </span> </div>
          </div>
        </div>
        <div class="row">
          <div class="span3">
            <div class="css">
              <h3>Care</h3>
            </div>
          </div>
          <div class="span5">
            <h3>CARE<span>100%</span></h3>
            <div class="expand-bg"> <span class="expand css2"> &nbsp; </span> </div>
          </div>
        </div>
      </div>
      <!--END: Skills container-->
      <!-- Works container -->
      <div id="work" class="container">
        <h2>Our Work</h2>
        <ul class="work-images">
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo $base ?>/media/img/t1.jpg"><img src="<?php echo $base ?>/media/img/t1-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo $base ?>/media/img/t2.jpg"><img src="<?php echo $base ?>/media/img/t2-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo $base ?>/media/img/t3.jpg"><img src="<?php echo $base ?>/media/img/t3-thumb.jpg" /></a></div>
          </li>
        </ul>
        <ul class="work-images">
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo $base ?>/media/img/t4.jpg"><img src="<?php echo $base ?>/media/img/t4-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo $base ?>/media/img/t5.jpg"><img src="<?php echo $base ?>/media/img/t5-thumb.jpg" /></a></div>
          </li>
          <li>
            <div><a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo $base ?>/media/img/t6.jpg"><img src="<?php echo $base ?>/media/img/t6-thumb.jpg" /></a></div>
          </li>
        </ul>
        <!--Dummy images by The Fox And King :: http://dribbble.com/snootyfox-->
      </div>
      <!--END: Work container-->
      <!-- Resume container -->
      <div id="profile" class="container">
        <div class="span3"> <img src="<?php echo $base ?>/media/img/buddypoke.png"> </div>
        <div class="span5">
          <h1>Happy 2nd Anniversary!</h1>
          <h3>That's All Folks! See us Again</h3>
          <a href="#profile" class="hire-me"><i class="icon-paper-plane"></i>Return to Top</a>
          <div class="row social">
            <ul class="social-icons">
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/fb.png" alt="facebook"></a></li>
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/tw.png" alt="twitter"></a></li>
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/go.png" alt="google plus"></a></li>
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/pin.png" alt="pinterest"></a></li>
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/st.png" alt="stumbleupon"></a></li>
              <li><a href="#" target="_blank"><img src="<?php echo $base ?>/media/img/dr.png" alt="dribbble"></a></li>
            </ul>
          </div>
        </div>
      <!-- END: Social Icons -->
    </div>
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <p class="pull-left"><a href="http://dzyngiri.com">www.dzyngiri.com</a></p>
        <p class="pull-right"><a href="##myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
      </div>
    </div>
    <!-- Contact form in Modal -->
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" placeholder="Yopur Name">
          <input type="text" placeholder="Your Email">
          <input type="text" placeholder="Website (Optional)">
          <textarea rows="3" style="width:80%"></textarea>
          <br/>
          <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
        </form>
      </div>
    </div>
    <!-- Scripts -->
    <script src="<?php echo $base ?>/media/js/vertical-scroll.js"></script>
    <script src="<?php echo $base ?>/media/js/bootstrap.min.js"></script>
    <script>
                $('#myModal').modal('hidden')
    </script>
    </body>
    </html>
