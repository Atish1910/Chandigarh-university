<div class="form_01 my-md-3 w-100 bg-white p-md-5 p-3">
    <form class="enqui_form_ai" action="" method="post">
        <div class="">
            <h3 class="t-lgreen pb-3 text-blue" id="exampleModalLabel">Enquire Now</h3>
            <div class="row">
                <div class="col-md-12  mb-3">
                    <input type="text" class="form-control shadow-sm border-rounded" placeholder="Name" name="fname">
                </div>
                <div class="col-md-12  mb-3">
                    <input type="text" class="form-control shadow-sm border-rounded" placeholder="Phone number"
                        name="phone">
                </div>
                <div class="col-md-12 mb-3">
                    <input type="text" class="form-control shadow-sm border-rounded" placeholder="Email ID"
                        name="email">
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect2" placeholder="State" name="state">
                            <option selected disabled>Select State</option>
                            <?php
                                $a = array("Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal", "Andaman and Nicobar Islands", "Chandigarh", "Dadra and Nagar Haveli and Daman and Diu", "Lakshadweep", "Delhi", "Puducherry", "Ladakh", "Lakshadweep");
                                for ($i=0; $i < count($a); $i++) {
                            ?>
                            <option value="<?= $a[$i]; ?>"><?= $a[$i]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6  mb-3">
                    <input type="text" class="form-control shadow-sm border-rounded" placeholder="Enter City"
                        name="city">
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <select class="form-control form_servi" placeholder="graduation" name="n_graduation">
                            <option selected disabled>Choose your Graduation</option>
                            <option value="under-graduate">Under Graduate</option>
                            <option value="post-graduate">Post Graduate</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <select class="form-select form_deptart" name="n_dept">
                            <option selected value="">Select Department </option>
                            <optgroup label="under-graduate" class="d-none">
                                <option data-course="under-graduate" value="b-tech-computer-science-engineering-">B.Tech. – Computer Science & Engineering</option>
                                <option data-course="under-graduate" value="b-tech-chemical-engineering-">B.Tech. – Chemical Engineering</option>
                                <option data-course="under-graduate" value="b-tech-civil-environmental-engineering-">B.Tech. - Civil & Environmental Engineering</option>
                                <option data-course="under-graduate" value="b-tech-marine-engineering-">B.Tech. - Marine Engineering</option>
                                <option data-course="under-graduate" value="b-tech-electrical-engineering-">B.Tech. - Electrical Engineering</option>
                                <option data-course="under-graduate" value="b-tech-mechanical-engineering-">B.Tech. - Mechanical Engineering</option>
                                <option data-course="under-graduate" value="b-tech-electronics-and-communication-engineering-">B. Tech - Electronics and Communication  Engineering</option>
                                <option data-course="under-graduate" value="b-tech-electrical-and-electronic-engineering">B.Tech. -Electrical and Electronic   Engineering</option>
                                <option data-course="under-graduate" value="b-sc-hons-agriculture-">B.Sc (Hons.) Agriculture</option>
                                <option data-course="under-graduate" value="B Sc. in Hotel Management">B Sc. in Hotel Management</option>
                                <option data-course="under-graduate" value="B Sc. in Hotel & Hospitality Administration">B Sc. in Hotel & Hospitality Administration</option>
                                <option data-course="under-graduate" value="B Sc. in Culinary & Pastry Arts,">B Sc. in Culinary & Pastry Arts,</option>
                                <option data-course="under-graduate" value="B Sc. in Airlines, Tourism & Hospitality">B Sc. in Airlines, Tourism & Hospitality</option>
                                <option data-course="under-graduate" value="bba-bachelor-of-business-administration">BBA - Bachelor of Business Administration</option>
                                <option data-course="under-graduate" value="bca-bachelor-of-computer-applications">BCA - Bachelor of Computer Applications</option>
                                <option data-course="under-graduate" value="B.Pharma">B.Pharma</option>
                                <option data-course="under-graduate" value="D.Pharma">D.Pharma</option>
                            </optgroup>
                            <optgroup label="post-graduate" class="d-none">
                                <option data-course="post-graduate" value="m-tech">M Tech All Branch</option>
                                <option data-course="post-graduate" value="m-tech">M Sc All Branch</option>
                                <option data-course="post-graduate" value="MBA">MBA</option>
                                <option data-course="post-graduate" value="MCA">MCA</option>
                                <option data-course="post-graduate" value="MSC">MSC</option>
                                <option data-course="post-graduate" value="M.Sc in Hotel Administration">M.Sc in Hotel Administration</option>
                                <option data-course="post-graduate" value="MTTM- Master in travel and tourism Management">MTTM- Master in travel and tourism Management</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 text-center nav_01">
                    <button type="submit" class="btn px-5 c_btn border-pill">Submit</button>
                    <div class="success1 text-success"></div>
                    <div class="error1 text-danger"></div>
                </div>
            </div>
        </div>
    </form>
</div>