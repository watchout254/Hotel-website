<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./IMAGES/fav.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/faqs.css">
    <title>FRADS-FAQS</title>
</head>
<body>
    <div class="logo"><img src="./IMAGES/logo.PNG" alt=""  height="85px"></div>

    <!--navbars-->
    <div class="navbar">
        <ul>
            <li><a href="index.html"><i class="fa-duotone fa-house-heart"></i>Home</a></li>
            <li><a href="about.html"><i class="fa-solid fa-address-card"></i>About</a></li>
            <li><a href="order.html"><i class="fa-solid fa-pot-food"></i>Order</a></li>
            <li><a href="menu.html"><i class="fa-regular fa-bars-sort"></i>Menu</a></li>
            <li><a href="meeting.html"><i class="fa-duotone fa-handshake"></i>Meetings</a></li>
            <li><a href="gallery.html"><i class="fa-regular fa-gallery-thumbnails"></i>Gallery</a></li>
            <li><a href="contact.html"><i class="fa-solid fa-phone-arrow-down-left"></i>Contact</a></li>
            <li><a href="faqs.html"><i class="fa-solid fa-question"></i>FAQS</a></li>
            <li><a href="admin.html"><img src="./IMAGES/wala.jpg" alt="admin" width="40px" height="40px"></a></li>
        </ul>
    </div> <br> <br> <br> <br> 

    <!--faqs section brooo-->
    <?php
        session_start();
         if(isset($_SESSION['success'])){
             echo '<p class="success">'.$_SESSION['success'].'</p>';
             unset($_SESSION['success']);
         }
            if(isset($_SESSION['error'])){
                echo '<p class="error">'.$_SESSION['error'].'</p>';
                unset($_SESSION['error']);
            }
        ?>
        <form action="./BCKEND/save.php" method="post">
            <label for="email">Email:</label>
           <input type="email" name="email" id="email" placeholder="abc@gmail.com" required> <br> <br>

           <label for="question">Question:</label>
            <textarea name="question" id="question" cols="30" rows="10" required></textarea> <br>

            <button type="submit">Send</button>
        </form>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Company</h4>
                        <ul>
                            <li><a href = "about.html">About us</a></li>
                            <li><a href = "#">Our services</a></li>
                            <li><a href = "#">Privacy policy</a></li>
                        </ul>
                    </div>
    
                    <div class="footer-col">
                        <h4>Get help</h4>
                        <ul>
                            <li><a href = "faqs.html">FAQS</a></li>
                            <li><a href = "#">Order status</a></li>
                            <li><a href = "#">Payment options</a></li>
                        </ul>
                    </div>
    
                    <div class="footer-col">
                        <h4>online shop</h4>
                        <ul>
                            <li><a href = "#">Beverages</a></li>
                            <li><a href = "#">Snacks</a></li>
                            <li><a href = "#">canned food</a></li>
                        </ul>
                    </div>
    
                    <div class="footer-col">
                        <h4>Follow us </h4>
                        <div class="social-links">
                            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://www.snapchat.com"><i class="fa-brands fa-snapchat"></i></a>
                        </div>
                    </div>
    
                </div>
            </div>
    
            All rights reserved &copy;2022, Daniel Mukenya &trade;
        </footer>
    
</body>
</html>