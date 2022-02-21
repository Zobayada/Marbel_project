<?php
require 'forphp/connect.php';

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   $insert = "INSERT INTO `user_message` (`name`,`email`,`message`) VALUES ('$name','$email','$message')";
   $que = mysqli_query($conn,$insert);
   if ($que) {
      echo "<script>alert('Your message send successfully')</script>";
   }
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Marvel</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Condensed:wght@700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/css/normalize.min.css">
    <link rel="stylesheet" href="vendors/css/grid.css">
    
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/responsive.css">
</head>
<body>
  
  <!------ START HEADER ------->
  <header id="home">
      <nav class="sticky">
          <div class="row">
              <a href="#home" class="logo">Marble</a>
              <ul class="main-nav">
                  <li class="active"><a href="#home">home</a></li>
                  <li><a href="#about">about</a></li>
                  <li><a href="#service">service</a></li>
                  <li><a href="#journel">journel</a></li>
                  <li><a href="#team">Our team</a></li>
                  <li><a href="#contact">contact</a></li>
                  <li><a href="#contact">Add New </a></li>
              </ul>
              <div class="mobile-menu">
                  <span class="bar" onclick="openNav()">&#9776;</span>
                  <div id="mynav" class="overlay">
                      <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">&times;</a>
                      <div class="overlay-content">
                          <a onclick="closeNav()" href="#home">home</a>
                          <a onclick="closeNav()" href="#about">about</a>
                          <a onclick="closeNav()" href="#service">service</a>
                          <a onclick="closeNav()" href="#journel">journel</a>
                          <a onclick="closeNav()" href="#team">Our team</a>
                          <a onclick="closeNav()" href="#contact">contact</a>
                     </div>
                 </div>
              </div>
          </div>
      </nav>
      <div class="row">
         <div class="head-text">
            <h1>We are a digital & branding agency based in London.</h1>
            <h3>We love to turn great ideas into beautiful products.</h3>
            <a href="#contact" class="btn btn-head"> work with us</a>
         </div>
      </div>
  </header>
  
  <!------ END HEADER ------->
  
  
  <!------ START ABOUT ------->
  <section id="about" class="about js_about">
      <div class="container">
          <div class="row">
              <div class="col span_1_of_2">
                  <h3>What We Do</h3>
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ex quaerat magnam obcaecati repellendus voluptatum quisquam architecto iure, aliquam labore.</p>
                 <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ex quaerat magnam obcaecati repellendus voluptatum quisquam architecto iure, aliquam labore.</p>
              </div>
              <div class="col span_1_of_2">
                  <img src="resources/img/about-info.jpg" alt="">
              </div>
          </div>
      </div>
  </section>
  
  
  <!------ END ABOUT ------->
  
  
  <!------ START SERVICE ------->
  <section id="service">
  <section  class="service">
      <div class="container">
          <div class="row text-center">
              <div class="col span_1_of_4 box">
                  <div class="circle1">
                     <i class="fas fa-lightbulb icons1"></i>
                  </div>
                <h1 class="text">Pellent esque</h1>
                <p class="ld">Nulla vitae  libero, a pharetra augue. Integer posuere erat a ante venenatis condimentum velit dapibus. </p>
             </div>
             <div class="col span_1_of_4 box">
                 <div class="circle2">
                    <i class="fas fa-clock icons2"></i>
                 </div>
                 <h1 class="text">Consectetur</h1>
                 <p class="ld">Vestibulum id ligula porta  euismod semper. Aenean lacinia bibendum nulla sed consectetur dui. </p>
             </div> 
             <div class="col span_1_of_4 box">
                 <div class="circle3">
                    <i class="fas fa-filter icons3"></i>
                </div>
                <h1 class="text">Tristiquet</h1>
                <p class="ld">Fusce dapibus, cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo risus.</p>
             </div>
             <div class="col span_1_of_4 box">
                 <div class="circle4">
                    <i class="fas fa-plus-square icons4"></i>
                </div>
                <h1 class="text">Fermentum</h1>
                <p class="ld">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum sagittis lacus mollis.</p>
             </div>
          </div>
      </div>
  </section>
  
  <div class="container">
    <div class="row">
        <hr>
    </div>
  </div>
  
  <section class="services">
      <div class="container">
          <div class="row">
              <h1>Our Latest Works</h1>
          </div>
          <div class="row">
              <div class="col span_1_of_3">
                <img src="resources/img/pic2.jpg" alt="">
                <h2>Nobis Business Card</h2>
                <h5>Business Card, Graphic</h5>
                <p class="load">Sed posuere consectetur est at lobortis. Porta sagittis lacus vel augue laoreet rutrum.</p>
              </div>
              <div class="col span_1_of_3">
                <img src="resources/img/pic3.jpg" alt="">
                <h2>New Fun Project</h2>
                <h5>Web Design, Application</h5>
                <p class="load">Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Vestibulum id ligula porta felis.</p>
              </div>
              <div class="col span_1_of_3">
                <img src="resources/img/pic4.jpg" alt="">
                <h2>Passionaries Branding Cover</h2>
                <h5>Branding, Graphic Design</h5>
                <p class="load">Curabitur blandit tempus porttitor. Donec id elit non mi porta gravida at eget metus.</p>
              </div>
          </div>
      </div>
  </section>  
</section>        
  
  <!------ END SERVICE ------->
  
    <!------START JOURNEL ------->
  <section id="journel">
    <div class="container">
        <div class="row">
            <i class="fas fa-quote-right quote"></i>
            <p class="padd">Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus erat porttitor. </p>
        </div>
    </div>
</section>  
  
  <!------ END JOURNEL ------->
  
  
  <!------ START TEAM ------->
  <section id="team" class="team">
      <div class="row">
          <h2>our team member</h2>
      </div>
      <div class="row">
          <div class="col span_1_of_4 box">
              <div class="team-member">
                  <img src="resources/img/a1.jpg" alt="">
                  <h3>Kate Upton</h3>
                  <span class="role">CEO / Marketing Guru</span>
                  <p>Lorem ipsum dolor sit amet, 
                    consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                    <div class="social-link">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                    </ul>
                </div>
              </div>
          </div>
          <div class="col span_1_of_4 box">
              <div class="team-member">
                  <img src="resources/img/a2.jpg" alt="">
                  <h3>ANNE HATHAWAY</h3>
                  <span class="role">CEO / Marketing Guru</span>
                  <p>Lorem ipsum dolor sit amet, 
                  consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                  <div class="social-link">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                    </ul>
                  </div>
              </div>
          </div>
          <div class="col span_1_of_4 box">
              <div class="team-member">
                  <img src="resources/img/a3.jpg" alt="">
                  <h3>Olivia Wilde</h3>
                    <span class="role">Lead Designer</span>
                    <p>Nemo enim ipsam voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
                 <div class="social-link">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                    </ul>
                </div>
              </div>
           </div> 
           <div class="col span_1_of_4 box">
              <div class="team-member">
                  <img src="resources/img/a4.jpg" alt=""> 
                  <h3>Ashley Greene</h3>
                    <span class="role">SEO / Developer</span>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                  <div class="social-link">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                    </ul>
                  </div>
               </div>
          </div>   
      </div>
  </section>
  
  <!------ END TEAM ------->
  
  
  <!------ START CONTACT ------->
  <section id="contact" class="contact">
        <div class="row">
            <h2> contact us</h2>
        </div>
        <div class="row">
            <form action="#" method="post">
                <div class="row">
                    <div class="col span_1_of_2">
                        <input type="text" name="name" placeholder="Your Name *" required>
                    </div>
                    <div class="col span_1_of_2">
                        <input type="email" name="email" placeholder="Your Email *" required>
                    </div>
                </div>
                <div class="row">
                    <textarea name="message" cols="30" rows="10" placeholder="Your Message *" required></textarea>
                </div>
                <div class="row">
                    <input type="submit" value="SEND MESSAGE" name="submit" class="btn btn-submit">
                </div>
            </form>
        </div>
    </section>
  
  <!------ END CONTACT ------->
  
  
  <!------ START FOOTER ------->
  <section class="footer">
      <div class="container">
          <div class="row">
              <div class="col span_1_of_4 box">
                 <h3>Get In Touch</h3>
                 <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. </p>
                 <div class="iconnn">
                    <i class="fas fa-map-marker-alt"></i><div><p class="icon">Moonshine Street No: 14/05 </p></div>
                    <p class="icon">Light City, Jupiter</p>
                    <i class="fas fa-phone"></i><p class="icon">0247 541 65 87</p>
                    <i class="far fa-envelope"></i><p class="icon">support@longwave.com</p>
                 </div> 
              </div>
              <div class="col span_1_of_4 box">
                  <h3>Twitter</h3>
                <div>
                    <i class="fab fa-twitter"></i><p class="icon">Aenean lacinia bibendum nulla sed leo posuere erat a ante venenatis dapibus posuere velit aliquet.</p> 

                    <i class="fab fa-twitter"></i><p class="icon">Donec ullamcorper metus auctor fringilla. Nullam quis risus eget.</p>

                    <i class="fab fa-twitter"></i><p class="icon">Vestibulum id ligula porta  euismod semper. Maecenas faucibus mollis.</p>
                </div>
              </div>
              <div class="col span_1_of_4 box">
                  <h3>Popular Posts</h3>
                  <div>
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum dolor auctor. <br><small>14 Nov, 2012 </small></p>
                    <p>Scelerisque nisl consectetur et. <br> <small>22 May, 2012 </small></p>
                    <p>Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce  <br> <small>15 July, 2012 </small></p>
                 </div>
              </div>
              <div class="col span_1_of_4 box">
                   <h3>About Us</h3>
                    <p>Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. <br><br> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus curabitur blandit tempus.</p>
              </div>
          </div>
          <div class="row">
            <hr>
        </div>
        <div class="row">
          <p class="foter">&copy;2013 Marble. All rights reserved. Theme by elemis.</p>
        </div>
      </div>
  </section>
  
  <!------ END FOOTER ------->
   
<!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="vendors/js/html5shiv.min.js"></script>
  <script src="vendors/js/respond.min.js"></script>
  <script src="vendors/js/selectivizr.min.js"></script>
  <script src="vendors/js/jquery.waypoints.min.js"></script>
  <script src="resources/js/main.js"></script>

</body>
</html>