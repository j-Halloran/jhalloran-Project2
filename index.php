<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal Website for Jake Halloran">
    <meta name="author" content="Jake Halloran">

    <title>Jake Halloran - Personal Site</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/ProjectCSS.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Jake Halloran</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#interests">Interests</a>
                    </li>
                    <li class="page-scroll">
                      <a href="#portfolio">Resume</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="page-scroll">
                      <a href ="https://www.github.com/j-halloran" target="_blank">GitHub</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.jpg" id="profPic" alt="">
                    <div class="intro-text">
                        <span class="name">Jake Halloran</span>
                        <hr class="star-light">
                        <span class="skills">Computer Engineer - Accomplished Idiot - Functionally Incompetent Programmer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Me</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>  I am Jake Halloran, a computer engineering student at the University of Pittsburgh. I am a senior according to credits but only in my third year of school.</p>
                </div>
                <div class="col-lg-4">
                    <p>Somehow I have managed to cobble together knoweldge in C, C++, Java, Python, Javascript, Model Sim, Autodesk, HTML/CSS, and more.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="https://www.github.com/j-halloran" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Visit My GitHub
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--interests Section-->
    <section class="success2" id="interests">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>My Interests</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Search below to find things that I consider my favorite in a category (ex food or book or album)</p>
                </div>
                <div class="col-lg-4">
                    <p>On top of what is listed below, generally I am down to talk about anything even remotely techy or involving the Steelers or Penguins.</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                  <div id="interestsFormHolder">
                    <div id="interestsForm">
                      <form name="interest-form" method="get" action="/" id="interestsForm" autocomplete="off">
                          <input type="text" name="search" id="searchBar" placeholder="Search..">
                      </form>
                    </div>
                  </div>
                  <p id="intResponsePara"></p>
                </div>
              </div>
          </div>
    </section>

    <!-- Resume Grid Section -->
    <section id="portfolio" class="success">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Resume</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png" class="img-responsive" alt="my resume">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contact Me</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
              <div id="formHolder">
                <div id="innerForm">
                  <form name="name-form" method="get" action="/" id="commentForm">
                      <input id="name" name="name-field" class="textbox-input" type="text" placeholder="First and Last Name" autofocus="autofocus"><br>
                      <input id="email" name="email-field" class="textbox-input" type="text" placeholder="Email Address"><br>
                      <textarea id="comment" name="comment-field" class="textbox-input" type="text" placeholder="Enter your Comment Here"></textarea><br>
                      <input id="submitButton" class="about-button" name="Submit" type="submit">
                  </form>
                </div>
              </div>

              <div id="formTitle">
                <p id="titlePara"><br></p>
              </div>

              <div id="errorHolder">
                <p id="nameError"><br>You Must Enter A Name</p>

                <p id="emailError"><br>You Must Enter An Email</p>

                <p id="emailFormatError"><br>Your email must contain an @ symbol</p>

                <p id="commentError"><br>You Must Enter A Comment</p>

              </div>

              <div id="successHolder">
                <p id="successPara"><br>Thanks, I will get back to you soon!</p>

              </div>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- Resume Holder -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Resume</h2>
                            <hr class="star-primary">
                        </div>
                    </div>
                </div>
            </div>
            <div id="resumeContainer">
              <iframe id="resumeFrame" src="https://drive.google.com/file/d/0Byj-EsQtcQr8Y19RbUswOHpKb2M/preview" width="1280" height="960" seamless="seamless"></iframe>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/project2_form.js"></script>

    <!-- Interests Script-->
    <script src="js/project2_about.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
