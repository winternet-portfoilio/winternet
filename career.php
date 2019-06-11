<!DOCTYPE html>
<html lang="en">

<head>
<?php include("includes/head.php") ?>
  <style>
    .font
    {
     font-family: 'Open Sans';
 }
    </style>
    
    <link href="css/css_career\style.css" rel="stylesheet"> 
    <link href="css/css_career\stylesheet.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar-example">
   <!--Start of Tawk.to Script-->
   <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cefaf2a267b2e57853022ad/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<!--End of Tawk.to Script--> 
  

<header >
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
                <!--   <h1><span>winter</span>net</h1>
                  Uncomment below if you prefer to use an image logo  -->
                  <img src="img/logo/logo.png" alt="" title="">
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="index.php"><strong>HOME</a>
                  </li>  
                  			  
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  
  <div class="faq-area area1-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
			        <a href="career.php">
										<img src="img/blog/d1.png" alt="">
									<!--	<img src="img/blog/job1.jpg" alt="">   --->
									</a>
               
               
              </div>
            </div>
          </div>

          <div class="well well-sm text-justify">
          <div class="container-fluid pag_data clearfix">
          <div class="col-sm-12 col-md-12 col-xs-12 p0px">
          <div class="career_form clearfix">

          <h2 class='font' class="frm-head text-center"><strong>Submit Application</h2>
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 p0px enq_form" >
            
                <form method="post" action="insert.php" enctype="multipart/form-data">
                 <div class="input-container clearfix">
                  <div class="d1">
                 
                    <input type="text"  name="fname" required="">
                <label class='font' for="fname"><strong>First Name*<strong></label>
                    <div class="bar"></div>
                  </div>
                  <div class="d2">
                    <input type="text" name="lname" required="">
                    <label class='font' for="lname"><strong>Last Name*</label>
                    <div class="bar"></div>
                  </div>
                </div>
                <div class="input-container">
                   <input type="text"  name="emailid" required="">
                   <label class='font' for="emailId"><strong>Email id*</label>
                   <div class="bar"></div>
                </div>
                <div class="input-container">
                  <input type="text"  name="mobileNo" maxlength="15" required="">
                  <label class='font' for="mobileNo"><strong>Mobile No.*</label>
                  <div class="bar"></div>
                </div>
              
                   <div class="">
                   <input type="file" name="image" id="cv"  class="inputfile inputfile-1" accept=".pdf,.doc,.docx">
				           <label class='font' for="cv"><svg width="20" height="17" viewbox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg> <span>Upload CV&hellip;</span></label>
                   <span style="font-size: 14px;margin-left: 5px;float: left;margin-top: 10px;"><strong>(.pdf,.doc,.docx)</span>
                  <div class="bar"></div>
                  <div style="clear:both;"></div>
                  </div>
               
               
                </div>
                <!-- <div id=""> <input type="submit" name="submit" value ="Submit Now"></div>    -->
                <button type="submit" name="submit" class="btn btn-success btn-md "><strong>Submit Application</strong></button>
               </form>
           
                </div>
               
          </div>
        </div>
      </div>
              <div class="shadow-box"><img src="images\right-shadow.jpeg" alt=""></div> 
              </div> 
          </div>
        </div>
<div style="clear: both;"></div>
</div>

<?php include("includes/footer.php");?>

<div class="scroll-top page-scroll" style="display: none;"> 
<a class="click_scroll" href="#page-top"> 
    <img src="images\arrow_up.png" class="animated-btop bounce">
    <img src="images\mouse1.png" class="m-icn">
    </a>
  </div>
<script src="lib/jquery/jquery.min.js"></script>
<script src="js\plugins.js"></script>
<script src="js\lightslider.js"></script>
<script src="js\custom.js"></script>
<script src="js\wow.min.js"></script>


</body>

</html>

