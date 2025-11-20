<?php
session_start();
include("login/connect.php");
$loggedIn = isset($_SESSION['email']); // Check if user is logged in
$firstName = $loggedIn ? $_SESSION['firstName'] : "";
$lastName = $loggedIn ? $_SESSION['lastName'] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus</title>
    <link rel="stylesheet" href="styles/shared/utility.css">
    <link rel="stylesheet" href="styles/shared/nav.css">
    <link rel="stylesheet" href="styles/shared/footer.css">
    <link rel="stylesheet" href="styles/pages/campus.css">
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
                <img onclick="window.location.href='index.php';" src="assets/logo_2-removebg-preview.png" alt="logo">
            </div>
            <div class="header-right">
                <div class="login-box">
                    <a href="login/index.php">
                        <button class="login-btn" id="login-button"><img src="assets/user-stroke-rounded.svg" alt=""></button>
                    </a>
                    <label for="login-button">Log In</label>
                </div>
                <a href="https://www.youtube.com/@SPPUeCDLIC">
                    <img src="assets/originals.svg" alt="">
                </a>
            </div>
        </div>
        <div class="navbar">
            <ul>
                <li class="home"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="result/index.php">Results</a></li>
                <li><a href="campus.php">Campus</a></li>
                <li><a href="contactus/index.php">Contact</a></li>
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
        <div class="banner">
            <div class="banner-filter"><h1>Campus Life</h1></div>
        </div>

        <div class="services-grid">
            <div class="services-card">
                <h1>Career Center</h1>
                <p>Our Career Center provides guidance, job placement support, resume building, and networking opportunities. It connects students with employers, helping them achieve career success through internships, workshops, and personalized career counseling.</p>
                <img src="demo assets/Image-place-holder.jpg" alt="">
            </div>
            <div class="services-card">
                <h1>College Life Office</h1>
                <p>The College Life Office plays a vital role in enhancing student experiences by organizing events, clubs, leadership programs, and support services. It fosters personal growth, community engagement, and academic success. Through mentorship, social activities, and career development initiatives, it helps students build connections, explore opportunities, and create a fulfilling and well-rounded college journey.</p>
                <img src="demo assets/Image-place-holder (1).jpg" alt="">
            </div>
            <div class="services-card">
                <h1>Cultural Events</h1>
                <p>Our campus hosts vibrant cultural events, including festivals, music, dance, and theater performances. These events celebrate diversity, foster creativity, and provide students with opportunities to showcase their talents and traditions.</p>
                <img src="demo assets/Image-place-holder (2).jpg" alt="">
            </div>
            <div class="services-card">
                <h1>Student Rights</h1>
                <p>Students have the right to a safe, inclusive, and supportive learning environment. They are entitled to academic freedom, privacy, fair evaluation, and freedom of expression. They can access resources, seek guidance, and participate in decision-making processes. Respect, equality, and protection from discrimination are fundamental to their educational experience.</p>
                <img src="demo assets/Image-place-holder (3).jpg" alt="">
            </div>
            <div style="margin-top: 80px;" class="services-card">
                <h1>Disability Support</h1>
                <p>Disability Support ensures an inclusive campus by providing accommodations, assistive technology, and personalized support for students with disabilities. It promotes equal access to education, fostering independence and success. Services include accessible facilities, academic adjustments, and advocacy, ensuring every student can fully participate in learning and campus life without barriers.</p>
                <img src="demo assets/Image-place-holder.jpeg" alt="">
            </div>
            <div class="services-card">
                <h1>Health Services</h1>
                <p>Health Services provide medical care, wellness programs, and mental health support to ensure students' well-being. Services include routine check-ups, counseling, vaccinations, and emergency care. With professional staff and confidential support, students receive guidance on physical and mental health, promoting a healthier lifestyle and a balanced academic experience.</p>
                <img src="demo assets/Image-place-holder (4).jpg" alt="">
            </div>
            </div>
        </div>
    </main>


    <footer>
        <div class="footer-sec-1">
            <img style="width: 100%; margin-top: 30px;" src="assets/sppu_white_logo.png" alt="">
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