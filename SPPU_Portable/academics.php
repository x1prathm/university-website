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
    <title>Academics</title>
    <link rel="stylesheet" href="styles/shared/utility.css">
    <link rel="stylesheet" href="styles/shared/nav.css">
    <link rel="stylesheet" href="styles/shared/footer.css">
    <link rel="stylesheet" href="styles/pages/academics.css">
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
            <div class="banner-filter"><h1>Our Programs</h1></div>
        </div>
        <div class="academic-grid">
            <div class="grid-container">
                <!-- Generating 15 items dynamically -->
                <script>
                    const subjects = ["Math", "Science", "History", "English", "Physics", "Chemistry", "Biology", "Economics", "Geography", "Computer Science", "Philosophy", "Psychology", "Sociology", "Political Science", "Statistics"];
                    
                    subjects.forEach((subject, index) => {
                        document.write(`
                            <div class="grid-item">
                                <div class="number">${index + 1}</div>
                                <div class="line"></div>
                                <div class="subject">${subject}</div>
                                <button class="btn">View</button>
                            </div>
                        `);
                    });
                </script>
            </div>
        </div>
        <div class="academics-options">
            <h1>Our Academic Options</h1>
            <div class="grid-container">
                <div class="grid-item">
                    <div class="title-container">
                        <img src="assets/online-learning-01-stroke-rounded.svg" alt="">
                        <span>Online Education</span>
                    </div>
                    <p class="description">Our online education programs provide flexible, high-quality learning experiences. With expert faculty and interactive resources, students can enhance their knowledge, develop skills, and achieve academic success at their own pace, anytime and anywhere.</p>
                </div>
                <div class="grid-item">
                    <div class="title-container">
                        <img src="assets/shield-01-stroke-rounded.svg" alt="">
                        <span>Degrees</span>
                    </div>
                    <p class="description">Our degree programs offer comprehensive, industry-relevant education designed to equip students with essential skills and knowledge. With expert faculty and practical learning, graduates are prepared for successful careers and advanced studies in their chosen fields.</p>
                </div>
                <div class="grid-item">
                    <div class="title-container">
                        <img src="assets/certificate-01-stroke-rounded.svg" alt="">
                        <span>Certificates</span>
                    </div>
                    <p class="description">Our certificate programs provide specialized training for skill enhancement and career growth. Designed for flexibility, they offer practical knowledge, expert instruction, and industry relevance, helping students and professionals advance in their fields efficiently and effectively.</p>
                </div>
                <div class="grid-item">
                    <div class="title-container">
                        <img src="assets/globe-02-stroke-rounded.svg" alt="">
                        <span>Transfer Opportunity</span>
                    </div>
                    <p class="description">We offer seamless transfer opportunities, enabling students to continue their education at top institutions. With flexible credit transfer policies and academic support, students can pursue higher studies smoothly, maximizing their learning potential and career prospects.</p>
                </div>
                <div class="grid-item">
                    <div class="title-container">
                        <img src="assets/tv-02-stroke-rounded.svg" alt="">
                        <span>Career Training</span>
                    </div>
                    <p class="description">Our career training programs equip students with practical skills and industry knowledge for immediate employment. With expert guidance, hands-on learning, and job-focused courses, students gain the confidence and expertise needed to excel in their chosen careers.</p>
                </div>
                <div class="grid-item">
                    <div class="title-container">
                        <img src="assets/comment-02-stroke-rounded.svg" alt="">
                        <span>Community Opportunities</span>
                    </div>
                    <p class="description">We foster community engagement through volunteer programs, leadership initiatives, and networking events. Students can collaborate, develop skills, and make a meaningful impact while building strong connections that enhance both personal growth and professional opportunities.</p>
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