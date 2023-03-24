<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="bootstrap-4.6.1/dist/css/bootstrap.css">
    <script src="bootstrap-4.6.1/dist/js/jquery.js"></script>
    <script src="bootstrap-4.6.1/dist/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="bootstrap-4.6.1\fontawesome-free-5.15.4-web\css\all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="VCSS/teamMembers.css">
    <style>
        .layout_padding {
            padding-top: 40px;
            padding-bottom: 0px;
        }

        hr {

            border: none;
            border-left: 1px solid hsla(200, 10%, 50%, 100);
            height: 100%;
            width: 1px;
        }

        body{
            background-color:#FFF1DC;
        }
    </style>
</head>

<body style=" font-family: 'Nunito', sans-serif; font-size:150%">


    <?php
    include "home_header.php";
    ?>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pic/charusat1.jpg" class="d-block w-100" alt="..." height="750">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style=>Charusat University</h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="pic/2.jpg" class="d-block w-100" alt="..." height="750">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>

                </div>
            </div>
            <div class="carousel-item">
                <img src="pic/3.jpg" class="d-block w-100" alt="..." height="750">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="justify-content-center layout_padding">

        <div class="container">
            <h1 class="alert text-center font-weight-bold " style="color: #f76d37;font-size: 60px;"> About</h1>
            <div class="row alert">
                <div class="col-md-5 ">
                    <div>
                        <h3 class="text-center font-weight-bold">Why India?</h3>
                        <ul>
                            <li>Experience "ऐक्यम्" (Unity) of diverse religions, cultures & cuisines</li>
                            <li>Spiritual nation with folkloric festivities</li>
                            <li>Key source of intellectual capital including IT & BPM industry</li>
                            <li>Hub of impact-driven research & Technology Transfer</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2">
                    <hr>
                </div>

                <div class="col-md-5">

                    <div>
                        <h3 class="text-center font-weight-bold">Why CHARUSAT?</h3>
                        <ul>
                            <li>The fountainhead of startups</li>
                            <li>Fatherland to numerous conscientious businessmen</li>
                            <li>Remarkable presence of MNCs providing ever increasing job opportunities</li>
                            <li>Undisputedly the only alcohol- and narcotic-free Gandhian state of India</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="layout_padding">
        <div class="container mt-5 mb-3">
            <h2 class="text-center font-weight-bold " style="color: #f76d37;font-size: 60px;"> Team Members </h2>
        </div>

        <div class="main">
            <div class="profile-card">
                <div class="img">
                    <img src="pic/mx.jpg" height="160px" width="160px">
                </div>
                <div class="caption">
                    <h3>Mayur Thakkar</h3>
                    <p>Senior App Developer</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="profile-card">
                <div class="img">
                    <img src="pic/dip.jpeg" height="160px" width="160px">
                </div>
                <div class="caption">
                    <h3>Deep Patel</h3>
                    <p>Full Stack Developer</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="profile-card">
                <div class="img">
                    <img
                        src="">
                </div>
                <div class="caption">
                    <h3>Viral Patel</h3>
                    <p>peon</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "home_footer.php";
    ?>
</body>

</html>