<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Epiko ni Labaw Donggon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">

    <!-- Include Bootstrap JS -->
</body>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
<?php
    require_once 'connection.php';
    require_once 'character.php';
    require_once 'asset.php';
    require_once 'location.php';
$db = new DatabaseConnection("localhost", "root", "", "db_labawdongon");
$character = new Character($db);
$asset = new Asset($db);
$location = new Location($db);


// Create an instance of the Product class and inject the database connection
?>
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
    <a href="index.html" class="navbar-brand ml-lg-3">
        <h1 class="m-0 display-5"><span class="text-primary">Labaw</span>Donggon</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
        <div class="navbar-nav ml-auto py-0">
            <a href="#home" class="nav-item nav-link active">Home</a>
            <a href="#about" class="nav-item nav-link">About</a>
            <a href="#character" class="nav-item nav-link">Characters</a>
            <a href="#portfolio" class="nav-item nav-link">Assets</a>
            <a href="#location" class="nav-item nav-link">Settings</a>
            <a href="#developers" class="nav-item nav-link">Developers</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->



   <!-- Video Modal Start -->
   <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

<!-- Header Start -->
<div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                <img class="img-fluid w-100 rounded-circle shadow-sm" src="img/labawcrop.png" alt="">
            </div>
            <div class="col-lg-7 text-center text-lg-left">
                <h3 class="text-white font-weight-normal mb-3">Epikong Bisaya</h3>
                <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">Labaw Donggon</h1>
                <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                <h3 class="text-white font-weight-normal mb-3">Developers</h3>
                <div class="typed-text d-none">Tyron Lastimosa, Artemio III E. Lorredo, John Eris Malabanan</div>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://epikonilabawdonggon.netlify.app/" data-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Game?</h5>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- About Start -->
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center mb-3">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">About</h1>
            <h1 class="position-absolute text-uppercase text-primary text-center">About Epiko ni Labaw Donggon</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img class="img-fluid rounded w-100" src="img/epiko.JPG" alt="">
            </div>
            <div class="col-lg-7">
                <p><b>Labaw Donggon</b> is one of the most renowned epics in Philippine literature, originating from the Visayas region. It is part of the Hinilawod, a long epic poem orally transmitted by the Sulod people of Central Panay. This epic is a vibrant tapestry of ancient beliefs, customs, and adventures that reflect the cultural heritage and mythology of the Visayan people.</p>

                <div id="accordion">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between pointer-cursor" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
                            <i class="fas fa-chevron-down ml-auto"></i> <span>Storyline</span> 
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                The epic narrates the adventures of Labaw Donggon, a demigod born to the goddess Alunsina and the mortal Datu Paubari. Gifted with extraordinary strength and prowess, Labaw Donggon embarks on quests for marriage, facing numerous challenges and adversaries along the way.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header d-flex justify-content-between" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h5 class="mb-0">
                            <i class="fas fa-chevron-down ml-auto"></i> <span>Themes</span>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Themes of bravery, love, loyalty, and the struggle between good and evil are prevalent throughout the narrative, reflecting the cultural values and worldview of the ancient Visayan people.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header d-flex justify-content-between" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h5 class="mb-0">
                            <i class="fas fa-chevron-down ml-auto"></i>  <span>Cultural Significance</span> 
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Labaw Donggon serves as a vital cultural artifact, preserving the mythology and heritage of the Visayan people. Its oral transmission highlights the importance of storytelling in passing down traditions and values through generations.
                            </div>
                        </div>
                    </div>
                </div>

                <a href="https://www.padayonwikangfilipino.com/labaw-donggon-epikong-bisaya/" class="btn btn-outline-primary mt-3">Know more about this Epiko</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


    <!-- Characters Start -->
<div><?php $character->getCharInfo();?></div>
                
    <!--Characters End -->

<!--  Assets Start -->
    <div><?php $asset->getAssets();?></div>
    <!-- Assets End -->

    <!-- Settings Start-->
    <div><?php $location->getLocations();?>
<!-- Map Modal -->
<div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mapModalLabel">Full Size Map</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="fullSizeMap" class="img-fluid" src="" alt="">
            </div>
        </div>
    </div>
</div>
</div>
    <!-- Settings End-->
<!-- Developers Start-->
    <div class="container-fluid pt-5" id="developers">
                <div class="container">
                    <div class="position-relative d-flex align-items-center justify-content-center">
                        <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Devs</h1>
                        <h1 class="position-absolute text-uppercase text-primary text-center">About the Developers</h1>
                    </div>
                    <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/artem.png" alt="" height="400px">
                    </div>
                    <h4 class="font-weight-medium mb-3 text-center">Lorredo, Artemio III E.</h4>
                    <h5 class="text-center">Laguna State Polytechnic University - San Pablo City</h5>
                    <h6 class="text-center">3WMAD1</h6>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/tyron.png" alt="">
                    </div>
                    <h4 class="font-weight-medium mb-3 text-center">Lastimosa, Tyron</h4>
                    <h5 class="text-center">Laguna State Polytechnic University - San Pablo City</h5>
                    <h6 class="text-center">3WMAD1</h6>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/eris.png" alt="">
                    </div>
                    <h4 class="font-weight-medium mb-3 text-center">Malabanan, John Eris</h4>
                    <h5 class="text-center">Laguna State Polytechnic University - San Pablo City</h5>
                    <h6 class="text-center">3WMAD1</h6>
                </div>
            </div>
                </div>
    </div>
<!-- Developers end-->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="https://epikonilabawdonggon.netlify.app/">Epiko ni Labaw Donggon</a>. All Rights Reserved. Designed by <a class="text-white font-weight-bold" href="https://htmlcodex.com">Lorredo Artemio III, Lastimosa Tyron, Malabanan John Eris</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    
    <script>
        $(document).ready(function() {
    $('#location .map-container').click(function() {
        var imgSrc = $(this).find('img').attr('src');
        $('#fullSizeMap').attr('src', imgSrc);
    });
});

    </script>
</body>

</html>