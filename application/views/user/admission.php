<?php $this->load->view('partials/header') ?>
<link rel="stylesheet" href="<?= base_url('/assets/css/admission.css') ?>">
<script src="<?= base_url('/assets/javascript/admission.js')?>"></script>
</head>
<body>
    <div class="avatar">
        <img src="<?= base_url("assets/img/userlogo.png")?>" alt="admin logo" class="avatar">
    </div>
    <div class="side-menu">
        <div class="admin">
            <h1>Admin</h1>
        </div>
        <ul>
            <li><a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/dashboard-icon.jpg')?>" alt="" height="30px">&nbsp; Dashboard</a></li>
            <li><a href="<?= base_url('admission') ?>"><img src="<?= base_url("assets/img/admission icon.jpg ")?>" alt="admission icon" height="29px" width="38px">&nbsp; Admission</a></li>
            <li><a href="<?= base_url('enlistment') ?>"><img src="<?= base_url("assets/img/icon-enlistment1.jpg") ?>" alt="Enlishment icon"height="30px" width="40px">&nbsp;Enlishment</a></li>
            <li><a href="enlistment.html">&nbsp;Logout</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <h2>Western Mindanao State University</h2>
            <h2>Admission Form</h2>
        </div>
        <div class="form">
            <div>

                <form action="<?= base_url("Admission/add_student") ?>" method="POST">
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                    <div class="picture">
                        <p>2x2 Colored I.D picture with white background</p>
                    </div>
                
                <div class="one">
                    <div class="data">
                        <span class="data-title"><b>Student's Personal Data</b></span>
                        <p>(Please write legibility in capital letters)</p>
                    </div>

                    <div class="filled">
                        <p>To be filled up by WMSU admitting official:</p>
                    </div>

                    <div class="college">
                        <div class="input-id">   
                            <label for="#"><b>College of</b></label>
                            <select name="program" id="program">                            
                                <option value="BSCS">BS Computer Science</option>
                                <option value="ABPS">BS Political Science</option>
                                <option value="BSSW">BS Social Work</option>
                            </select>                               
                        </div>
        
                        <div class="input-id">   
                            <label for="sy"><b>School Year:</b></label>                            
                            <select name="sy">
                                <option value="2021-2022">2021-2022</option>
                                <option value="2022-2023">2022-2023</option>
                                <option value="2023-2024">2023-2024</option>
                                <option value="2024-2025">2024-2025</option>
                                <option value="2025-2026">2025-2026</option>
                            </select>                               
                        </div>
                    </div>
                </div>
                    <div class="types-admission">
                        <div class="input-admission">   
                            <label for="addmission_type"><b>Type of Admission</b></label>                            
                            <select name="admission_type" id="admission">
                                <option value="Regular">Regular</option>
                                <option value="Provisional">Provisional</option>
                                <option value="Probational">Probational</option>
                                <option value="Non-degree">Non-degree</option>
                            </select>                               
                        </div>
                        <div class="input-admission">   
                            <label for="enrol_stat"><b>Enrollment Status</b></label>                            
                            <select name="enrol_stat" id="admission">
                                <option value="Freshmen">Freshmen</option>
                                <option value="Transferee">Transferee</option>
                                <option value="Shifter">Shifter(Returning)</option>
                                <option value="Secondary Courser">Secondary Courser</option>
                                <option value="Cross-Enrolle">Cross-Enrollee</option>
                            </select>                               
                        </div>
        
                        <div class="input-admission">   
                            <label for="programs"><b>Programs</b></label>                            
                            <select name="programs" id="admission">
                                <option value="Graduate">Graduate</option>
                                <option value="Distance Education">Distance Education</option>
                                <option value="Undergraduate">Undergraduate</option>
                                <option value="Special Program">Special Program</option>
                                <option value="Non-degree">Non-degree</option>
                            </select>                               
                        </div>
        
                        <div class="input-admission">   
                            <label for="semester"><b>Semester</b></label>                            
                            <select name="semester" id="admission">
                                <option value="1st Semester">1st Semester</option>
                                <option value="2nd Semester">2nd Semester</option>
                                <option value="Summer">Summer</option>
                                <option value="1st Trimester">1st Trimester</option>
                                <option value="2nd Trimester">2nd Trimester</option>
                                <option value="3rd Trimester">3rd Trimester</option>
                            </select>                               
                        </div>
                    </div>

                    <div class="fields-id">
                        <div class="input-id">
                            <label for="stud_id"><b>Student I.D Number</b></label>                              
                            <input type="text" name="stud_id" disabled>                                
                        </div>

                        <div class="input-program">   
                            <label for="acad_prog"><b>Academic Program</b></label>                            
                            <select name="acad_prog">
                                <option value="Bachelor of Science in Computer Science">BSCS</option>
                                <option value="Bachelor of Arts in Political Science">ABPS</option>
                                <option value="Bachelor of Science in Social Work">BSSW</option>
                            </select>                          
                        </div>

                        <div class="input-level">   
                            <label for="year_level"><b>Year Level</b></label>   
                            <select name="year_level">
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                                <option value="4th">4th</option>
                            </select>
                        </div>
                    </div>


                <div class="form first">
                    <div class="details personal">
                        <span class="title"><b>Personal Details</b></span>

                        <div class="fields">

                            <div class="input-field">
                                <label for="last_name">Last Name</label>
                                <input name="last_name" type="text" placeholder="Enter your last name" >
                            </div>

                            <div class="input-field">
                                <label for="first_name">First Name</label>
                                <input name="first_name" type="text" placeholder="Enter your first name" >
                            </div>


                            <div class="input-field">
                                <label for="middle_name">Middle Name</label>
                                <input name="middle_name" type="text" placeholder="Enter your middle name" >
                            </div>
                        </div>

                        <div class="gender-section">

                            <div class="input-field-1">
                                <label for="gender" id="gender"><b>Gender</b></label>
                                <br>
                                    <select for="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                            </div>

                            <div class="input-field-1">
                                <label for="dof"><b>Date of Birth</b></label><br>
                                <input name="dof" type="date" placeholder="mm/dd/yyyy" >
                            </div>
                        </div>

                        <div class="fields">

                            <div class="input-field">
                                <label for="pob">Place of Birth</label>
                                <input name="pob" type="text" placeholder="Enter address" >
                            </div>

                            <div class="input-field">
                                <label for="civil_status">Civil Status</label>
                                <input name="civil_status" type="text" placeholder="Enter your status" >
                            </div>


                            <div class="input-field">
                                <label for="religion">Religion</label>
                                <input  name="religion" type="text" placeholder="Enter Religion" >
                            </div>
                        </div>

                        <div class="fields">

                            <div class="input-field">
                                <label for="tribe">Ethnicity/Tribe</label>
                                <input name="tribe" type="text" placeholder="Enter your ethnicity" >
                            </div>

                            <div class="input-field">
                                <label for="disability">Disability(any)</label>
                                <input name="disability" type="text" placeholder="Enter your disability" >
                            </div>


                            <div class="input-field">
                                <label for="scholarship">Scholarship</label>
                                <input name="scholarship" type="text" placeholder="Enter your scholorship" >
                            </div>
                        </div>

<!-- Address Section -->
                    <div class="address">                           
                            <span class="title-address"><b>Current Address(City Address)</b></span>
        
                            <div class="input-address">
                                <input name="c_street" type="text" placeholder="" >                               
                            </div>
                                <label for="c_street">House or Street No.</label>
        
                            <div class="input-address">
                                <input name="c_barangay" type="text" placeholder="" >                                
                            </div>
                                <label for="c_barangay">Barangay, Town, City</label>
        
                            <div class="input-address">
                                <input name="c_province" type="text" placeholder="" >                                 
                            </div>
                                <label for="c_province">Province, Country</label>
                        
                            <div class="fields">

                                <div class="input-field2">                               
                                    <input name="c_zipcode" type="text" placeholder="" >
                                    <label for="c_zipcode">Zip Code</label>
                                </div>

                                <div class="input-field2">                                
                                    <input name="c_mobileno" type="text" placeholder="" >
                                    <label for="c_mobileno">Mobile Phone No.</label>
                                </div>


                                <div class="input-field2">                               
                                    <input name="c_telpho" type="text" placeholder="" >
                                    <label for="c_telpho">Telephone No.</label>
                                </div>
                            </div>
                    </div> 

                        <div class="permanent">
                            <input name="same_address" type="checkbox" id="checkbox" name="check"
                            onclick="showCheckbox()"> 
                            <span class="title-address"><b>Permanent Address  </b>(Click checkbox if same information above)</span>
                        </div>

                    <div class="address" id="permanent-address" >
                            
                            <div class="input-address">
                                <input name="street"type="text" placeholder="" >                               
                            </div>
                                <label for="street">House or Street No.</label>
        
                            <div class="input-address">
                                <input name="barangay" type="text" placeholder="" >                                
                            </div>
                                <label for="barangay">Barangay, Town, City</label>
        
                            <div class="input-address">
                                <input name="province" type="text" placeholder="" >                                 
                            </div>
                                <label for="province">Province, Country</label>

                        <div class="fields">

                            <div class="input-field2">                               
                                <input name="zipcode" type="text" placeholder="" >
                                <label for="zipcode">Zip Code</label>
                            </div>

                            <div class="input-field2">                                
                                <input name="mobileno" type="text" placeholder="" >
                                <label for="mobileno">Mobile Phone No.</label>
                            </div>

                            <div class="input-field2">                               
                                <input name="telpho" type="text" placeholder="" >
                                <label for="telpho">Telephone No.</label>
                            </div>
                        </div>
                    </div>
                        

                        <div class="fields3">
                            <span class="title-parent"><b>Parents</b></span>
                            <div class="input-parent">
                                <label for="father_name">Father's Name:</label>
                                <input name="father_name" type="text" placeholder="">
                            </div>

                            <div class="input-parent">
                                <label for="f_edu">Educational Attainment:</label>                              
                                <input name="f_edu" type="text" placeholder="" >                                
                            </div>
                            <div class="input-parent">   
                                <label for="f_occupation">Occupation:</label>                            
                                <input name="f_occupation" type="text" placeholder="" >                               
                            </div>
                            <div class="input-parent">
                                <label for="mother_name">Mother's Name:</label>
                                <input name="mother_name" type="text" placeholder="">
                            </div>
                            <div class="input-parent">
                                <label for="m_edu">Educational Attainment:</label>                              
                                <input name="m_edu" type="text" placeholder="" >                                
                            </div>
                            <div class="input-parent">   
                                <label for="m_occupation">Occupation:</label>                            
                                <input name="m_occupation" type="text" placeholder="" >                               
                            </div>
                        </div>

                        <div class="fields3">
                            <span class="title-parent"><b>Guardian</b></span>
                            <div class="input-parent">
                                <label for="guardian_name">Guardian's Name:</label>
                                <input name="guardian_name" type="text" placeholder="" >
                            </div>

                            <div class="input-parent">
                                <label for="relationship">Relationship:</label>                              
                                <input name="relationship"type="text" placeholder="" >                                
                            </div>

                            <div class="input-parent">   
                                <label for="g_address">Address:</label>                            
                                <input name="g_address"type="text" placeholder="Street/Barangay/City/Province" >                               
                            </div>

                            <div class="input-parent">   
                                <label for="g_contact">Mobile No./ Telephone No.:</label>                            
                                <input name="g_contact" type="text" placeholder="" >                               
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="button">
                    <input type="submit" value="Admit"/>
                </div>
            </form>
        </div>
    </div>

        </form>
    </div>
</body>
</html>