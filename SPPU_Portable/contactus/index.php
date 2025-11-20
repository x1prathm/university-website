<?php
session_start();
$loggedIn = isset($_SESSION['email']); // Check if user is logged in
$firstName = $loggedIn ? $_SESSION['firstName'] : "";
$lastName = $loggedIn ? $_SESSION['lastName'] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../styles/shared/nav.css">
    <link rel="stylesheet" href="../styles/shared/utility.css">
    <link rel="stylesheet" href="../styles/shared/footer.css">
    <script defer src="script.js"></script>
</head>
<body>
    <nav>
        <div class="header">
            <div class="header-left">
                <div class="search-bar">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#1d1d36"
                        fill="none">
                        <path d="M17.5 17.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20C15.9706 20 20 15.9706 20 11Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                    </svg>
                    <input type="search" placeholder="Search...">
                </div>
            </div>
            <div class="header-middle">
                <img onclick="window.location.href='../index.php';" src="../assets/logo_2-removebg-preview.png" alt="logo">
            </div>
            <div class="header-right">
                <div class="login-box">
                    <a href="../login/index.php">
                        <button class="login-btn" id="login-button"><img src="../assets/user-stroke-rounded.svg" alt=""></button>
                    </a>
                    <label for="login-button">Log In</label>
                </div>
                <a href="https://www.youtube.com/@SPPUeCDLIC">
                    <img src="../assets/originals.svg" alt="">
                </a>
            </div>
        </div>
        <div class="navbar">
            <ul>
                <li class="home"><a href="../index.php">Home</a></li>
                <li><a href="../about.php">About</a></li>
                <li><a href="../academics.php">Academics</a></li>
                <li><a href="../result/index.php">Results</a></li>
                <li><a href="../campus.php">Campus</a></li>
                <li><a href="index.php">Contact</a></li>
            </ul>
            <div class="user-login"
                style="display: <?php echo $loggedIn ? 'flex' : 'none'; ?>;position:absolute;right:0">
                <p>Hello, <span id="username">
                        <?php echo $firstName . " " . $lastName; ?>
                    </span> 👋</p>
                <a href="login/logout.php" class="logout-btn">Logout</a>
            </div>
        </div>
    </nav>

    <main>
        <div class="page-title">
            <h1>CONTACT US</h1>
            <p>Our Contact Us page provides essential information to connect with us. Reach out for inquiries, support, or assistance through phone, email, or visit our office. We're here to help!</p>
        </div>
        <div class="grid-container-1">
            <div class="info">
                <div class="info-title">
                    <h1>Visit the School</h1>
                    <p>Under Safety Measures</p>
                </div>
                <div class="address">
                    <h3>ADDRESS</h3>
                    <p>500 Terry Francine Street
                        San Francisco, CA 94158</p>
                </div>
                <div class="information">
                    <h3>INFORMATION</h3>
                    <p>For information or questions:</p>
                    <h3>E-MAIL US</h3>
                    <a href="mailto:janesmith@example.com" class="email">info@mysite.com</a>
                </div>
                <div class="call">
                    <h3>CALL OUR MAINLINE</h3>
                    <p>123-456-7890</p>
                </div>
                <div class="office-hours">
                    <h3>OFFICE HOURS</h3>
                    <p>While school is in session our staff offices are open from</p>
                </div>
                <div>
                    <h3 class="time">7:30 am - 4:00 pm</h3>
                    <p>During the summer our staff offices are open from</p>
                </div>
                <div>
                    <h3 class="time">8:30 am - 3:30 pm</h3>
                </div>
            </div>
            <div class="grid-container-1-img">
                <img src="../demo assets/2e2a49_bf9f0581892b429089f2ffcbb9c17f62~mv2.jpg" alt="">
            </div>
        </div>
        <div class="grid-container-2">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.4671052310337!2d73.82396757423844!3d18.552968382546897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf0eed1beca7%3A0xf07ab6b613c2af51!2sSavitribai%20Phule%20Pune%20University!5e0!3m2!1sen!2sin!4v1743612001029!5m2!1sen!2sin" width="700" height="900" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="info">
                <h1>You Can Also Contact Us by Form</h1>
                <div class="contact-form-container">
                    <form id="contactForm">
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                        <button type="submit">Send Message</button>
                        <p id="statusMessage"></p>
                    </form>
                </div>
            </div>
        </div>
    </main>


    <footer>
        <div class="footer-sec-1">
            <img style="width: 100%; margin-top: 30px;" src="../assets/sppu_white_logo.png" alt="">
        </div>
        <div class="footer-sec-2">
            <p>QUICK NAVIGATION</p>
            <div class="footer-sec-2-div">
                <div class="footer-sec-2-div-left">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Academics</a></li>
                    </ul>
                </div>
                <div class="footer-sec-2-div-right">
                    <ul>
                        <li><a href="">Result</a></li>
                        <li><a href="">Campus</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-sec-3">
            <p>STAY CONNECTED</p>
            <div class="footer-sec-3-div">
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Instragram</a></li>
                    <li><a href="">Youtube</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-sec-4">
            <p>GET IN TOUCH</p>
            <div class="footer-sec-4-div">
                <p>Ganeshkhind Rd, Ganeshkhind, Pune, Maharashtra 411007</p>
                <p>Tel: 020 7153 3633</p>
                <p>info@mysite.com</p>
            </div>
        </div>
    </footer>
    <div class="footer-bottom">
        <p>© 2035 by Savitribai Phule University.</p>
    </div>
</body>
</html>