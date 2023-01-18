<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<DOCTYPE.html>
    <html lang="en">

    <head>

        <title>Jamkabhet</title>
        <link rel="shortcut icon" type="image/x-icon" href="">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
        />

        <link rel="stylesheet" href="assets/css/style.css">

    </head>

    <body>
        <section>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class=" container-fluid background-image">
                        <img src="assets/images/navbar.jpg" alt="navbar" width="10%" height="auto" class="top-nav-img">

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#gallery">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#aboutt">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <a href="logout.php" class="button button1" role="button">logout</a>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
                                  </li>
                            </form>
                        </div>

                        <div class="caption d-flex">
                            <div class="container">
                                <div class="col-md-8 col-sm-12">
                                    <h3>YOUR PERFECT BREAKFAST</h3>
                                    <h1>The best dinning quality can be here too!</h1>
                                    <button class="button button2">Discover menu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </section>
        <section class="foods" id="menu">
            <div class="foods-container">
                <div class="row slide">
                    <div class="col-lg-3">
                        <div class="heading mb-3">
                            <span class="subtitle">BE TASTY FOOD TODAY!</span>

                            <h2>Today's
                                <strong class="text-danger">Special</strong>
                            </h2>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-breakfast-tab" data-bs-toggle="pill" data-bs-target="#v-pills-breakfast" type="button" role="tab" aria-controls="v-pills-breakfast" aria-selected="true">Breakfast</button>
                                <button class="nav-link" id="v-pills-lunch-tab" data-bs-toggle="pill" data-bs-target="#v-pills-lunch" type="button" role="tab" aria-controls="v-pills-lunch" aria-selected="false">Lunch</button>
                                <button class="nav-link" id="v-pills-dinner-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dinner" type="button" role="tab" aria-controls="v-pills-dinner" aria-selected="false">Dinner</button>
                                <button class="nav-link" id="v-pills-drinks-tab" data-bs-toggle="pill" data-bs-target="#v-pills-drinks" type="button" role="tab" aria-controls="v-pills-drinks" aria-selected="false">Drinks</button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-breakfast" role="tabpanel" aria-labelledby="v-pills-breakfast-tab">
                                    <h2 class="text-danger">Breakfast</h2>
                                    <div class="breakfasts">
                                        <img src="assets/images/today_special/breakfast.jpg" width="400px" height="280px" class="one">
                                        <img src="assets/images/today_special/egg.jpg" width="400px" height="280px" class="two">
                                        <img src="assets/images/today_special/fork.webp" width="400px" height="280px" class="three">
                                        <img src="assets/images/today_special/brfst.jpg" width="400px" height="280px" class="four">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-lunch" role="tabpanel" aria-labelledby="v-pills-lunch-tab">
                                    <h2 class="text-danger">Lunch</h2>
                                    <div class="breakfasts">
                                        <img src="assets/images/today_special/lunch1.jpg" width="400px" height="280px" class="one">
                                        <img src="assets/images/today_special/lunch2.jpg" width="400px" height="280px" class="two">
                                        <img src="assets/images/today_special/lunch3.jpg" width="400px" height="280px" class="three">
                                        <img src="assets/images/today_special/lunch5.jpg" width="400px" height="280px" class="four">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-dinner" role="tabpanel" aria-labelledby="v-pills-dinner-tab">
                                    <h2 class="text-danger">Dinner</h2>
                                    <div class="breakfasts">
                                        <img src="assets/images/today_special/dinner1.jpg" width="400px" height="280px" class="one">
                                        <img src="assets/images/today_special/dinner2.jpg" width="400px" height="280px" class="two">
                                        <img src="assets/images/today_special/dinner3.jpg" width="400px" height="280px" class="three">
                                        <img src="assets/images/today_special/dinner5.jpg" width="400px" height="280px" class="four">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-drinks" role="tabpanel" aria-labelledby="v-pills-drinks-tab">
                                    <h2 class="text-danger">Drinks</h2>
                                    <div class="breakfasts">
                                        <img src="assets/images/today_special/drinks1.jpg" width="400px" height="280px" class="one">
                                        <img src="assets/images/today_special/drinks2.jpg" width="400px" height="280px" class="two">
                                        <img src="assets/images/today_special/drinks3.jpg" width="400px" height="280px" class="three">
                                        <img src="assets/images/today_special/drinks5.jpg" width="400px" height="280px" class="four">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <selection id="gallery">
            <div class=" container-fluid background-image-two">
                <h2 class="text-center text-light">Jamkabhet Special</h2>
                <h3 class="text-center text-light">We've got something special for you.</h3>
            </div>
        </selection>
        <selection>
            <div class="row special-wrapper">
                <div class="col-md-4 col-sm-6">
                    <div class="main-thumb">
                        <img src="assets/images/menus/chicken1.jpg" alt="">
                        <div class="thumb-info">
                            <h5 class="thumb-title">Chicken</h5>
                            <p class="thumb-price">Rs. 200</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="main-thumb">
                        <img src="assets/images/menus/chicken2.jpg" alt="">

                        <div class="thumb-info">
                            <h5 class="thumb-title">Jamkabhet Special</h5>
                            <p class="thumb-price">Rs. 200</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="main-thumb">
                        <img src="assets/images/menus/chicken3.jpg" alt="">

                        <div class="thumb-info">
                            <h5 class="thumb-title ">Jamkabhet Special</h5>
                            <p class="thumb-price ">Rs. 200</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="main-thumb">
                        <img src="assets/images/menus/chicken5.jpg" alt="">

                        <div class="thumb-info">
                            <h5 class="thumb-title">Chicken Biriyani</h5>
                            <p class="thumb-price">Rs. 200</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="main-thumb">
                        <img src="assets/images/menus/chicken6.jpg" alt="">

                        <div class="thumb-info">
                            <h5 class="thumb-title">Jamkabhet Special</h5>
                            <p class="thumb-price">Rs. 200</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="main-thumb">
                        <img src="assets/images/menus/chicken7.jpg" alt=" ">

                        <div class="thumb-info ">
                            <h5 class="thumb-title ">Jamkabhet Special</h5>
                            <p class="thumb-price ">Rs. 200</p>
                        </div>
                    </div>
                </div>
            </div>
        </selection>
        <div class=" container-fluid image-three">
            <div class="container-fluid  ">
                <p class="paragraph text-center text-secondary ">Costumer testimonial</p>
                <h2 class="heading text-center text-white "> What Consumer"s Say?</h2>
            </div>
        </div>
        <section class="wrapper" id="aboutt">
            <div class="second-last container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="for-paragraph">
                                <p>Absolutely amazing! The place is beautiful and staff are supper friendly and food is delicious.I love that you get a lot of food as well for the price.It 's definitely not like other expensive restaurants and you only get
                                    a small amount of food.Thankyou!!!</p>
                                <img src="assets/images/today_special/people1.jpg" width="100px" height="100px" class="peoples">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="for-paragraph">
                                <p> We just want to thank you and your staff for a job well done on Saturday. The food was superb and the staff were so helpful and professional. We have had really positive feedback about the food and everything ran perfectly.</p>
                                <img src="assets/images/today_special/people2.jpg" width="100px" height="100px" class="peoples">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="for-paragraph">
                                <p> Thank you for your food. Its so fresh and delicious and it takes the work and guess-work out of my busy life when it comes to eating. Awesome Foods is AWESOME! You have a customer for life! </p>
                                <img src="assets/images/today_special/people3.jpg" width="100px" height="100px" class="peoples">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
        <div class=" container-fluid image-four">
            <div class="container-fluid  ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="left">
                            <img src="assets/images/navbar.jpg" alt="logo" width="39%" height="auto" class="nav-img">
                            <p>Jamkabhet Restaurant and bar is a Nepali Restaurant which provides quality foods and services to the guests.</p>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="middle ">
                            <h6 class="contact">Contact</h6>

                            <p class="icon"><i class="fa-solid fa-house-chimney"> </i> Kathmandu-Anamnagar
                            </p>


                            <p class="icon"><i class="fa-solid fa-envelope"> </i> info@jamkabhetrestaurant.com
                            </p>


                            <p class="icon"><i class="fa-solid fa-phone"> </i> +9779801886202
                            </p>


                            <p class="icon"><i class="fa-solid fa-tty"> </i> 01-7705699
                            </p>

                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="right ">
                            <h6 class="opening">
                                opening hours
                            </h6>
                            <table class="table">
                                <tbody class="tbody">
                                    <td class=" td ">Mon-Fri:</td>
                                    <td class="td ">9am-9:30pm</td>
                                    </tr>
                                    <tr>
                                        <td class="td ">Sat-Sun:</td>
                                        <td class="td ">9am-9:30pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ">
                        <p class=" text-white mt-5"> <i class="fa-thin fa-copyright"></i>2022 Copyright
                            <span class="text-danger">Jamkahet Restaurants and bar</span>, All Rights Reserved.
                        </p>

                    </div>

                    <div class="col-md-4 ">
                        <div class="social-media text-white mt-5">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-google"></i>
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js ">
            < script src = "https://kit.fontawesome.com/d4a4c39a49.js "
            crossorigin = "anonymous " >
        </script>
        </script>
    </body>

    </html>