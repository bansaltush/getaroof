<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aboutiframe</title>

    <!-- Bootstrap Core CSS -->
    

    <!-- Custom Fonts -->
    <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/footer.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"> -->
    <!-- Theme CSS -->
    
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-agency/3.3.7/css/agency.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-agency/3.3.7/css/agency.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-agency/3.3.7/js/agency.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-agency/3.3.7/js/agency.min.js">
    <link href = "<?php echo base_url(); ?>css/agency.min.css" rel="stylesheet">
    <link href = "<?php echo base_url(); ?>css/font-style.css" rel="stylesheet">

    
    <style>
       /* #abc{
            display: flex;
            flex-wrap: wrap;
        }
        @media screen and (min-width: 1150px){
            #abc1{
                order: 1;
                width: 40%;
            }
            #abc2{
                order: 0;
                width: 60%;
            }   

        }*/
        html{
            /*overflow-x: hidden;*/
        }
        body{
            overflow-x: hidden;
            width: 100%;

        }

form .row:first-child .form-item{border-top:1px solid #fff;}
.form-item{position:relative;margin-bottom:10px;padding-bottom:10px;border-bottom:2px solid #bbb;}
.form-item input, .form-item textarea{z-index:1;position:relative;padding-right:0;
  padding-left:0;border:0;border-radius:0;font-size:1.5em;background:0 0;
  box-shadow:none!important;resize:none;width:100%;}
.form-item input:focus, .form-item textarea:focus{outline:0}
.form-item label{
  display:block;z-index:0;position:relative;top:2em;
  margin:0;font-size:.85em;line-height:1.764705882em;
  vertical-align:middle;vertical-align:baseline;
  opacity:0;
  -webkit-transition:top .3s ease,opacity .3s ease;transition:top .3s ease,opacity .3s ease;
  }
.form-item-filled label{top:0;opacity:1;color:#aaa;}
.form-item-focused label{color:#292c2f;}

    </style>

 <script>
    $(function() {$("body")
      .on("input propertychange", ".form-item",function(e) {
        $(this).toggleClass("form-item-filled",!! $(e.target).val());})
      .on("focus", ".form-item",function() {
        $(this).addClass("form-item-focused");})
      .on("blur", ".form-item",function() {
        $(this).removeClass("form-item-focused");});
    });

  </script>
  <style>
      
.caption {
    height: 130px;
    overflow: hidden;
}

.caption h4 {
    white-space: nowrap;
}

.thumbnail img {
    width: 100%;
}

.ratings {
    padding-right: 10px;
    padding-left: 10px;
    color: #d17581;
}

.thumbnail {
    padding: 0;
}

.thumbnail .caption-full {
    padding: 9px;
    color: #333;
}
.navbar {
    margin-bottom: 0;
  /* background-color: #292c2f;*/
    background-color: #292c2f;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-weight: bold;
}

.navbar li a, .navbar .navbar-brand {
   
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
   /* color: #6F1EF4 !important;*/
    color: #292c2f !important;
    background-color: #FCFAFF !important;
    font-size: 16px;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}
  </style>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <div id="abc">
    <div id="abc1" ></div>
    <div id="abc2" >
    
    
        <!-- navbar start -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand"  href="#myPage">GetaRoof.com</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  
                    <li><a href="#contact">HOME</a></li>
                    <li><a href="<?php echo base_url() ?>/index.php/auth/signin">SIGN IN</a></li>
                    <li><a href="<?php echo base_url() ?>/index.php/auth/signup">SIGN UP</a></li>
                    <li><a href="#">LOG OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ended -->


    <!-- Header -->

    <header style="color: black">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To GetaRoof</div>
                <div class="intro-heading">About Us</div>
            </div>
        </div>
    </header>

    <div  style="
            padding-left: 30px;
            padding-right: 30px;" id="about_font">
            Neelabh is an investment banker specialising in mergers and acquisitions and public market fund raising.

            After graduating from IIM Bangalore in 2005, Neelabh’s experience with HSBC, ICICI, and Deutsche Bank crafted his understanding of the wealth management space.

            After graduating from IIM Bangalore in 2005, Neelabh’s experience with HSBC, ICICI, and Deutsche Bank crafted his understanding of the wealth management space.

            This was the time when fund houses (and mutual funds) were coming of age in the early 2000s. In his previous role, Neelabh was an investment banker with Enam Capital, now Axis Capital, after acquisition by Axis Bank.

            On the other end of the spectrum is Gaurav, an IIT Delhi and Booth School of Business graduate, who worked as a proprietary portfolio manager with Morgan Stanley across asset classes, commodities, and debt.

            It so happened that they met through Gaurav’s ex-IIT batchmate at the time when they were both contemplating entrepreneurship. Around August 2015, More</a>

            .
        </div>

    <!-- Services Section -->
    <section id="services" style="padding-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Trending Properties</h2>
                    <h3 class="section-subheading text-muted">Where we found something good</h3>
                </div>
            </div>
        

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="#">Second Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$74.99</h4>
                                <h4><a href="#">Third Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </section>



    <!-- About Section -->
    <section id="about" style="padding-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Still Working Member In It</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">

                                <img class="img-circle img-responsive" src="<?=base_url()?>images/tush.jpg" alt="notload">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Tushar Bansal</h4>
                                    
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
    
    
                                    <div class="team-member" style="padding-top: 10px ; padding-left: 90px;">
                                    <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/tuskibansal"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                        </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=base_url()?>images/vaibhav.jpg" alt="notload">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Vaibhav chellani</h4>
                                    
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                    <div class="team-member" style="
    padding-top: 10px;
    
    padding-right: 90px;
">
                                    <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/vaibhav.chellani.9"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                        </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=base_url()?>images/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=base_url()?>images/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url()?>images/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url()?>images/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?=base_url()?>images/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

   
    <div class="row"> 
    <div class="col-sm-3">
        
    </div>
    <div class="col-sm-6 inputcontact"  >
       <p class="text-center" style=" font-size: 40px;
        font-family: 'Mogra', cursive;">CONTACT</p>
        <form style="padding-left: 15px; padding-right: 15px;">
            <div class="form-item"  >
            <label for="fname">NAME</label>
            <input type="text" id="fname" name="fname" placeholder="NAME " autocomplete="off" style="outline: 0;">
            </div>
            <div class="form-item">
            <label for="email">EMAIL ID</label>
            <input type="text" id="lname" name="email" placeholder="xyz@abc.com" autocomplete="off" style="outline: 0;">
          </div>
          <div class="form-item">
            <label for="email">MESSAGE</label>
            <textarea placeholder="say something" class="messagetext" rows="5" autocomplete="off" style="outline: 0;"></textarea>
          </div>
          <div>
            <a href="mailto:tuskibansal@gmail.com"><input  style="padding: 10px; color: black;" type="submit" name="SUBMIT"></a>
          </div>
        </form>
      </div>
      <div class="col-sm-3">
          
      </div>
      </div>
    
    <footer class="footer-distributed">

        <div class="footer-right">

            <a href="https://www.facebook.com/tuskibansal"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/mynetwork/"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/anonymous043044/startup-bvp1.1"><i class="fa fa-github"></i></a>

        </div>

        <div class="footer-left">

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#about">About</a>
                ·
                <a href="#contact">Contact</a>
                ·
                <a href="signup/signin.php">Sign In</a>
                ·
                <a href="php/signup.php">Sign Up</a>
                
            </p>

            <p>Company Name &copy; 2017</p>
        </div>

    </footer>
    </div>
    </div>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
   


    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
