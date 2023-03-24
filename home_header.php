<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .nav-c {
            color: #E8D5C4;
        }

        .nav>li>a:hover {
            color: #FAAB78;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg p-4" style="background-color: #3A98B9">
        <div class="navbar-brand">
            <div class="logo "><a href="index.html"><img class="rounded-circle" src="pic/logo.png" height="70px"
                        width="70px"></a></div>
        </div>
        <button type="button" class="btn navbar-toggler" data-toggle="collapse" data-target="#mymenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="mymenu">

            <ul class="nav m-auto ">
                <li class="nav-item">
                    <a class="nav-link nav-c " href="home_page.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-c" href="About.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-c" href="Contactus.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-c " href="#">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-c" href="#">Survay</a>
                </li>

            </ul>



        </div>

        <div class="dropdown dropleft ml-auto ">
            <a class="btn btn-outline-light " type="button" data-toggle="dropdown">
                <span class="fa fa-user fa-2x fa-fade" style="color:#E8D5C4"></span></a>
            <div class="dropdown-menu">
                <div class="dropdown-item-text text-white" style="background-color: #3A98B9">Student</div>
                <a class="dropdown-item" href="StudentLogin.php">
                    <span class="fas fa-sign-in-alt"></span>&nbsp;&nbsp;Login</a>
                <a class="dropdown-item" href="./StudentRegistration.php">
                    <span class="fas fa-sign-out-alt"></span>&nbsp;&nbsp;Sign Up</a>
                <div class="dropdown-item-text text-white" style="background-color: #3A98B9">Company</div>
                <a class="dropdown-item" href="CompanyLogin.php">
                    <span class="fas fa-sign-in-alt"></span>&nbsp;&nbsp;Login</a>
                <a class="dropdown-item" href="CompanyRegistration.php">
                    <span class="fas fa-sign-out-alt"></span>&nbsp;&nbsp;Sign Up</a>
                <div class="dropdown-item-text text-white" style="background-color: #3A98B9">Place_Officer</div>
                <a class="dropdown-item" href="PlacementOfficerLogin.php">
                    <span class="fas fa-sign-in-alt"></span>&nbsp;&nbsp;Login</a>
                    <div class="dropdown-item-text text-white" style="background-color: #3A98B9">Admin</div>
                <a class="dropdown-item" href="Admin_Login.php">
                    <span class="fas fa-sign-in-alt"></span>&nbsp;&nbsp;Login</a>
            </div>
            </div>
            
        </div>


    </nav>
</body>

</html>