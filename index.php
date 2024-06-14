<?php
  include 'link.php';
  ob_start('ob_gzhandler');
  date_default_timezone_set('Asia/Kolkata');
  setcookie("utm_medium", isset($_GET['utm_medium']) ? $_GET['utm_medium'] : 'Direct', strtotime(date('Y-m-d H:i:s'))+1200);
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CUCET Application Form 2024, Registration Form, Scholarships - Chandigarh University Entrance Exam</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content=" CUCET 2024, CU Common Entrance Test, Best university in India, best university in Punjab, Universities in punjab, ugc recognized university, cu, chandigarh university"
        name="keywords">
    <meta
        content="CUCET 2024 Entrance Test and Scholarship Exam conducting by Chandigarh University for admission in Engineering, MBA, Law, Hotel Management, Journalism and Other programs."
        name="description">

    <!-- Favicon -->
    <link href="<?= LINK; ?>images/favicon.png" rel="icon">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= LINK; ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= LINK; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= LINK; ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= LINK; ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= LINK; ?>css/style.css" rel="stylesheet">

</head>

<body>

    <?php include 'nav.php'; ?>

    <!-- Carousel Start -->
    <div class="container-fluid px-0">
        <div id="header-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 main-img" src="<?= LINK; ?>images/chandigarh-uni/banners/1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container position-relative">
                            <div class="row align-items-center mb-90">
                                <div class="col-md-5 text-start">
                                    <span class="text-white fw-normal lh-base pt-4 pt-md-0 pb-3">FUELING FUTURES,
                                        EMPOWERING DREAMS</span>

                                    <h1 class="text-white head-text_02 "><span class="text-light-blue">INDIA’S
                                            NO.1</span><br>PRIVATE <br> UNIVERSITY</h1>
                                    <p class="">Chandigarh University Common Entrance Test (CUCET) opens the doors to global opportunities and exceptional careers, recognizing academic excellence and providing remarkable support through</p>
                                    <div class="head-text_01 ">
                                        <h6 class="mb-0 h4 text-white ">Scholarships worth</h6>
                                        <span class="display-2  position-relative  ps-md-5"><sup class="fs-5">$</sup>170 <sub class="fs-5">CR</sub></span>
                                    </div>
                                </div>
                                <div class="col-md-3 pe-md-3  border-end ">
                                    <div class="hrad-img">
                                        <img src="<?= LINK; ?>images/chandigarh-uni/2.jpg" alt="">
                                        <div class="box text-start ">
                                            <h4 class="text-white">EART UPTO <br> <span class="display-2 fw-bold text-light-blue">100%</span><br><span class="fs-5">to unlock your scholarly potential and pave the way for your bright future.</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 pt-5 pb-3  pt-md-0  h_abform">
                                    <div class="">
                                        <h3 class="text-white">CUCET APPLICATION FORM 2024</h2>
                                        <h6 class="text-white">APPLY FOR CUCET 2024 (PHASE-I)</h6>
                                        <span class="bg-red_01">REGISTRATION END DATE: 20 JUNE 2024</span>
                                    </div>
                                    <?php 
                                            include 'form_01.php'; 
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!---our top ranked patanered start--->
        <section class="wow fadeInUp" data-wow-delay="0.1s">
            <div class="container position-relative pt-3" id="about-us">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex">
                            <div class="">
                                <h3 class=" fw-bold"><span class="h3 text-light-blue">BESTOWED WITH A+ ACCREDITATION</span>
                                BY NATIONAL ASSESSMENT AND ACCREDITATION COUNCIL (NAAC)</h3>
                            </div>
                            <div class="">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-5"></div>
                </div>
            </div>
        </section>

        <section class="pt-5 pb-3 bg-red wow fadeInUp" data-wow-delay="0.1s" id="key-highlights">
            <div class="container">
                <div class="text-center text-md-start">
                    <h5 class="text-white fw-bold mb-4 text-center h_headn h_headn_b">Key Highlights</h5>
                </div>
                <div class="row justify-content-center pt-3">
                    <?php
                    $a = array('1','2','3','4','5','6');
                    $b = array("Research Publications","Books in diverse areas","Govt. Funded Research Projects","Students ","Acres Green Campus","International Student");
                    $c = array('2236','500','50','8000','100','300');

                    for ($i=0; $i < count($a); $i++) {
                ?>
                    <div class="col-md-4 pb-3 mb-4">
                        <div class="d-flex align-items-center">
                            <div class="border i_count rounded-circle position-relative overflow-hidden">
                                <div class="border p-3 rounded-circle bg-white">
                                    <img src="<?= LINK; ?>images/chandigarh-uni/icon/<?= $a[$i]; ?>.png" height="50"
                                        alt="">
                                </div>
                            </div>
                            <div class=" ps-3">
                                <p class="fs-1 text-white mb-0"><b class="text-white fs-1 counter-value"><?= $c[$i]; ?>
                                    </b>+</p>
                                <h5 class="text-white"><?= $b[$i]; ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php 
                }
                 ?>
                </div>
            </div>
        </section>

        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="py-5 icons_01 wow fadeInUp" data-wow-delay="0.1s" id="Programme-2024-25">
            <div class="container">
                <div class="text-center text-md-start">
                    <h5 class="text-blue fw-bold mb-4 text-center h_headn h_headn_b">PROGRAMME 2024-25</h5>
                </div>
                <div class="row">
                    <div class="col-md-6  py-5 px-md-5 order-2 order-md-1">
                        <h3 class="text-dblue fw-bold mb-4 ">Under Graduate Courses </h3>
                        <div class="row">
                            <h4 class="text-blue fw-bold">B.Tech</h4>
                            <div class="col-md-12">
                                <ul class="h_list_num list-unstyled lh-lg mb-0">
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Computer Science & Engineering
                                    </li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Chemical Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Civil & Environmental
                                        Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Marine Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Electrical Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Mechanical Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Electronics and Communication
                                        Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Electrical and Electronic
                                        Engineering</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="text-blue fw-bold pt-3">B.Sc</h4>
                            <div class="col-md-12">
                                <ul class="h_list_num list-unstyled lh-lg mb-0">
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Agriculture</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Hotel Management </li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Hotel & Hospitality
                                        Administration</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Culinary & Pastry Arts, </li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Airlines, Tourism &
                                        Hospitality</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <h4 class="text-blue fw-bold pt-2">BBA </h4>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-blue fw-bold pt-2">BCA </h4>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-blue fw-bold pt-2">B.Pharma </h4>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-blue fw-bold pt-2">D.Pharma </h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6  order-1 order-md-2 specializations bgimg_cover bgimg_center position-relative h_bg_over_01 z-index-1 "
                        data-bgimg="<?= LINK; ?>images/chandigarh-uni/programme/1.jpg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6  specializations bgimg_cover bgimg_center position-relative h_bg_over_01 z-index-1 "
                        data-bgimg="<?= LINK; ?>images/chandigarh-uni/programme/2.jpg">
                    </div>

                    <div class="col-md-6  ps-md-4 p-3 py-5 px-md-5">
                        <h3 class="text-dblue fw-bold mb-4 ">Post Graduate Courses </h3>
                        <div class="row">
                            <h4 class="text-blue fw-bold pt-3">M.Tech </h4>
                            <div class="col-md-12">
                                <ul class="h_list_num list-unstyled lh-lg mb-0">
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Chemical Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Electrical Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>M.Tech (Research) in Civil
                                        Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Mechatronics
                                        Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Computer Science
                                        Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Heat Power
                                        Engineering</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>Electronics And
                                        Communication(Signal Processing And Communication)</li>
                                    <li class="1"><i class="fas fa-check-circle pe-3"></i>
                                        Mechanical Engineering</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <h4 class="text-blue fw-bold pt-2">MBA</h4>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-blue fw-bold pt-2">MCA</h4>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-blue fw-bold pt-2">MSC</h4>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-blue fw-bold pt-2">M.Sc in Hotel Administration </h4>
                            </div>
                            <div class="col-md-12">
                                <h4 class="text-blue fw-bold pt-2">MTTM- Master in travel and tourism Management
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ----------------------------------------------------------------------------------------------------------- -->


        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="py-md-5 pb-5 wow fadeInUp" data-wow-delay="0.1s" id="admission-details">
            <div class="container">
                <div class="text-center text-md-start">
                    <h5 class="text-blue fw-bold mb-4 text-center h_headn h_headn_b">ADMISSION DETAILS</h5>
                </div>
                <?php include 'admission-details.php';?>
            </div>
        </section>
        <!-- ----------------------------------------------------------------------------------------------------------- -->
        <section class="h_partner  rounded-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container mt-3 mt-md-0">
                <div class="row  py-5">
                    <div class="col-md-9">
                        <h3 class="fw-bold text-light-blue text-start display-6  ps-4"></b>Qualify for admission through
                            any
                            of these-</h3>
                        <p class="ps-4 fs-5 text-white">C.V Raman Global University All India Entrance Test (CGET-2024),
                            JEE Main, OJEE, CAT, MAT, XAT, PGAT, GATE and ATMA.</p>
                    </div>
                    <div class="col-md-3 h_btn d-md-flex align-items-center">
                        <a class="btn bg-light-blue text-dark ms-4 py-3 px-4 fs-4 fw-bold" type="button"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">Apply Now&nbsp;
                            <i aria-hidden="true" class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------------------------------------------------------------------------------------------------------- -->

        <section class=" wow fadeInUp" data-wow-delay="0.1s" id="5">
            <div class="container">
                <div class="row mt-5 mb-5 pb-5">
                    <div class="col-md-12">
                        <div class="text-center text-md-start">
                            <h5 class="text-blue fw-bold mb-4 text-center h_headn h_headn_b">PLACEMENTS</h5>
                        </div>
                        <div class="">
                            <div class="row placements_01 h_our owl-carousel owl-carousel-vertical h-100">
                                <?php
                                for ($i=0; $i < 32; $i++) { 
                            ?>
                                <div class="col-md-12 wow slideInUp ">
                                    <img src="<?= LINK; ?>images/chandigarh-uni/placement/<?= $i+1; ?>.png"
                                        class="w-100" alt="">
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---patanered start--->
        <section class=" wow fadeInUp" data-wow-delay="0.1s">
            <div class="container mt-3 py-4 mt-md-0 pt-md-0">
                <div class="row h_partner py-5 mx-md-0">
                    <div class="col-md-9">
                        <h4 class="fw-bold text-light-blue text-start fs-3 wow slideInUp ps-4 mb-3">A Collaborative
                            Learning
                            Hub </h4>
                        <ul class="h_list_num list-unstyled fs-5 text-white lh-lg ps-4 mb-0">
                            <li class="1"><i class="fas fa-check-circle pe-3"></i>A culture of entrepreneurship &
                                incubation </li>
                            <li class="1"><i class="fas fa-check-circle pe-3"></i>State-of-the-art infrastructure </li>
                            <li class="1"><i class="fas fa-check-circle pe-3"></i>Choice Based Credit System (CBCS)
                            </li>
                            <li class="1"><i class="fas fa-check-circle pe-3"></i>Regular laboratory classes and
                                projects are embedded into the curriculum owing to the ‘learning by doing’ approach</li>
                        </ul>
                    </div>
                    <div class="col-md-3  d-md-flex align-items-center">
                        <a class="btn c_btn text-dark ms-4" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Apply Now&nbsp;
                            <i aria-hidden="true" class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!---patanered end--->

        <section class=" wow fadeInUp" data-wow-delay="0.1s">

    </div>
    </section>

    <!---contact part start--->
    <div class="">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d958452.0174213767!2d85.735793!3d20.219266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19a8fa59ac3c81%3A0xc81fc475faa77274!2sC.%20V.%20Raman%20Global%20University!5e0!3m2!1sen!2sus!4v1715670254021!5m2!1sen!2sus"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php include 'footer.php'; ?>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?= LINK; ?>js/bootstrap.min.js"></script>
    <script src="<?= LINK; ?>lib/wow/wow.min.js"></script>
    <script src="<?= LINK; ?>lib/easing/easing.min.js"></script>
    <script src="<?= LINK; ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= LINK; ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= LINK; ?>lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?= LINK; ?>js/main.js"></script>
    <script type="text/javascript">
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://widgets.in8.nopaperforms.com/emwgts.js";
        document.body.appendChild(s);
    </script>
    <!-- Start of HubSpot Embed Code -->
    <!-- <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/45253889.js"></script> -->
    <!-- End of HubSpot Embed Code -->
</body>

</html>