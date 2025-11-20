<?php
session_start();
error_reporting(0);
include('result/includes/config.php'); 
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
    <title>Home | UniPune</title>
    <link rel="stylesheet" href="styles/shared/nav.css">
    <link rel="stylesheet" href="styles/shared/utility.css">
    <link rel="stylesheet" href="styles/pages/home.css">
    <link rel="stylesheet" href="styles/shared/footer.css">
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
            <div class="title-box">
                <p>Back To University</p>
                <p>Welcome to all of our students</p>
                <button onclick="window.location.href='about.php';">Discover the University</button>
            </div>
        </div>

        <div class="why-sppu">
            <p>WHY UNIPUNE?</p>
            <p>We don't just give students an education and experiences that set them up for success in a career. We
                help them succeed in their career-to discover a field they're passionate about and dare to lead it.</p>
            <button onclick="window.location.href='academics.php';">Read More</button>
        </div>

        <div class="stats">
            <div class="established">
                <img src="assets/university-stroke-rounded.svg" alt="established-svg">
                <div>
                    <p>Established</p>
                    <p>in 1949</p>
                </div>
            </div>
            <div class="students-count">
                <img src="assets/students-stroke-rounded.svg" alt="students-count-svg">
                <div>
                    <p>Students</p>
                    <p>of 7,00,000+</p>
                </div>
            </div>
            <div class="courses-streams">
                <img src="assets/course-stroke-rounded.svg" alt="courses-streams-svg">
                <div>
                    <p>Courses & Streams</p>
                    <p>1500+</p>
                </div>
            </div>
            <div class="affiliations">
                <img src="assets/neural-network-stroke-rounded.svg" alt="affiliations-svg">
                <div>
                    <p>Affiliations</p>
                    <p>of 800+ Colleges & Institutions</p>
                </div>
            </div>
        </div>

        <div class="grid-container-1">
            <div>
                <img src="demo assets/2e2a49_c8de1e6e955d459aa01defe9f5971dad~mv2.jpg" alt="">
            </div>
            <div class="grid-container-info">
                <h1>Campus Life</h1>
                <p>Experience a vibrant campus life filled with academic excellence, cultural events, and student activities. From state-of-the-art facilities to engaging clubs, our university fosters learning, friendships, and personal growth.</p>
                <button onclick="window.location.href='campus.php';">Campus Information</button>
            </div>
        </div>
        <div class="grid-container-2">
            <div class="grid-container-info">
                <h1>Open Enrollment</h1>
                <p>I'm a paragraph. Click here to add your own text and edit me. It's easy. Just click “Edit Text” or
                    double click me to add your own content and make changes to the font.</p>
                <button>Apply Today</button>
            </div>
            <div>
                <img src="demo assets/2e2a49_aa886e73007945ad8869ba20d9771c41~mv2.jpg" alt="">
            </div>
        </div>

        <div class="latest-news">
            <h1 class="latest-news-title">
                LATEST NEWS
            </h1>
            <div class="center-box">
            <section class="py-5"> 
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="notice-board">
                    <h2 class="text-center">📢 Notice Board</h2>
                    <hr />
                    <div class="notice-container">
                        <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                            <ul class="notice-list">
                                <?php 
                                $sql = "SELECT * FROM tblnotice ORDER BY id DESC";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);

                                if($query->rowCount() > 0) {
                                    foreach($results as $result) {   
                                ?>                      
                                <li class="notice-item">
                                    <a href="result/notice-details.php?nid=<?php echo htmlentities($result->id);?>" target="_blank">
                                        <?php echo htmlentities($result->noticeTitle); ?>
                                    </a>
                                </li>
                                <?php }} ?>
                            </ul>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            </div>
        </div>

        <div class="life-culture">
            <h1>LIFE & CULTURE</h1>
            <div class="life-culture-grid">
                <!-- 12 grid items -->
                <div class="life-culture-grid-item"><img src="demo assets/01.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/02.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/03.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/04.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/05.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/06.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/07.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/08.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/09.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/10.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/11.jpg" alt=""></div>
                <div class="life-culture-grid-item"><img src="demo assets/12.jpg" alt=""></div>
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