<?php
require('pusher_config.php');
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>
 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Roger and Sakib</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.icon-large.min.css" rel="stylesheet">
    <!-- hey Roger make sure to include the above line anytime you want to include a icon
    Also this:
    <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#services" class="btn btn-default btn-lg"><i class="icon-large icon-search"></i> <span class="network-name">African American Studies</span></a>
                            </li>
                        </ul> -->

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">the unofficial guide to ORDER</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#aboutus">About Us</a>
                    </li>
                    <!-- for Roger just leaving this here:
                    <li>
                        <a href="GeneralClassesPage.html">Classes1</a>
                    </li> -->
                    <li>
                        <a target="_blank" href="classes.html">Classes</a>
                        <!-- adding this
                        <a target="_blank" href=...
                        will open up a new tab -->
                    </li>
                    <li>
                        <a href="#tila">TILA</a>
                    </li>
                    <li>
                        <a href="#campusforum">Campus Forum</a>
                    </li>
                    <li>
                        <a href="#classifieds">Classifieds</a>
                    </li>
                    <li>
                        <a href="#funnies">Funnies</a>
                    </li>
                    <li>
                        <a href="#food">Food</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="hero"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>the unofficial guide to ORDER</h1>
                        <h3>made by students for students</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#aboutus" class="btn btn-default btn-lg"><i class="icon-large icon-tie"></i> <span class="network-name">About Us</span></a>
                            </li>
                            <li>
                                <a href="#classes" class="btn btn-default btn-lg"><i class="icon-large icon-book-open"></i> <span class="network-name">Classes</span></a>
                            </li>
                            <li>
                                <a href="#tila" class="btn btn-default btn-lg"><i class="icon-large icon-lightbulb"></i> <span class="network-name">TILA</span></a>
                            </li>
                            <li>
                                <a href="#campusforum" class="btn btn-default btn-lg"><i class="icon-large icon-conversation"></i> <span class="network-name">Campus Forum</span></a>
                            </li>
                            <li>
                                <a href="#classifieds" class="btn btn-default btn-lg"><i class="icon-large icon-shopping-cart"></i> <span class="network-name">Classifieds</span></a>
                            </li>
                            <li>
                                <a href="#funnies" class="btn btn-default btn-lg"><i class="icon-large icon-thumbs-up"></i> <span class="network-name">Funnies</span></a>
                            </li>
                            <li>
                                <a href="#food" class="btn btn-default btn-lg"><i class="icon-large icon-pizza"></i> <span class="network-name">Food</span></a>
                            </li>
                        </ul>
                      <!-- this will separate into two rows with three buttons on top and four buttons on bottom; last resort
                      <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#services" class="btn btn-default btn-lg"><i class="icon-large icon-search"></i> <span class="network-name">About Us</span></a>
                            </li>
                            <li>
                                <a href="#services" class="btn btn-default btn-lg"><i class="icon-large icon-search"></i> <span class="network-name">Classes</span></a>
                            </li>
                            <li>
                                <a href="#services" class="btn btn-default btn-lg"><i class="icon-large icon-search"></i> <span class="network-name">TILA</span></a>
                            </li>
                        </ul>
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="#services" class="btn btn-default btn-lg"><i class="icon-large icon-search"></i> <span class="network-name">Campus Forum</span></a>
                            </li>
                            <li>
                                <a href="#services" class="btn btn-default btn-lg"><i class="icon-large icon-search"></i> <span class="network-name">Classifieds</span></a>
                            </li>
                            <li>
                                <a href="#services" class="btn btn-default btn-lg"><i class="icon-large icon-search"></i> <span class="network-name">Kicks and Giggles</span></a>
                            </li>
                            <li>
                                <a href="#services" class="btn btn-default btn-lg"><i class="icon-large icon-search"></i> <span class="network-name">Food</span></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="aboutus"></a>
    <!--for Roger for href use # but if name do not use # -->
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--increasing col-lg-5 will increase text column on right side while decreasing will decrease text column; no idea what col-sm-6 does (actually check out http://www.zeninvader.com/css/bootstrap-3-grid-system-explained) (just kidding, col-sm refers to what it looks like for mobiles and tablets, for now got rid of it)
                    also, know the scale goes from 1-12 where each incremement is an increase of 8.3% -->
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">About Us</h2>
                    <!--for Roger this was what it was before you edited:
                    <h2 class="section-heading">About Us<br>Special Thanks</h2> -->
                    <p class="lead">Who are these scrubs? Does this look like you? If so, let's make it 'not you.'<br><br>College can be tough. We know the struggle. It can be hard to find good information as a college student. Well keep your pants on because we're going to turn your world upside down.<br><br>Check this dope sh** out. Trying to decide between taking a class on beer brewing or women's studies? We got you. Making sure you don't fail your pass/fail class and become a super senior? We got you. Hungering for some Popeyes but no idea if they're open at midnight? We know the feels. We got you. And hell yeah they're open. Fried chicken and orgo is what's up.<br><br>This website has your back. Made by students for students.<br><br>But enough about you - let's talk about us. The two of us are students who live out the good life at Emory University. One guy makes (legal) drugs and the other fires lasers at people. As roommates, we love scheming and pulling all-nighters. The idea for this website came about from our ORDER seminar where we were encouraged to find a way to give back to our community (you). Long story short, after a "few" gallons of coffee with some fried chicken and tears, we made this f***ing awesome website for you.<br><br>Want to learn more? Check us out here. Or not. But be sure to click here.<br><br>You have a question? An idea to add some more cool sh** to this website? Or just wanted to show us some love? Hit up these sexy mofos. We appreciate the feedback.</p>
                    <!--for Roger this was what it was before you edited:
                    <p class="lead">A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.</p> -->
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <a   name="classes"></a>
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><a target="_blank" href="classes.html">Classes</a></h2>
                    <!-- for Roger this is what it was before:
                    <h2 class="section-heading">3D Device Mockups<br>by PSDCovers</h2> -->
                    <p class="lead">Enrolling in a class. Sounds easy, right? B*****, please. We see you scrambling 10 minutes before class enrollments asking kids about classes as if your physics and math double-major friend knows jack sh** about Shakespearean Text and Performance. No worries. We got you.<br><br>Looking for a great professor? Want to find a class that will blow your mind? Our reviews will help you find that match.</p>
                    <!-- for Roger this is what it was before:
                    <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p> -->
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/dog.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <a   name="tila"></a>
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                <!--increasing col-lg-5 will increase text column on right side while decreasing will decrease text column; no idea what col-sm-6 does (actually check out http://www.zeninvader.com/css/bootstrap-3-grid-system-explained) -->
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><a target="_blank" href="tila.html">TILA: Today I Learned About</a></h2>
                    <p class="lead">We live in a crazy world where a lot of crazier sh** goes down. It's hard to keep track of everything. It seems like everyday there's a new discovery or breakthrough. You want to know more, but you gotta sift through the internet to find an answer while avoiding trolls.<br><br>You have a question? Ask that sh** here. Chances are that someone else has the same question. We'll answer that sh** and back it up with references. Science b****es. We also do non-science stuff cause we're versatile like that.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <!--decreasing col-lg-5 will decrease size of photo; increasing col-lg-offset will move photo to the right; no idea what col-sm-6 does -->
                    <img class="img-responsive" src="img/phones.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <a  name="campusforum"></a>
    <!--for Roger for href use # but if name do not use # -->
    
    <!-- <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6"> -->
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><a target="_blank" href="campusforum.html">Campus Forum</a></h2>
                    <p class="lead">Your mom was right when she said you are special. We all have unique experiences that others would love to hear about. Applying for a research grant, studying abroad, or found a clean bathroom on campus? Let us know about your experience. It's cool to hear that our fellow bro-migos are doing cool sh**.<br><br>You have a question about campus opportunities or stuff to check out? Ask away. A fellow bro or sis will help out. Remember, we're a community. Help me, help you, or some sh** like that. Straight up. We got you.</p>
                </div>
                <!--<div class="col-lg-5 col-lg-offset-2 col-sm-6"> -->
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <a  name="classifieds"></a>
    <!--for Roger for href use # but if name do not use # -->
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><a target="_blank" href="classifieds.html">Classifieds</a></h2>
                    <p class="lead">One bro's sh** is another bro's treasure. You have something to sell? Well, someone is looking to buy. Textbooks, furniture, housing, tutoring, and much more. Check it out.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <a  name="funnies"></a>
    <!--for Roger for href use # but if name do not use # -->
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><a target="_blank" href="funnies.html">Funnies</a></h2>
                    <p class="lead">Experiencing a rough day and need something to get you over the hump? No worries. We got you. Specializing in photoshopped photos, funny videos, and poop, we'll satisfy your daily humor requirement.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <a  name="food"></a>
    <!--for Roger for href use # but if name do not use # -->
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading"><a target="_blank" href="food.html">Food</a></h2>
                    <p class="lead">Does this actually need a description? Everyone gets hungry and everyone loves cheap and yummy food. We'll provide you nearby food locations and their hours. And coupons. Yeah, you heard right. Coupons aren't just for moms, they're for the hardcore. Your coupon game will be so f***ing raw, they'll owe you money. That maybe an exaggeration.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Connect to Start Bootstrap:</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#aboutus">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/app.js"></script>
<div id="respond">

  <h3>Leave a Comment</h3>

  <form action="post_comment.php" method="post" id="commentform">

    <label for="comment_author" class="required">Your name</label>
    <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">

    <label for="email" class="required">Your email;</label>
    <input type="email" name="email" id="email" value="" tabindex="2" required="required">

    <label for="comment" class="required">Your message</label>
    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>

     <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
    <input name="submit" type="submit" value="Submit comment" />
    <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />

  </form>

</div>
</body>

</html>
