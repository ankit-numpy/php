<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Tooth</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,500;1,700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

:root{
    --black: #1B1722;
    --white : #F0F0F0;
    --box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
*{
    font-family: "AntiqueOli";
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}
a{
    text-decoration: none;
}
html{
    font-size: 62.5%;   
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}
html::-webkit-scrollbar{
    width: .8rem;
}
html::-webkit-scrollbar-track{
    background: transparent;
}
html::-webkit-scrollbar-thumb{
    background-color: var(--white);
    border-radius: 5rem;
}

/*HEADER START*/

.header{
    top: 0;right: 0;left: 0;
    background-color: #ddc0ea;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    padding: 0.5% 7%;
    z-index: 999;
}

.header .navbar a{
    font-size: 2rem;
    margin-right: 3rem;
    color: var(--black);
    font-weight: bold;
    font-family: 'Ubuntu', sans-serif;
    font-weight: 400;
}
.header .navbar a:hover{
    padding-bottom:0.7rem;

}
.header div.logoContent{
    background: #ddc0ea;
    border-radius: 35%;
}

.header .logoContent img {
	opacity: 1;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
div.logoContent:hover img {
	opacity: .5;
}
#order{
    background-color: black;
    color:white;
    height: 50px;
    width:170px;
    font-size: 1.8em;
    font-weight: 700;
    font-family: 'Ubuntu', sans-serif;
}

#order:hover{
    background-color: #92dfc2;
    color:black;
}

/*HEADER END*/

/*carousel starts */

.carousel-control-prev-icon, .carousel-control-next-icon
{
    width: 50px;
    height: 50px;
    left: 0;
    z-index: 998;
}
    
section.home{
    margin-top:40px;
}
/*
.home div.overlay {
    position: fixed;
    z-index:1;
    top:105px;
    bottom: 0;
    right:0;
    left:0;
  }

.home .overlay img{
    width:25%;
    height: auto;
}
*/

/*carousel ends*/

/*ABOUT US START*/

#about {
    padding: 5% 25%;
    font-family: "AntiqueOli";
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #92dfc2;
}

.about h1.heading{
    font-family: "AntiqueOli";
    font-size: 3.5em;
    color: #000;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

.content p{
    font-family: 'Ubuntu', sans-serif;
    font-size:1.5em;
    font-weight: 300;
}

.content p:nth-of-type(1){
    margin-top:5%;
}
/*ABOUT US END*/

/*best sellers START*/

#offers{
    background-color: #9584c5;
    padding: 5% 10%;
    display:flex;
    flex-direction: column;
}

.box1 img, .box2 img, .box3 img{
    width:100%;
    height: auto;
    align-self: center;
    margin:1em 0px 1em 0px;
    border-radius:1.3em;
}

.offers h1{
    align-self: center;
    font-size:5em;
    font-family: 'Edu SA Beginner', cursive;
    margin-bottom:5%;
}

div.box-container{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

div.box{
    display:flex;
    flex-direction: column;
    width: 80%;
    height: 250px;
}

div.row1, div.row2{
    display: flex;
}

.row1 div.box {
    margin-bottom: 60px;
}

div.box1, div.box2, div.box3{
    display: flex;
    flex-direction: column;
    background: white;
    justify-content: center;
    align-items: center;
    width:100%;
    flex:1;
    border-radius:1.3em;
    background-color: #9584c5;
}

.box h3{
    font-family: 'Inconsolata', monospace;
    font-size: 2em;
}

div.box2{
    margin: 0em 2.5em 3em 2.5em;
}

/*best sellers end*/

/*gallery start*/
section.gallery {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    padding:4% 7% 7% 7%;
    background-color: #ffc547;
    
} 

.gallery h1 {
    align-self: center;
    font-size:3.5em;
    font-family: 'Edu SA Beginner', cursive;
    margin-bottom:5%;
    font-weight:500 ;
}

.gallery .gallery-container{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width:100%;
  }

  div.row1P, div.row2L, div.row3P, div.row4L{
    display: flex;
    width:100%;
    height:auto;
  }
  
  .gallery .gallery-container .box{
    height: 40rem;
    position: relative;
    overflow: hidden;
  }
  
  .gallery .gallery-container .box img{
    height: 100%;
    width: 100%;
    object-fit: cover;
  }
  
  .gallery .gallery-container .box:hover img{
    transform: scale(1.1);
  }

/*gallery end*/

/*newsletter start*/
.newsletter{
    background: url(images/parallax.jpg) no-repeat;
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}
.newsletter form{
    max-width: 45rem;
    text-align: center;
    padding: 5rem 0;
    position: relative;
    left:30%;
}
.newsletter form h3{
    font-size: 3rem;
    color: var(--white);
    padding-bottom: .7rem;
}
.newsletter form .box{
    width: 100%;
    margin: .7rem 0;
    padding: 1rem 1.2rem;
    color: var(--black);
    border-radius: .5rem;
}
.newsletter form .box2{
    width: 30%;
    font-size: 1.5rem;
    margin-top: 1rem;
    padding: .5rem .5rem;
    color: var(--black);
    background: var(--white);
    border-radius: 3 rem;
    cursor:pointer;
}
.newsletter form .box2:hover{
    color: var(--white);
    background-color: var(--black);
    outline: .1rem solid var(--white);
}

/*newsletter end*/

/*footer start*/
.footer {
    background: url(images/backGround.png) no-repeat;
    background-size: cover;
    background-position: center center;
}
.footer div.box-container{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
    padding: 2rem 4rem;
}
.footer .box-container .mainBox .content h1{
    font-size: 3rem;
    font-weight: 600;
    color: var(--black);
    padding:1rem 0;
}

.footer div.mainBox{
    width: 34%;
}
.footer .box-container .mainBox p{
    font-size: 1.7rem;
    line-height: 1.3;
}

.footer .box-container .mainBox iframe{
    width:70%;
    height: auto;
    margin-top:1rem ;
}

.footer .box-container div.box{
    width:25%;
}
.footer .box-container .box h3{
    font-size: 2.2rem;
    color: var(--black);
    padding: 1rem 0;
}
.footer .box-container .box a{
    display: block;
    font-size: 1.6rem;
    color: var(--black);
    padding: 1rem 0;
}
.footer .box-container .box a i{
    padding-right: .5rem;
    color: var(--black);
}
.footer .box-container .box a:hover i{
    padding-right: 2rem;
}

.footer .share{
    padding: 2rem 50rem;
    text-align: center;
    display: flex;
    justify-content: space-around;
}
.footer .share a{
    height: 4rem;
    width: 4rem;
    line-height: 4rem;
    font-size: 2rem;
    color: var(--white);
    background: var(--black);
    margin: 0 .3rem;
    border-radius: 50%;

}
.footer .share a:hover{
    background: var(--white);
    color: var(--black);
}
.footer .credit{
    font-size: 2rem;
    padding-bottom: 2rem;
    color: var(--black);
    text-align: center;
    
}

/*footer end*/
</style>
</head>

<body>
    <header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="images/logo4-fotor-2023073114331.png" alt=""></a>
        </div>

        <nav class="navbar">
            <a href="#home">HOME</a><span>&emsp;&emsp;</span>
            <a href="#about">ABOUT US</a><span>&emsp;&emsp;</span>
            <a href="#offers">OFFERS</a><span>&emsp;&emsp;</span>
            <a href="#gallery">GALLERY</a><span>&emsp;&emsp;</span>
            <a href="#contact">CONTACT</a><span>&emsp;&emsp;</span>
        </nav>

        <a href="menu.php"><button id="order">Order Online</button></a>

    </header>
    <section class="home" id="home">

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img1/mainDonut.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img1/cheesecake.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img1/colourful.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img1/manyDonuts.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img1/strawberry.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img1/tart.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!--<div class="overlay">
            <img src="./images/design.png" alt="">
        </div>-->

    </section>

    <section class="about" id="about">

        <h1 class="heading">🍩 The SWEET TOOTH Story 🍩</h1>

        <div class="content">
            <p>Sweet Tooth Bakery was founded in 2015 by Mumbai native, Priya Kapoor. Priya had always loved baking,
                and after moving to the United States, she was inspired by the vibrant Indian-American community in
                New York City. She wanted to create a bakery that would celebrate the flavors of India, while also
                using the best local ingredients.</p>

            <p>Priya started Sweet Tooth Bakery by selling her pastries at farmers markets. Her sweet treats were a
                hit, and she quickly outgrew her home kitchen. In 2016, she opened her first brick-and-mortar shop
                in Brooklyn. The bakery has since expanded to two other locations in Manhattan.</p>

            <p>Sweet Tooth Bakery is known for its delicious Indian-inspired pastries, such as gulab jamun donuts,
                rosewater pistachio macarons, and cardamom chai lattes. The bakery also uses local, seasonal
                ingredients whenever possible.</p>

            <p>Priya is passionate about using her baking skills to share her love of Indian culture with others.
                She believes that food is a powerful way to bring people together, and she hopes that Sweet Tooth
                Bakery will become a gathering place for the Indian-American community in New York City.</p>
        </div>

    </section>

    <section class="offers" id="offers">
        <h1>😍Our BestSellers😍</h1>

        <div class="box-container">

            <div class="row1">
                <div class="box box1">

                    <img src="images/bestSellers/belgiumPastry.jpg" alt="">

                    <h3>Belgium Chocolate Pastry</h3>
                </div>

                <div class="box box2">

                    <img src="images/bestSellers/apple pie.jpg" alt="">

                    <h3>Apple Pie</h3>
                </div>

                <div class="box box3">

                    <img src="images/bestSellers/chocoMint.jpg" alt="">

                    <h3>Mint Chocolate Cupcake</h3>
                </div>
            </div>

            <div class="row2">
                <div class="box box1">
                    <img src="images/bestSellers/cheesecake.jpg" alt="">

                    <h3>Blueberry Cheescake Slice</h3>
                </div>

                <div class="box box2">

                    <img src="images/bestSellers/jar.jpg" alt="">

                    <h3>Truffle Chocolate Jar</h3>
                </div>

                <div class="box box3">

                    <img src="images/bestSellers/raspberry pie.jpg" alt="">

                    <h3>Raspberry Tart</h3>
                </div>

            </div>



        </div>

    </section>

    <section class="gallery" id="gallery">

        <h1 class="heading">🎉Visit our Bakery🎉</h1>

        <div class="gallery-container">

            <div class="row1P">
                <a href="./cafe portrait/1.jpg" class="box">
                    <img src="./cafe portrait/1.jpg" alt="">
                </a>

                <a href="./khana portrait/1.jpg" class="box">
                    <img src="./khana portrait/1.jpg" alt="">
                </a>

                <a href="./cafe portrait/2.jpg" class="box">
                    <img src="./cafe portrait/2.jpg" alt="">
                </a>

                <a href="./khana portrait/2.jpg" class="box">
                    <img src="./khana portrait/2.jpg" alt="">
                </a>

                <a href="./cafe portrait/3.jpg" class="box">
                    <img src="./cafe portrait/3.jpg" alt="">

                </a>
            </div>

            <div class="row2L">
                <a href="./cafe landscape/1.jpg" class="box">
                    <img src="./cafe landscape/1.jpg" alt="">

                </a>


                <a href="./khana landscape/1.jpg" class="box">
                    <img src="./khana landscape/1.jpg" alt="">

                </a>

                <a href="./cafe landscape/2.jpg" class="box">
                    <img src="./cafe landscape/2.jpg" alt="">

                </a>

                <a href="./khana landscape/2.jpg" class="box">
                    <img src="./khana landscape/2.jpg" alt="">

                </a>
            </div>

            <div class="row3P">

                <a href="./khana portrait/3.jpg" class="box">
                    <img src="./khana portrait/3.jpg" alt="">
                    <div class="icons"><i class="fas fa-plus"></i></div>
                </a>

                <a href="./cafe portrait/4.jpg" class="box">
                    <img src="./cafe portrait/4.jpg" alt="">

                </a>

                <a href="./khana portrait/4.jpg" class="box">
                    <img src="./khana portrait/4.jpg" alt="">

                </a>

                <a href="./cafe portrait/5.jpg" class="box">
                    <img src="./cafe portrait/5.jpg" alt="">

                </a>

                <a href="./khana portrait/5.jpg" class="box">
                    <img src="./khana portrait/5.jpg" alt="">

                </a>
            </div>

            <div class="row4L">
                <a href="./khana landscape/3.jpg" class="box">
                    <img src="./khana landscape/3.jpg" alt="">

                </a>

                <a href="./cafe landscape/4.jpg" class="box">
                    <img src="./cafe landscape/4.jpg" alt="">

                </a>

                <a href="./khana landscape/4.jpg" class="box">
                    <img src="./khana landscape/4.jpg" alt="">

                </a>

                <a href="./cafe landscape/5.jpg" class="box">
                    <img src="./cafe landscape/5.jpg" alt="">
                </a>
            </div>

        </div>

    </section>

    <!-- parallax -->

    <section class="newsletter">
        <form action="">
            <h3>subscribe for latest update and Offers</h3>
            <div class="email">
                <input type="email" name="" placeholder="enter your email" id="" class="box">
                <input type="button" value="subscribe" class="box2">
            </div>
        </form>
    </section>

    <footer class="footer" id="contact">
        <div class="box-container">
            <div class="mainBox">
                <div class="content">
                    <h1 class="logoName">Address</h1>
                </div>

                <p> 2025 M Street, Northwest, NewYork, USA, 20036
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.7895042410264!2d-77.04832742534211!3d38.9059286462028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7b792cd88c7%3A0x9cb5cb1e160248ba!2s2025%20M%20St%20NW%2C%20Washington%2C%20DC%2020036%2C%20USA!5e0!3m2!1sen!2sin!4v1691041361862!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>


            </div>
            <div class="box">
                <h3>Quick link</h3>
                <a href="#"> <i class="fa fa-arrow-right"></i>Home</a>
                <a href="#"> <i class="fa fa-arrow-right"></i>product</a>
                <a href="#"> <i class="fa fa-arrow-right"></i>gallery</a>
                <a href="#"> <i class="fa fa-arrow-right"></i>offers</a>
            </div>
            <div class="box">
                <h3>Extra link</h3>
                <a href="#"> <i class="fa fa-arrow-right"></i>order item</a>
                <a href="#"> <i class="fa fa-arrow-right"></i>privacy policy</a>
                <a href="#"> <i class="fa fa-arrow-right"></i>payment method</a>
                <a href="#"> <i class="fa fa-arrow-right"></i>our services</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fa fa-phone"></i>+91 9873025515</a>
                <a href="#"> <i class="fa fa-envelope"></i>sweet_tooth@gmail.com</a>

            </div>

        </div>
        <div class="share">
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-pinterest"></a>
        </div>


        <div class="credit">
            Powered by BentoBox
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>