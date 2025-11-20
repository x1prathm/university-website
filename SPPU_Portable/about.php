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
    <title>About</title>
    <link rel="stylesheet" href="styles/shared/utility.css">
    <link rel="stylesheet" href="styles/shared/nav.css">
    <link rel="stylesheet" href="styles/shared/footer.css">
    <link rel="stylesheet" href="styles/pages/about.css">
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
        <div class="our-school-container">
            <h1>OUR SCHOOL</h1>
            <p><b>Savitribai Phule Pune University</b>, one of the premier universities in India, is positioned in the North-western part of Pune city. It occupies an area of about 411 acres. It was established on 10th February, 1949 under the Poona University Act. The university houses 46 academic departments. It is popularly known as the 'Oxford of the East'. It has about 307 recognized research institutes and 612 affiliated colleges offering graduate and under-graduate courses.</p>
        </div>


        <div class="grid-container-1">
            <div>
                <img src="demo assets/2e2a49_d4fcf8dd8ce44a5ba1e1b9d034d8a43e~mv2.avif" alt="">
            </div>
            <div class="info">
                <h1>Principal's Message</h1>
                <p>Welcome to <b>UniPune</b>, a place of academic excellence and innovation. Our mission is to nurture young minds, foster critical thinking, and prepare students for global challenges. With a dedicated faculty and state-of-the-art facilities, we ensure holistic development. Join us in shaping a brighter future through knowledge and leadership.</p>
            </div>
        </div>
        <div class="grid-container-2">
            <div class="info">
                <h1>Vision & Values</h1>
                <ul>
                    <li>Be Kind</li>
                    <li>Be Respectful</li>
                    <li>Be Responsible</li>
                    <li>Work Hard</li>
                    <li>Have Fun</li>
                </ul>
            </div>
            <div>
                <img src="demo assets/2e2a49_0e7c5dac31934b1d8c9edc0aeb636dfb~mv2.avif" alt="">
            </div>
        </div>


        <div class="staff-directory">
            <div class="staff-directory-title">
                <h1>STAFF DIRECTORY</h1>
                <p>Our dedicated faculty members are the backbone of <b>UniPune</b>, committed to excellence in education and research. Explore our staff directory to connect with our passionate educators and leaders.</p>
            </div>
            <div class="staff-grid">
                <div class="card">
                    <img src="demo assets/vc.png" alt="Staff Photo">
                    <div class="name">Dr. Suresh Gosavi</div>
                    <div class="post">Vice-Chancellor</div>
                    <a href="mailto:johndoe@example.com" class="email">johndoe@example.com</a>
                </div>
                <div class="card">
                    <img src="demo assets/pro_vc1.jpg" alt="Staff Photo">
                    <div class="name">Dr. Parag Kalkar</div>
                    <div class="post">Pro Vice-Chancellor</div>
                    <a href="mailto:janesmith@example.com" class="email">janesmith@example.com</a>
                </div>
                <div class="card">
                    <img src="demo assets/Registrar_Jyoti bhakre.png" alt="Staff Photo">
                    <div class="name">Dr. Jyoti Bhakare</div>
                    <div class="post">Officiating Registrar</div>
                    <a href="mailto:janesmith@example.com" class="email">janesmith@example.com</a>
                </div>
                <div class="card">
                    <img src="demo assets/COE.jpg" alt="Staff Photo">
                    <div class="name">Mahesh Kakde</div>
                    <div class="post">Director</div>
                    <a href="mailto:janesmith@example.com" class="email">janesmith@example.com</a>
                </div>
                <div class="card">
                    <img src="demo assets/CMA_Charusheela _R_Gayake.jpg" alt="Staff Photo">
                    <div class="name">Charusheela Gayake</div>
                    <div class="post">Finance & Acoounts Officer</div>
                    <a href="mailto:janesmith@example.com" class="email">janesmith@example.com</a>
                </div>
                <div class="card">
                    <img src="demo assets/Prof.(Dr.) Devidas Golhar.png" alt="Staff Photo">
                    <div class="name">Dr. Devidas Golhar</div>
                    <div class="post">Member Secratory</div>
                    <a href="mailto:janesmith@example.com" class="email">janesmith@example.com</a>
                </div>
                <div class="card">
                    <img src="demo assets/Pramod patil.png" alt="Staff Photo">
                    <div class="name">Dr. Pramod Patil</div>
                    <div class="post">Dean of Science & Technology</div>
                    <a href="mailto:janesmith@example.com" class="email">janesmith@example.com</a>
                </div>
                <div class="card">
                    <img src="demo assets/Prabhakar Desai.png" alt="Staff Photo">
                    <div class="name">Dr. Prabhakar Desai</div>
                    <div class="post">Dean of Inter-Disciplinary Studies</div>
                    <a href="mailto:janesmith@example.com" class="email">janesmith@example.com</a>
                </div>
                <div class="card">
                    <img src="demo assets/10 (1).jpg" alt="Staff Photo">
                    <div class="name">Dr. Vijay Khare</div>
                    <div class="post">Dean of Humanities</div>
                    <a href="mailto:janesmith@example.com" class="email">janesmith@example.com</a>
                </div>
                <div class="card">
                    <img src="demo assets/Mithare.png" alt="Staff Photo">
                    <div class="name">Dr. Yashodhan Mithare</div>
                    <div class="post">Dean of Commerce & Management</div>
                    <a href="mailto:janesmith@example.com" class="email">janesmith@example.com</a>
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