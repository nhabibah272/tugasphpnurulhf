<!DOCTYPE html>
<html>
    <head>
        <title>Portofolio Website</title>
        <link rel="stylesheet" type="text/css" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
        <!----hero section start---->

        <div class="hero">
            <nav>
                <h2 class="logo">Portofo<span>lio</span></h2>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Me</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Skills</a></li>
                    <li><a href="#">Contact Me</a></li>
                    <li><a href="logout.php">Logout</a></li>

                </ul>
                <a href="login.php" class="btn">Login</a>
            </nav>

            <div class="content">
                <h4>Hello! My Name Is</h4>
                <h1>Nurul Habibah Febrianti</h1>
                <h3>I'am a Student.</h3>
                <div class="newslatter">
                    <form>
                        <input type="email" name="email" id="mail" placeholder="Enter Your Email">
                        <input type="submit" name="submit" value="Let's Start">
                    </form>
                </div>
            </div>
        </div>
    
    <!----About Section Start---->
    <section class="about">
        <div class="main">
            <img src="image/main-photo.jpeg" width="350px" height="450px">
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Short Story</h5>
                <p>I am a 2nd semester student at one of the college in East Kalimantan. I took the field of software engineering technology studies, you could say I'm still relatively new to the world of programming because before that I went to high school in pharmacy. The reason I chose this field of study is very simple, namely because the cost of continuing to study health is very expensive, even though I think it's okay to try new things and now I think I'm starting to feel comfortable with this world of programming even though I'm still a little confused yeah. I am the first child in my family, I was born in the city of Madiun, East Java. I have several hobbies, such as playing games, cooking, reading fiction or fantasy novels, and listening to music. I also have a male cat at home which I named white, he's really handsome hahaha.</p>
            </div>
        </div>
    </section>

    <!------service section start------>
    <div class="service">
        <div class="tittle">
            <h2>Our Service</h2>
        </div>

        <div class="box">
            <div class="card">
                <i class="fa solid fa-bars"></i>
                <h5>K-POP Merchandise</h5>
                <div class="pra">
                    <p>Sell various K-Pop idol Merchandise from NCT, EXO, BLACKPINK, BTS, New Jeans, Seventeen and more again.</p>

                    <p stlye="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="fa-regular fa-user"></i>
                <h5>K-POP Merchandise</h5>
                <div class="pra">
                    <p>Sell various K-Pop idol Merchandise from NCT, EXO, BLACKPINK, BTS, New Jeans, Seventeen and more again.</p>

                    <p stlye="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="fa-regular fa-bell"></i>
                <h5>K-POP Merchandise</h5>
                <div class="pra">
                    <p>Sell various K-Pop idol Merchandise from NCT, EXO, BLACKPINK, BTS, New Jeans, Seventeen and more again.</p>

                    <p stlye="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-----Contact Me--->
    <div class="contact-me">
        <p>Get Your Merchandise Now</p>
        <a class="button-two" href="#">Check Out</a>
    </div>
    

    <!-----Footer Start----->
    <footer>
        <p>Nurul Habibah Febrianti</p>
        <p>For more idol merchandise, let's check on our social media:</p>
        <div class="social">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        </div>
        <p class="end">Copyright &copy; 2023, By Nurul Habibah Febrianti</p>
    </footer>
    </body>
</html> 