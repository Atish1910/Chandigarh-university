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
                                    <p class="">Chandigarh University Common Entrance Test (CUCET) opens the doors to
                                        global opportunities and exceptional careers, recognizing academic excellence
                                        and providing remarkable support through</p>
                                    <div class="head-text_01 ">
                                        <h6 class="mb-0 h4 text-white ">Scholarships worth</h6>
                                        <span class="display-2  position-relative  ps-md-5"><sup class="fs-5">$</sup>170
                                            <sub class="fs-5">CR</sub></span>
                                    </div>
                                </div>
                                <div class="col-md-3 pe-md-3  border-end ">
                                    <div class="hrad-img">
                                        <img src="<?= LINK; ?>images/chandigarh-uni/2.jpg" alt="">
                                        <div class="box text-start ">
                                            <h4 class="text-white">EART UPTO <br> <span
                                                    class="display-2 fw-bold text-light-blue">100%</span><br><span
                                                    class="fs-5">to unlock your scholarly potential and pave the way for
                                                    your bright future.</span></h4>
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
        <section class="pb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container pb-5" id="about-us">
                <div class="row  position-relative m-top">
                    <div class="col-md-4 box_02 ">
                        <div class="row  ">
                            <div class="col-md-8">
                                <h6 class=" fw-bold"><span class="h6 text-light-blue">BESTOWED WITH A+
                                        ACCREDITATION</span>
                                    BY NATIONAL ASSESSMENT AND ACCREDITATION COUNCIL (NAAC)</h3>
                            </div>
                            <div class="col-md-4">
                                <img src="images/chandigarh-uni/3.jpg" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex ">
                        <img src="images/chandigarh-uni/4.jpg" class="img-02" alt="">
                    </div>
                    <div class="col-md-5 box_02">
                        <div class="row placements_01 h_our owl-carousel owl-carousel-vertical h-100">
                            <?php
                                for ($i=0; $i < 32; $i++) {
                            ?>
                            <div class="col-md-12 wow slideInUp ">
                                <div class="row bg-box ">
                                    <div class="col-md-8">
                                        <small class=" fw-bold">CU Rank <br>
                                            <p class="text-light-blue mb-0 fs-4">4th</p>Amongst Top Universities In Pune
                                        </small>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="<?= LINK; ?>images/chandigarh-uni/placement/<?= $i+1; ?>.png"
                                            class="w-100" alt="">
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------ -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        <h4 class="fw-bold">INDIA'S PREMIER SCHOLARSHIP</h4>
                    </div>
                </div>
                <div class="row ">
                    <?php
                        $a = array("1","2","3","4");
                        $b = array("","mt-5","","mt-5");
                        $c = array("","box-002","","box-002");
                        $d = array("Available By","Student Diversity from","Ensuring","Hallmark of Academic");
                        $e = array("1.30 Lakh+ <br>Students","All 28 Indian States and 8 Union Territories","Inclusivity and Equality","Accomplishment and Potential");
                        for ($i=0; $i < count($a); $i++) {
                            ?>
                    <div class="col-md-3 position-relative bg_height <?= $b[$i];?>"
                        data-bgimg="<?= LINK; ?>images/chandigarh-uni/scholership/<?= $a[$i];?>.jpg">
                        <div class="box-001 <?= $c[$i];?>">
                            <div class="">
                                <img src="images/chandigarh-uni/scholership/icons/<?= $a[$i];?>.png" width="34"
                                    class="filter" alt="">
                            </div>
                            <small class="mb-0"><?= $d[$i];?></small>
                            <h4 class="text-white"><?= $e[$i];?></h4>
                        </div>
                    </div>

                    <?php
                    } 
                ?>
                </div>
            </div>
        </section>

        <!-- ------------------------------------------------------------------------------------------------------------ -->
        <!-- ----------------------------------------------------------------------------------------------------------- -->


        <!-- ------------------------------------------------------------------------------------------------------------ -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center ">
                        <h4 class="fw-bold mb-0">CHANDIGARH UNIVERSITY</h4>
                        <h2>COMMON ENTRANCE TEST (CUCET)</h2>
                        <small>Chandigarh University Common Entrance Test (CUCET 2024) is a national-level entrance exam
                            and scholarship test mandatory for admission. CUCET exam forms the basis of eligibility that
                            is mandatory for admission in Engineering, MBA, Pharmacy, LLM, and Integrated Law programs.
                            The amount of the scholarship depends on the fee of the program, the date of admission, and
                            the performance of the student in CUCET 2024.</small>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-md-4 position-relative bg_height_01"
                        data-bgimg="<?= LINK; ?>images/chandigarh-uni/test/1.jpg">
                        <div class="box-003">
                            <h2 class="text-white"><span class="text-light-blue">SEIZE <br> YOUR GOLDEN <br> CHANCE
                                    <br></span>TO EARN <br>SCHOLARSHIPS <br> WORTH </h2>
                            <div class="bg-contain position-relative head_text_02"
                                data-bgimg="<?= LINK; ?>images/chandigarh-uni/test/2.jpg">
                                <p class="text-white ps-md-3 mb-0"><sup>$</sup> <span
                                        class="display-2">170</span><br><sub> CRORES</sub></p>
                            </div>
                        </div>
                        <img src="<?= LINK; ?>images/chandigarh-uni/test/3.webp" class="test-img" alt="">
                    </div>
                    <div class="col-md-4 box_02">
                        <div class="">
                            <h5 class="mb-0">CUCET Phase-I</h5>
                            <p>October 2023 - June 2024</p>
                        </div>


                        <div>
                            <?php
                            $a = array("90.01 to 100 Marks:", "80 to 90 Marks:", "70 to 79.99 Marks:", "60 to 69.99 Marks:", "50 to 59.99 Marks:", "40 to 49.99 Marks:", "30 to 39.99 Marks:");
                            $b = array( "100% Scholarship", "50% Scholarship", "40% Scholarship", "30% Scholarship", "25% Scholarship", "15% Scholarship", "Eligible");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                            <p class="fs-5 "><?= $a[$i];?><br><span class="fs-6  fw-bold"><?= $b[$i];?></span></p>

                            <?php
                            } 
                        ?>
                            <div class="d-grid">
                                <button class="btn btn-primary">Apply Now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 box_03">
                        <div class=" text-white">
                            <h5 class="mb-0 text-white">CUCET Phase-I</h5>
                            <p>October 2023 - June 2024</p>
                        </div>


                        <div>
                            <?php
                            $a = array("90.01 to 100 Marks:", "80 to 90 Marks:", "70 to 79.99 Marks:", "60 to 69.99 Marks:", "50 to 59.99 Marks:", "40 to 49.99 Marks:", "30 to 39.99 Marks:");
                            $b = array( "100% Scholarship", "50% Scholarship", "40% Scholarship", "30% Scholarship", "25% Scholarship", "15% Scholarship", "Eligible");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                            <p class="fs-5 text-white"><?= $a[$i];?><br><span class="fs-6  fw-bold"><?= $b[$i];?></span>
                            </p>

                            <?php
                            } 
                            ?>
                            <div class="d-grid">
                                <button class="btn btn-primary " disabled>Comming Soon</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- ------------------------------------------------------------------------------------------------------------ -->
        <section class="py-5">
            <div class="container">
                <div class="row py-5 position-relative bg_height_02"
                    data-bgimg="<?= LINK; ?>images/chandigarh-uni/course/bg_01.jpg">
                    <div class="col-md-5">
                        <div class=" text-white">
                            <h3 class="mb-0 text-white fw-bold">FIND YOUR COURSE <br><br></h3>
                            <p>Pursue the Futuristic course of your choice. Select your Discipline and Program from the
                                list below:</p>
                        </div>
                        <div class="">
                            <div class="form_01 my-md-3 w-100 ">
                                <form class="enqui_form_ai" action="" method="post">
                                    <div class="">
                                        <!-- <h3 class="t-lgreen pb-3 text-blue" id="exampleModalLabel">Enquire Now</h3> -->
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <select class="form-control form_servi" placeholder="graduation"
                                                        name="n_graduation">
                                                        <option selected disabled>Select Discipline</option>
                                                        <option value="engineering">Engineering</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <select class="form-select form_deptart" name="n_dept">
                                                        <option selected value="">Select Programme</option>
                                                        <optgroup label="engineering" class="d-none">
                                                            <option data-course="engineering"
                                                                value="(Aerospace Engineering)">Bachelor of
                                                                Engineering (Aerospace Engineering)</option>
                                                            <option data-course="engineering" value="Biotechnology">
                                                                Bachelor of Engineering
                                                                (Biotechnology) </option>
                                                            <option data-course="engineering"
                                                                value="(Biotechnology)- Lateral Entry">Bachelor of
                                                                Engineering (Biotechnology)- Lateral Entry</option>
                                                            <option data-course="engineering"
                                                                value="(Computer Science & Engineering) - Lateral Entry">
                                                                Bachelor of Engineering
                                                                (Computer Science & Engineering) - Lateral Entry
                                                            </option>
                                                            <option data-course="engineering"
                                                                value="(Computer Science and Engineering) (Computer Science and Business Systems)">
                                                                Bachelor of Engineering (Computer Science and
                                                                Engineering) (Computer Science and
                                                                Business Systems) (In association with TCS)</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center nav_01 d-grid">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">View Program</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Modal title</h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 text-white border-end">
                        <p>Following AIT MBA Specialized Programs are having different Scholarship slabs. <br><br>Please
                            visit the program webpage by clicking the links below for more information.</p>
                        <ul class="h_list_num list-unstyled course_01 lh-lg mb-3">
                            <li class="1"><a href=""><i class="fa fa-link pe-3"></i>MBA Banking & Financial Engineering
                                    with SBI & Tally</a></li>
                            <li class="1"><a href=""><i class="fa fa-link pe-3"></i>MBA Strategic HR with AON
                                    Consulting</a></li>
                            <li class="1"><a href=""><i class="fa fa-link pe-3"></i>MBA Fintech with NSE Academy</a>
                            </li>
                            <li class="1"><a href=""><i class="fa fa-link pe-3"></i>MBA - Strategic Human Resources
                                    (ITP)</a></li>
                            <li class="1"><a href=""><i class="fa fa-link pe-3"></i>MBA (Applied Finance)</a></li>
                        </ul>
                        <p class="h4 fw-bold text-white">NOTE: <br><span class="h6 text-white fw-normal">The average
                                outflow of scholarship will be 10%. </span></p>
                    </div>
                    <div class="col-md-3">
                        <div class=" text-white">
                            <h3 class="mb-0 text-white fw-bold">AIT MBA Specialized <br> Programs Slabs:</h3>
                        </div>


                        <div>
                            <?php
                            $a = array("90.01 to 100 Marks:", "80 to 89.89 Marks:", "70 to 79.99 Marks:", "60 to 69.99 Marks:", "50 to 59.99 Marks:", "40 to 49.99 Marks:");
                            $b = array( "40% Scholarship", "40% Scholarship", "30% Scholarship", "20% Scholarship", "15% Scholarship", "10% Scholarship");
                            for ($i=0; $i < count($a); $i++) {
                            ?>
                            <p class="fs-5 text-white"><?= $a[$i];?><br><span class="fs-6  fw-bold"><?= $b[$i];?></span>
                            </p>

                            <?php
                            } 
                            ?>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    </section>

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