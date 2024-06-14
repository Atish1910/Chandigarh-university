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
                    <img class="w-100" src="<?= LINK; ?>images/cv-raman/banners/1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container position-relative">
                            <div class="row align-items-center">
                                <div class="col-md-5 pt-5 pb-3  pt-md-0  h_abform order-md-2  order-2">
                                    <?php 
                                            include 'form_01.php'; 
                                        ?>
                                </div>
                                <div class="col-md-7 text-start order-md-1 order-1">
                                    <h2 class="text-white fw-normal lh-base pt-4 pt-md-0 pb-3">Recognized as <br><span
                                            class="fw-bold text-yellow h1"> Top 100 NIRF University for<br>7 consecutive
                                            years</span>
                                    </h2>
                                    <span class="h3 border text-white rounded-pill px-4"><span
                                            class="text-yellow">Research & </span>Innovation Culture </span>
                                    <h1 class="display-5 text-white my-4">Admissions Open</h1>
                                    <div class="d-flex text-center">
                                        <div class="pe-3 border-end border-2">
                                            <h1 class="text-yellow mb-0 fw-bold">Under Graduate</h1>
                                            <h2 class="text_big fw-bolder lh-1 text-white px-3">4 Years<br><span
                                                    class="fs-6 fw-normal">(Full time)</span>
                                            </h2>
                                        </div>
                                        <div class="ps-3">
                                            <h1 class="text-yellow mb-0 fw-bold">Post Graduate</h1>
                                            <h2 class="text_big fw-bolder lh-1 text-white px-3">2 Years<br><span
                                                    class="fs-6 fw-normal">(Full time)</span>
                                            </h2>
                                        </div>
                                    </div>
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
                <div class="row bgimg_contain bgimg_norepeat mobile_hide ">
                    <div class="col-md-4  d-none d-md-block"></div>
                    <div class="col-md-7 py-4">
                        <h4 class="text-blue fw-bold lh-base">Committed to reimagining the future <br>since the
                            establishment in 1997</h5>
                            <p class="lh-lg mb-2">CGU, Odisha, a multi-disciplinary university offers career-oriented
                                courses at all levels, i.e., UG, PG and PhD across diverse streams, including
                                Engineering, Humanities, Agriculture, Pharmacy, Basic Sciences and Management. As
                                India’s leading university, we look after the diverse modalities of International
                                Education Pertaining to Admission Schemes, Scholarships, Student Exchanges, Dual
                                Degrees, Short-term & long-term Study Abroad Programs and Global Collaborations. We make
                                learning more relevant and transformational with a united mission - to solve real-world
                                problems for a better tomorrow.</h5>
                    </div>
                    <div class="col-md-4 d-flex align-items-end d-md-none d-block">
                        <img src="images/cv-raman/1.jpg" class="img-fluid" alt="">
                    </div>
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
                                    <img src="<?= LINK; ?>images/cv-raman/icon/<?= $a[$i]; ?>.png" height="50" alt="">
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
                        data-bgimg="<?= LINK; ?>images/cv-raman/programme/1.jpg">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6  specializations bgimg_cover bgimg_center position-relative h_bg_over_01 z-index-1 "
                        data-bgimg="<?= LINK; ?>images/cv-raman/programme/2.jpg">
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
                        <h3 class="fw-bold text-yellow text-start display-6  ps-4"></b>Qualify for admission through any
                            of these-</h3>
                        <p class="ps-4 fs-5 text-white">C.V Raman Global University All India Entrance Test (CGET-2024),
                            JEE Main, OJEE, CAT, MAT, XAT, PGAT, GATE and ATMA.</p>
                    </div>
                    <div class="col-md-3 h_btn d-md-flex align-items-center">
                        <a class="btn bg-yellow text-dark ms-4 py-3 px-4 fs-4 fw-bold" type="button"
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
                                    <img src="<?= LINK; ?>images/cv-raman/placement/<?= $i+1; ?>.png" class="w-100"
                                        alt="">
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
                        <h4 class="fw-bold text-yellow text-start fs-3 wow slideInUp ps-4 mb-3">A Collaborative Learning
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