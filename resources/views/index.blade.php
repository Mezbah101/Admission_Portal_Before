<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Portal</title>
    <link rel="shortcut icon" href="logos/unilogo.png" type="image/x-icon">
    <!-- <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'> -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/frontend/CSS/style.css">
    <link rel="stylesheet" href="/frontend/CSS/nav.css">
    <link rel="stylesheet" href="/frontend/CSS/header.css">
    <link rel="stylesheet" href="/frontend/CSS/noticefaculty.css">
    <link rel="stylesheet" href="/frontend/CSS/progress.css">
    <script src="https://kit.fontawesome.com/69cdb25138.js" crossorigin="anonymous"></script>

</head>

<body>


    <!-- Heading Part  -->
    <header class="my-auto header">

        <div class="top-header">
            <ul>
                <li><a href=""><img src="logos/unilogo.png" alt=""></a></li>
                <li><a href="">
                        <h1>Institute of Communication Engineering (ICE)</h1> 
                        <a href=""><h3 class=" ani-text"> Admission Portal</h3>
                    </a>
                    </a></li>

                <li><a href="{{url('login')}}"> <button>Log in/Sign up <i
                                class="fa-solid fa-right-to-bracket"></i></button></a></li>


            </ul>

        </div>
        <!-- Navigation Part  -->

        <div class="top-nav">
            <nav>

                <ul>
                    <li> <a href="">Home</a></li>
                    <li><a href="#noticeid">Notices</a></li>
                    <li><a href="#facultyid"> Faculties</a> </li>
                    <li> <a href=" #applyid">How To Apply</a> </li>
                </ul>
            </nav>
        </div>


        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/frontend/images/campus new 5.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/frontend/images/campus new 2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/frontend/images/campus bup.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>


    <main>

        <section id="noticeid" class="notice-faculty">

            <div class="notice w-50">
                <h1 style="text-align: center;"> Notices</h1>
                <div class="col">
                    <div class="accordion" id="accordionPanelsStayOpenExample">

                        <!-- First accordion -->

                        <div class="accordion-item mx-5 my-3 shadow-lg border rounded">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    Faculty of science & Technology has published 2020-2021 admission circular.
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">

                                </div>
                            </div>
                        </div>

                        <!-- Second accordion -->

                        <div class="accordion-item mx-5 my-3 shadow-lg border rounded">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Faculty of science & Technology has published 2020-2021 admission circular.
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    Faculty of science & Technology has published 2020-2021 admission circular.
                                </div>
                            </div>
                        </div>

                        <!-- Third accordion -->

                        <div class="accordion-item mx-5 my-3 shadow-lg border rounded">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Faculty of science & Technology has published 2020-2021 admission circular.
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">

                                    Faculty of science & Technology has published 2020-2021 admission circular.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Fourth accordion -->

                        <div class="accordion-item mx-5 my-3 shadow-lg border rounded">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseFour">
                                    Faculty of science & Technology has published 2020-2021 admission circular.
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body">

                                    Faculty of science & Technology has published 2020-2021 admission circular.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            <div id="facultyid" class="faculty w-50">
                <h1 style="text-align: center;">Faculties</h1>

                <div class="card-group">
                    <div class="card">
                        <img src="/frontend/images/card-fst.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Facult of Science & Technology</h5>
                            <p class="card-text">Faculty of Science and Technology (FST) started as Faculty of Technical
                                and Engineering Studies (FTES) in 2012.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Updated</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="/frontend/images/card-fms.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Faculty of Medical Science</h5>
                            <p class="card-text">Faculty of Medical Science is a renowed faculty of this University</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Updated</small>
                        </div>
                    </div>
                    <div class="card">
                        <img src="images/card-fsss.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Faculty of Social Science</h5>
                            <p class="card-text">Faculty of Social Science is the oldest faculty of this University.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Updated</small>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <!-- Progress Bar of the account -->

        <section id="applyid">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <h1 id="heading">Steps of Application for Admission</h1>


                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong>SignIn</strong></li>
                                    <li id="personal"><strong style="color: #311B92;">Information</strong></li>
                                    <li id="image"><strong style="color: #311B92;">Image & Signature</strong></li>
                                    <li id="faculty"><strong style="color: #311B92;">Faculty Selection</strong></li>
                                    <li id="payment"><strong style="color: #311B92;">Payment</strong></li>

                                    <li id="confirm"><strong style="color: #59c939;">Finish</strong></li>
                                </ul>
                                <br>
                                <!-- fieldsets -->


                            </form>
                        </div>
                    </div>
                </div>
            </div>




        </section>

    </main>
    
    <footer>
        <section class="container">
            <div class="row row-cols-1 row-cols-lg-2 ">
                <div class="col">

                </div>
                <div class="col">
                    <p class="text-white text-end me-5">University of Atlantic</p>
                    <div class="d-flex app border rounded-5  ">

                        <div>


                            <p class="text-white fw-bold">Social links</p>
                            <small class="text-white fw-lighter  fs-6">Facebook</small>
                            <small class="text-white fw-lighter  fs-6">Twitter</small>
                            <small class="text-white fw-lighter  fs-6">Linkedin</small>

                        </div>

                    </div>
                </div>
            </div>

        </section>
    </footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>