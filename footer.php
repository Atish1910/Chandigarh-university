    <!-- Footer Start -->
    <div class="container-fluid bg-red footer wow fadeIn text-white" data-wow-delay="0.1s" id="n_contact">
        <!-- <div class="container"> -->
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6 wow slideInUp py-5 footer_01">
                <div class="p-3 p-md-0">
                    <h4 class="text-light-blue mb-3 fw-bold">Our Institute</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bidyanagar, Mahura, Janla, Bhubaneswar, <br> Odisha 752054, India</p>
                </div>
                <div class="mt-5 footer_02">
                    <h4 class="text-light-blue mb-3   fw-bold">Quick Links</h5>
                    <ul class="list-unstyled row lh-lg">
                        <li class=""><a href="#1" class="nav-link">About Us</a></li>
                        <li class=""><a href="#2" class="nav-link">Key Highlights</a></li>
                        <li class=""><a href="#3" class="nav-link">Programme 2024-25</a></li>
                        <li class=""><a href="#4" class="nav-link">Admission Details</a></li>
                        <li class=""><a href="#n_contact" class="nav-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 py-md-5 pb-5 ">
                <?php include 'form_01.php'; ?>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-3 mb-md-0">
                    &copy; <?= date('Y'); ?> <a class="fw-bold text-light" href="#"> CV- Raman Global University</a>, All Right
                    Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg bg-dark text-white btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <button type="button" class="btn c_btn rounded-pill px-4 right_button bg-light-blue" data-bs-toggle="modal"
        data-bs-target="#exampleModal">Apply Now</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php 
                        include 'form_01.php'; 
                    ?>
                </div>
            </div>
        </div>
    </div>