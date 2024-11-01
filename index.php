<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>        
        <meta charset="UTF-8">
        <meta name="description" content="Product Review">
        <meta name="keywords" content="HTML, CSS, JavaScript">
        <meta name="author" content="Akshai S,Harish K">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EvaluxeHub | Home</title>
        <link rel="icon" href="img/EvaluxeHub.png">
        <script src="https://kit.fontawesome.com/69806a9aa8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="head">
            <table>
                <tr>
                    <td><h1>EvaluxeHub</h1></td>
                    <td><img src="img\EvaluxeHub.png" alt="Logo" width="13%"></td>
                </tr>
            </table>
        </div>
        <div class="navigation">
           <nav>
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li ><a href=<?php
                    if(isset($_SESSION['name']) && isset($_SESSION['user_name']) && isset($_SESSION['pass_word']) && isset($_SESSION['id'])){
                        echo "categories.html";
                    }
                    else{
                        echo "home.php";
                    }
                    ?>>Categories</a></li>
                    <li ><a href=<?php
                    if(isset($_SESSION['name']) && isset($_SESSION['user_name']) && isset($_SESSION['pass_word']) && isset($_SESSION['id'])){
                        echo "about.html";
                    }
                    else{
                        echo "home.php";
                    }
                    ?>>About Us</a></li>
                    <li><a href=<?php
                    if(isset($_SESSION['name']) && isset($_SESSION['user_name']) && isset($_SESSION['pass_word']) && isset($_SESSION['id'])){
                        echo "contact.html";
                    }
                    else{
                        echo "home.php";
                    }
                    ?>>Contact</a></li>
                </ul>
                <div class="hov">
                    <a href=<?php
                    if(isset($_SESSION['name']) && isset($_SESSION['user_name']) && isset($_SESSION['pass_word']) && isset($_SESSION['id'])){
                        echo "logout.php";
                    }
                    else{
                        echo "home.php";
                    }
                    ?>><i class="fa-regular fa-user fa-xl" style="color: #ffffff;" ></i></a>
                </div>
           </nav>
        </div>
        <div id="hero-image">
        <div class="wrapper">
            <h2 style="color:#ffffff"><strong style="color:snow">Hi, <?php 
            if(isset($_SESSION['name'])){
                echo $_SESSION['name'];
            } else {
                echo 'Friend';
            }   ?> !</strong><br/>
            Let's Start Browsing Our Website..</h2>
            <a href="#features"style="transition: 0.4s;" class="button-1">Get Started</a>
        </div>
    </div>
    
    <div id="features" style="transition: 0.4s;">
        <div class="wrapper">
            <ul>
                <li class="feature-1">
                    <h4>Sustainability</h4>
                    <p >At EvaluxeHub, we are committed to promoting sustainable consumer choices. Our reviews often highlight eco-friendly products and brands that prioritize sustainability. Additionally, we practice environmentally responsible operations, minimizing waste and reducing our carbon footprint.</p>
                </li>
                <li class="feature-2">
                    <h4>Customer Support</h4>
                    <p>We value our readers and strive to provide excellent support. Our website features a robust customer support section, including FAQs, contact forms, and live chat options. We also welcome feedback and suggestions to improve our services continuously.</p>
                </li>
                <li class="feature-3">
                    <h4>Target Audience</h4>
                    <p>EvaluxeHub targets a wide audience of consumers looking for reliable product information. Our users range from tech enthusiasts and early adopters to everyday shoppers seeking the best value for their money. Our comprehensive reviews cater to a global audience, with a significant presence in North America, Europe, and Asia.</p>
                </li>
                <div class="clear"></div>
            </ul>
        </div>
    </div>
    
    <div id="primary-content">
        <div class="wrapper">
            <article>
                <h3>About Forever Company</h3>
                <p>Forever Company is a leading provider of premium health, beauty, and wellness products. We are committed to innovation, quality, and sustainability in all aspects of our operations. Our products are meticulously crafted to meet the diverse needs of our customers, promoting overall well-being and vitality. With a focus on customer satisfaction, we strive to build lasting relationships and inspire positive lifestyle changes. Join us on our mission to transform lives and embrace a healthier, happier future with Forever Company.</p>
                <video width="100%" height="100%" id="con" muted loop controlslist="nofullscreen nodownload noremoteplayback noplaybackrate foobar">
                    <source src="images/review.mp4" type="video/mp4">
                </video>
                <script>
                    var video = document.getElementById('con');
                    function enableVideoPlayback() {
                        video.addEventListener('mouseover', () => {
                            video.play().catch(function(error) {
                                console.error('Error attempting to play video on mouseover:', error);
                            });
                        });
                        video.addEventListener('mouseout', () => {
                            video.pause();
                        });
                        document.removeEventListener('click', enableVideoPlayback);
                        document.removeEventListener('keydown', enableVideoPlayback);
                    }
                    document.addEventListener('click', enableVideoPlayback);
                    document.addEventListener('keydown', enableVideoPlayback);
                </script>
            </article>
        </div>
    </div>
    
    <div id="secondary-content">
        <div class="wrapper">
            <article style="background-image: url('images/cnet.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
                <div class="overlay">
                    <h4>Inspire About</h4>
                    <p><small>Elevate your tech experience with EvaluxeHub, where innovation meets insight, akin to the digital prowess of CNET.<strong>For more info click here</strong></small></p>
                    <a href="https://www.cnet.com/" class="more-link">View more</a>
                </div>
            </article>
            <article style="background-image: url('images/policy.png');background-position: center;background-repeat: no-repeat;background-size: cover;">
                <div class="overlay">
                    <h4>Company policy</h4>
                    <p><small>Our company policy prioritizes transparency, integrity, and excellence in all endeavors.<strong>For More info about as click here</strong></small></p>
                    <a href=<?php
                    if(isset($_SESSION['name']) && isset($_SESSION['user_name']) && isset($_SESSION['pass_word']) && isset($_SESSION['id'])){
                        echo "about.html";
                    }
                    else{
                        echo "home.php";
                    }
                    ?> class="more-link">View more</a>
                </div>
            </article><div class="clear"></div>
        </div>
    </div>

    <div id="cta">
    <div class="wrapper">
        <h3>Contact Us </h3>
        <p>For any questions, feedback, or inquiries. Our office is located at <strong>1234 Market Street, San Francisco, CA 94103, USA</strong>. For more information, visit our website at EvaluxeHub.com. You can also connect with us on social media through Facebook, Twitter, Instagram, and LinkedIn. We look forward to hearing from you!</p>
        <a href=<?php
                    if(isset($_SESSION['name']) && isset($_SESSION['user_name']) && isset($_SESSION['pass_word']) && isset($_SESSION['id'])){
                        echo "contact.html";
                    }
                    else{
                        echo "home.php";
                    }
                    ?> class="button-2">Visit Us</a>
    </div>
</div>
    


    
</body>
</html>