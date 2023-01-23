<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services | Way to go builders</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    </head>
<body>
    <div class="nav2">
        <div class="men">
            <img src="./icons/menu.png" alt="">
        </div>
        <div class="logo"><img src="./logo/Blue-on-Logo.png" alt=""></div>
        <ul  id="none" class="none">
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT&nbsp;US</a></li>
            <li><a class="active" href="services.php">SERVICES</a></li>
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
   
<div class="content"></div>
<div class="atv removePadding">
    <h1>Services We Offer</h1>
</div>
<div class="content" id="bgDark">
    <div class="portContainer">
        <div class="p1">
            <div class="imgSection" onclick='document.location.href="./backyard.php"'>
                <div class="overlay"><h1>Backyard Transformations</h1></div>
                <img src="images/backyard 2.jpg" alt="">
            </div>          
         
            <div class="imgSection" onclick='document.location.href="./patio.php"'>
                <div class="overlay"> <h1>PATIO</h1></div>
                <img src="images/patio1.jpg" alt="">
            </div>
            <div class="imgSection" onclick='document.location.href="./concrete.php"'>
                <div class="overlay"> <h1>Concrete</h1></div>
                <img src="images/2.jpg" alt="">
            </div>
        </div>
        <div class="p1">
            <div class="imgSection" onclick='document.location.href="./pavers.php"'>
                <div class="overlay"> <h1>PAVERS</h1></div>
                <img src="images/pavers.jpg" alt="">
            </div>
            <div class="imgSection" onclick='document.location.href="./truf.php"'>
                <div class="overlay"><h1>TURF</h1></div>
                <img src="images/truf.jpg" alt="">
            </div>
            
            <div class="imgSection" onclick='document.location.href="./pool.php"'>
                <div class="overlay"><h1>POOL</h1></div>
                <img src="images/pool2.jpg" alt="">
            </div>       
        </div>
        </div>
</div>

</div>
<div class="sharing">
    <div  id="contact">
        <div class="head">
            <h1>REQUEST A VISIT</h1>
            <img id="close" src="./icons/icons8-close-window-100.png" alt="">
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
   <h1>Schedule Your FREE Consultation Today</h1>
   <button class="consultation BookNow">Book Now</button>
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
</body>
</html>