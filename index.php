<?php
   if($_POST) {
      $EmailFrom = "contact_form@sahildiwan.com";
      $EmailTo = "me@sahildiwan.com";
      $Subject = "SahilDiwan.com Contact Form Inquiry";

      $Name = Trim(stripslashes($_POST['Name']));
      $Email = Trim(stripslashes($_POST['Email']));
      $Number = Trim(stripslashes($_POST['Number']));
      $Website = Trim(stripslashes($_POST['Website']));
      $Message = Trim(stripslashes($_POST['Message']));

      $text = 'Your message has been sent! I will get back to you soon.';

      // validation
      $validationOK = true;
      if (!$validationOK) {
         print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
         exit ;
      }

      // prepare email body text
      $Body = "";
      $Body .= "Name: ";
      $Body .= $Name;
      $Body .= "\n";
      $Body .= "Email: ";
      $Body .= $Email;
      $Body .= "\n";
      $Body .= "Number: ";
      $Body .= $Number;
      $Body .= "\n";
      $Body .= "Website: ";
      $Body .= $Website;
      $Body .= "\n";
      $Body .= "Message: ";
      $Body .= $Message;

      // send email
      $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
   }
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Sahil Diwan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <link rel="SHORTCUT ICON" type="image/x-icon" href="img/favicon.ico">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" media="screen">

    <!--[if IE 7]>
            <link href="css/font-awesome-ie7.min.css" rel="stylesheet">
        <![endif]-->

    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>

</head>

<body>
    <div id="wrapper">
        <div id="sidebar">
            <a class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <nav id="nav" class="navigation" role="navigation">
                <ul class="unstyled">
                    <li class="active" data-section="1"><i class="icon-home"></i>  <span>Home</span>
                    </li>
                    <li data-section="2" class=""><i class="icon-user"></i>  <span>About</span>
                    </li>
                    <li data-section="3" class=""><i class="icon-laptop"></i>  <span>Portfolio</span>
                    </li>
                    <li data-section="5" class="last"><i class="icon-envelope"></i>  <span>Contact</span>
                    </li>
                </ul>
            </nav>
            <!-- /nav -->
        </div>
        <!-- /sidebar -->

        <div id="container">
            <section class="section" id="section1" data-section="1">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="alt-image img-circle thumb">
                            <img src="img/earls.jpg" alt="Sahil Diwan" class="img-circle">
                        </div>
                        <div class="span6 intro">
                            <hgroup>
                                <h1>Welcome!</h1>
                                <h3>My name is Sahil Diwan. I am a student, programmer, and technology entrepreneur.</h3>
                            </hgroup>
                            <button class="btn-inverse" data-section="2">
                                Learn <span>More</span>
                                <i class="icon-circle-arrow-down"></i>
                            </button>
                        </div>
                        <!-- /span6 -->
                    </div>
                    <!-- /row-fluid -->
                </div>
                <!-- /container-fluid -->
            </section>
            <!-- /section -->

            <section class="section" id="section2" data-section="2">
                <div class="container-fluid">
                    <div class="row-fluid title">
                        <div class="span3">
                            <h2>About</h2>
                        </div>
                        <!-- /span3 -->
                        <div class="span9 hidden-phone">
                            <hr>
                        </div>
                        <!-- /span9 -->
                    </div>
                    <!-- /row-fluid -->
                    <div class="row-fluid desc">
                        <div class="span8">
                            <p>My name is Sahil Diwan. I am a <b>student</b>, <b>programmer</b>, <b>designer</b>, and <b>technology entrepreneur</b>. I am currently majoring in <b>Computer Science</b> with a minor in <b>Mathematics</b> at the University of Oregon.
                                I founded my first tech start-up in 2011 and a year later, my second. I am currently a Co-Founder at <b>Esquire Avenue</b>. I am always looking for new projects so contact me!</a>
                            </p>
                        </div>
                        <!-- /span8 -->
                    </div>
                    <!-- /row-fluid -->
                </div>
                <!-- /container -->
            </section>
            <!-- /section -->

            <section class="section" id="section3" data-section="3">
                <div class="container-fluid">
                    <div class="row-fluid title">
                        <div class="span4">
                            <h2>Portfolio</h2>
                        </div>
                        <!-- /span4 -->
                        <div class="span8 hidden-phone alt">
                            <hr>
                        </div>
                        <!-- /span8 -->
                    </div>
                    <div class="row-fluid content slide">
                        <div class="span4">
                            <a href="https://www.fitterfutures.org/" rel="external"><img src="img/fitterfutures_screen.png" alt="Fitter Futures"></a>
                            <h6>- <a href="https://www.fitterfutures.org/" rel="external">Fitter Futures</a>, Co-Founder</h6>
                        </div>
                        <!-- /span4 -->
                        <div class="span4">
                            <a href="http://www.cs.uoregon.edu/groups/webdev/" rel="external"><img src="img/webdev_screen.png" alt="Web Dev Club"></a>
                            <h6>- <a href="http://www.cs.uoregon.edu/groups/webdev/" rel="external">Web Dev Club</a>, Co-Founder</h6>
                        </div>
                        <!-- /span4 -->
                        <div class="span4">
                            <a href="https://www.esqave.com/" rel="external"><img src="img/esqave_screen.png" alt="Esquire Avenue"></a>
                            <h6>- <a href="https://www.esqave.com/" rel="external">Esquire Avenue</a>, Co-Founder</h6>
                        </div>
                        <!-- /span4 -->
                    </div>
                    <!-- /row-fluid -->
                    <div class="row-fluid content slide">
                        <div class="span4">
                            <img src="img/hallspot_screen_2.png" alt="Hallspot">
                            <h6>- Hallspot, Chief Strategy Officer (Past)</h6>
                        </div>
                        <!-- /span4 -->
                        <div class="span4">
                            <img src="img/karilla_screen.png" alt="Karilla">
                            <h6>- Karilla, Co-Founder (Past)</h6>
                        </div>
                        <!-- /span4 -->
                        <div class="span4">
                            <img src="img/wodtime_screen.png" alt="WODTime">
                            <h6>- WODTime, Co-Founder (Past)</h6>
                        </div>
                        <!-- /span4 -->
                    </div>
                    <!-- /row-fluid -->
                </div>
                <!-- /container -->
            </section>
            <!-- /section -->

            <section class="section" id="section5" data-section="5">
                <div class="container-fluid">
                    <div class="row-fluid title">
                        <div class="span4">
                            <h2>Contact</h2>
                        </div>
                        <!-- /span4 -->
                        <div class="span8 hidden-phone alt">
                            <hr>
                        </div>
                        <!-- /span8 -->
                    </div>
                    <!-- /row-fluid -->
                    <div class="row-fluid content">
                        <div class="span4">
                            <h4 class="intro">Get in touch!</h4>
                            <div class="row-fluid alt">
                                <h5>Facebook:</h5>
                                <span><a href="https://www.facebook.com/Sahil.Diwan.1" rel="external">Sahil Diwan</a></span>
                            </div>
                            <!-- /row -->
                            <div class="row-fluid alt">
                                <h5>Twitter:</h5>
                                <span><a href="https://twitter.com/sahil_diwan" rel="external">@sahil_diwan</a></span>
                            </div>
                            <!-- /row -->
                            <div class="row-fluid alt">
                                <h5>LinkedIn:</h5>
                                <span><a href="http://www.linkedin.com/in/sahildiwan" rel="external">Sahil Diwan</a></span>
                            </div>
                            <!-- /row -->
                            <div class="row-fluid alt">
                                <h5>GitHub:</h5>
                                <span><a href="https://github.com/sahildiwan/" rel="external">sahildiwan</a></span>
                            </div>
                            <!-- /row -->
                            <div class="row-fluid alt">
                                <h5>Blog:</h5>
                                <span><a href="http://blog.sahildiwan.com/" rel="external">Local Diner</a></span>
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /span4 -->
                        <div class="span8">
                            <div class="row-fluid">
                                <div class="span12">
                                </div>
                                <!-- /span12 -->
                            </div>
                            <!-- /row-fluid -->
                            <p><b><?=$text ?></b></p>
                            <form action="" method="post">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="control-group">
                                            <label for="name" class="control-label">*Name:</label>
                                            <div class="controls">
                                                <input class="span12" type="text" id="Name" name="Name" tabindex="1" required>
                                            </div>
                                            <!-- /controls -->
                                        </div>
                                        <!-- /control-group -->
                                    </div>
                                    <!-- /span6 -->
                                    <div class="span6">
                                        <div class="control-group">
                                            <label for="email" class="control-label">*E-mail:</label>
                                            <div class="controls">
                                                <input class="span12" type="email" id="Email" name="Email" tabindex="2" required>
                                            </div>
                                            <!-- /controls -->
                                        </div>
                                        <!-- /control-group -->
                                    </div>
                                    <!-- /span6 -->
                                </div>
                                <!-- /row-fluid -->
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="control-group">
                                            <label for="phone" class="control-label">Number:</label>
                                            <div class="controls">
                                                <input class="span12" type="tel" id="Number" name="Number" tabindex="3">
                                            </div>
                                            <!-- /controls -->
                                        </div>
                                        <!-- /control-group -->
                                    </div>
                                    <!-- /span6 -->
                                    <div class="span6">
                                        <div class="control-group">
                                            <label for="website" class="control-label">Website:</label>
                                            <div class="controls">
                                                <input class="span12" placeholder="http://" type="url" id="Website" name="Website" tabindex="4">
                                            </div>
                                            <!-- /controls -->
                                        </div>
                                        <!-- /control-group -->
                                    </div>
                                    <!-- /span6 -->
                                </div>
                                <!-- /row-fluid -->
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="control-group">
                                            <label for="message" class="control-label">*Message:</label>
                                            <div class="controls">
                                                <textarea class="span12" type="text" id="Message" name="Message" rows="4" tabindex="5" required></textarea>
                                            </div>
                                            <!-- /controls -->
                                        </div>
                                        <!-- /control-group -->
                                    </div>
                                    <!-- /span12 -->
                                </div>
                                <!-- /row-fluid -->
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn-inverse pull-right">
                                    Send <span>Message</span>
                                    <i class="icon-circle-arrow-right"></i>
                                </button>
                            </form>
                            <!-- /form -->
                        </div>
                        <!-- /span8 -->

                        <div id="footer">
                            <div class="row-fluid">
                                <div class="span12">
                                    © Lunch Money, Inc. 2014
                                </div>
                                <!-- /span12 -->
                            </div>
                            <!-- /row-fluid -->
                        </div>
                        <!-- /footer -->
                    </div>
                    <!-- /row-fluid -->
                </div>
                <!-- /container-fluid -->
            </section>
        </div>
        <!-- /container -->
    </div>
    <!-- /wrapper -->

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-33771983-1']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <!-- JavaScript -->
    <script type="text/javascript" src="js/contact.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.knob.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
