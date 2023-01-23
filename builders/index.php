<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Way To Go Builders</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.5.1/intersection-observer.js"></script>
    <style>
        body{
            background-color: #c3c3c3 !important;
        }
    </style>
</head>
<body >
    <div class="nav2">
        <div class="men">
            <img src="./icons/menu.png" alt="">
        </div>
        <div class="logo"  ><img src="./logo/Blue-on-Logo.png" alt=""></div>
        <ul  id="none" class="none">
            <li><a class="active" href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT&nbsp;US</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="project.php">PROJECTS</a></li>
            <li><a href="virtualtour.php">VIRTUAL&nbsp;TOUR</a></li>
            <li><a href="blog.php">BLOG</a></li>
        </ul>
            <div class="ham hamburger-menu">
                <div class="bar-top"></div>
                <div class="bar-middle"></div>
                <div class="bar-bottom"></div>
            </div>
    </div>
    <div  id="contact">
        <div class="head">
            <img id="close" src="./icons/icons8-close-window-100.png" alt="">
            <h1>REQUEST A VISIT</h1>
        </div>
        <form action="data.php" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="number" name="PhoneNumber" placeholder="Phone Number" required>
            <input type="email" name="email" placeholder="email@example.com" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <textarea name="message" name="message" cols="30" rows="10" placeholder="Message"></textarea>
            <input type="submit" class="btns" value="send">
        </form>
    </div>
    <div class="sidebar">
        <img src="./logo/orignal.png" alt="Way to go builders">
        <div class="insider">
        <p><b>Address</b></p>
        <p>6700 Fallbrook Ave Ste #133 Los Angeles, CA 91307</p>
        <p><b>Phone</b></p>
        <p> 1 800-505-5770</p>
        <p><b>Email</b></p>
        <p>support@waytogobuilders.com</p>
        <p>office@waytogobuilders.com</p>
        </div>
        <div class="homesection">
            <ul class="icon-list">
                <li class="icon-item">
                    <a href="https://www.facebook.com/waytogobuilders/" class="icon-link"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="icon-item">
                    <a href="https://www.instagram.com/waytogobuilders/?hl=en" class="icon-link"><i class="fab fa-facebook-f"></i></a>
                </li>
            </ul>
        </div>
    </div>
   
    <div class="slider">
        <div class="slide">
            <div class="topper">
                <a href="backyard.php" class="link1">BACKYARD<img src="./icons/abstract.png"></a>
                <a href="concrete.php" class="link1">CONCRETE<img src="./icons/abstract.png"></a>
                <a href="patio.php" class="link1">PATIO<img src="./icons/abstract.png"></a>
            </div>
            <div class="bottom">
                <a href="pavers.php" class="link1">PAVERS<img src="./icons/abstract.png"></a>
                <a href="truf.php" class="link1">TURF<img src="./icons/abstract.png"></a>
                <a href="pool.php" class="link1">POOL/SPA<img src="./icons/abstract.png"></a>
            </div>
        </div>
      
        <div class="texter">
            <button class="btn book BookNow">BOOK NOW</button>
            <h1 class="book2">Free Consulation</h1>
            <video autoplay muted loop id="myVideo">
                <source src="./videos/prj.mp4" type="video/mp4">
              </video>
        </div>
    </div>
    <div class="contentS">
        <h1>Leading Exterior Home Builder In California</h1>
        <p>
            Our landscape designers and our contractors thrive to bring your vision for your creative visions for your
            outdoor space to reality. Our design-build process makes your dream landscaping a real possibility. We know
            that every client has a unique vision for their outdoor space and that is why we have a wide range of
            creative solutions!
        </p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1"
            d="M0,32L0,224L130.9,224L130.9,0L261.8,0L261.8,288L392.7,288L392.7,32L523.6,32L523.6,128L654.5,128L654.5,224L785.5,224L785.5,128L916.4,128L916.4,320L1047.3,320L1047.3,96L1178.2,96L1178.2,192L1309.1,192L1309.1,256L1440,256L1440,0L1309.1,0L1309.1,0L1178.2,0L1178.2,0L1047.3,0L1047.3,0L916.4,0L916.4,0L785.5,0L785.5,0L654.5,0L654.5,0L523.6,0L523.6,0L392.7,0L392.7,0L261.8,0L261.8,0L130.9,0L130.9,0L0,0L0,0Z">
        </path>
    </svg>
   <div class="content care" >

       <h1>Building With Care</h1>
       <p>
        Our experience in the field has trained us enough, and our team would love to share it with you through our premium construction and remodeling services. 
       </p>
       <p>
        Furthermore, our design team seamlessly blends the craftsmanship and design projects to offer the desired and wanted final results to the client.
       </p>
   </div>
   <div class="content">
   <video autoplay controls  loop id="myVideo">
                <source src="./videos/new.mp4" type="video/mp4">
              </video>
   </div>
   <div class="content">
   <iframe width="100%" height="400px" class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=6700 Fallbrook Ave, West Hills, CA 91307, USA&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</div>
<div class="content" id="bgDark">
    <h1 id="numberingHead">We've Accomplished A Lot, But We Still Have A Long Way To Go....</h1>
    <div class="numbering">
        <div class="first" >
            <h1><span class="count">628989</span></h1>
            <p>Sqft.Pavers Installed</p>
        </div>
        <div class="first" >
            <h1><span class="count">  198697</span></h1>
            <p>Sqft. Artificial Grass</p>
        </div>
        <div class="first" >
            <h1><span class="count">237554</span></h1>
            <p>Sqft. Pools Remodeled</p>
        </div>

</div>
</div>
<div class="prj footer">
        <div class="logo">
            <img src="./logo/Blue-on-Logo.png" alt="">
        </div>
        <div class="Col">
            <ul>
                <li>6700 Fallbrook Ave Ste #133
                    Los Angeles, CA 91307</li>
               
                <li> 1 800-505-5770</li>
                <li> support@waytogobuilders.com</li>
    
            </ul>
        </div>
         
        <div style="display: flex; justify-content: space-around; gap: 100px; flex-wrap: wrap;">
            <span>SITE DESIGN BY--Myla M. Paduit</span>
            <span> &copy;2023 Way To Go Builders, Inc., All Rights Reserved. Back to top</span>
            <span>#WAYTOGOBUILDERS</span>
        </div>
    </div>
    <script src="script.js"></script>
    <script>
var observer = new IntersectionObserver(function(entries) {
  entries.forEach(function(entry) {
    if (entry.intersectionRatio > 0) {
      var $this = $(entry.target);
      var value = parseInt($this.text().replace(/,/g, ''));
      $this.prop('Counter', 0).animate({
        Counter: value
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
          $this.text(now.toLocaleString());
        }
      });
      observer.unobserve(entry.target);
    }
  });
});

$('.count').each(function () {
  observer.observe(this);
});
 
    </script>
</body>
</html>