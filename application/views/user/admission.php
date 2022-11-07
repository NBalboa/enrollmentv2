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
            <form action="#">

                <form action="#">
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
                                <option value="program1">BS Computer Science</option>
                                <option value="program1">BS Political Science</option>
                                <option value="program2">BS Criminology</option>
                                <option value="program3">BS Social Work</option>
                                <option value="program4">BS Secondary Education</option>
                            </select>                               
                        </div>
        
                        <div class="input-id">   
                            <label for="#"><b>School Year:</b></label>                            
                            <select name="year" id="">
                                <option value="year1">2021-2022</option>
                                <option value="year1">2022-2023</option>
                                <option value="year1">2023-2024</option>
                                <option value="year1">2024-2025</option>
                                <option value="year1">2025-2026</option>
                            </select>                               
                        </div>
                    </div>
                </div>

                    <div class="types-admission">
        
                        <div class="input-admission">   
                            <label for="#"><b>Type of Admission</b></label>                            
                            <select name="admission" id="admission">
                                <option value="admission1">Regular</option>
                                <option value="admission1">Provisional</option>
                                <option value="admission1">Probational</option>
                                <option value="admission1">Non-degree</option>
                                
                            </select>                               
                        </div>
        
        
                        <div class="input-admission">   
                            <label for="#"><b>Enrollment Status</b></label>                            
                            <select name="admission" id="admission">
                                <option value="admission1">Freshmen</option>
                                <option value="admission1">Transferee</option>
                                <option value="admission1">Shifter(Returning)</option>
                                <option value="admission1">Secondary Courser</option>
                                <option value="admission1">Cross-Enrollee</option>
                            </select>                               
                        </div>
        
                        <div class="input-admission">   
                            <label for="#"><b>Programs</b></label>                            
                            <select name="admission" id="admission">
                                <option value="admission1">Graduate</option>
                                <option value="admission1">Distance Education</option>
                                <option value="admission1">Undergraduate</option>
                                <option value="admission1">Special Program</option>
                                <option value="admission1">Non-degree</option>
                            </select>                               
                        </div>
        
                        <div class="input-admission">   
                            <label for="#"><b>Semester</b></label>                            
                            <select name="admission" id="admission">
                                <option value="admission1">1st Semester</option>
                                <option value="admission1">2nd Semester</option>
                                <option value="admission1">Summer</option>
                                <option value="admission1">1st Trimester</option>
                                <option value="admission1">2nd Trimester</option>
                                <option value="admission1">3rd Trimester</option>
                                <option value="admission1">Summer</option>
                            </select>                               
                        </div>
                    </div>

                    <div class="fields-id">
                        <div class="input-id">
                            <label for="#"><b>Student I.D Number</b></label>                              
                            <input type="text" placeholder="" required>                                
                        </div>

                        <div class="input-program">   
                            <label for="#"><b>Academic Program</b></label>                            
                            <input type="text" placeholder="" required>                               
                        </div>

                        <div class="input-level">   
                            <label for="#"><b>Year Level</b></label>                            
                            <input type="text" placeholder="" required>                               
                        </div>
                    </div>


                <div class="form first">
                    <div class="details personal">
                        <span class="title"><b>Personal Details</b></span>

                        <div class="fields">

                            <div class="input-field">
                                <label for="#">Last Name</label>
                                <input type="text" placeholder="Enter your last name" required>
                            </div>

                            <div class="input-field">
                                <label for="#">First Name</label>
                                <input type="text" placeholder="Enter your first name" required>
                            </div>


                            <div class="input-field">
                                <label for="#">Middle Name</label>
                                <input type="text" placeholder="Enter your middle name" required>
                            </div>
                        </div>

                        <div class="gender-section">

                            <div class="input-field-1">
                                <label for="#" id="gender"><b>Gender</b></label>
                                <br>
                                    <input type="radio" name="gender" id="dot-1" required>
                                    <label for="#">Male</label>
                                    <input type="radio" name="gender" id="dot-1" required>
                                    <label for="#">Female</label>
                            </div>

                            <div class="input-field-1">
                                <label for="#"><b>Date of Birth</b></label><br>
                                <input type="date" placeholder="mm/dd/yyyy" required>
                            </div>
                        </div>

                        <div class="fields">

                            <div class="input-field">
                                <label for="#">Place of Birth</label>
                                <input type="text" placeholder="Enter address" required>
                            </div>

                            <div class="input-field">
                                <label for="#">Civil Status</label>
                                <input type="text" placeholder="Enter your status" required>
                            </div>


                            <div class="input-field">
                                <label for="#">Religion</label>
                                <input type="text" placeholder="Enter Religion" required>
                            </div>
                        </div>

                        <div class="fields">

                            <div class="input-field">
                                <label for="#">Ethnicity/Tribe</label>
                                <input type="text" placeholder="Enter your ethnicity" required>
                            </div>

                            <div class="input-field">
                                <label for="#">Disability(any)</label>
                                <input type="text" placeholder="Enter your disability" required>
                            </div>


                            <div class="input-field">
                                <label for="#">Scholorship</label>
                                <input type="text" placeholder="Enter your scholorship" required>
                            </div>
                        </div>

<!-- Address Section -->
                    <div class="address">                           
                            <span class="title-address"><b>Current Address(City Address)</b></span>
        
                            <div class="input-address">
                                <input type="text" placeholder="" required>                               
                            </div>
                                <label for="#">House or Street No.</label>
        
                            <div class="input-address">
                                <input type="text" placeholder="" required>                                
                            </div>
                                <label for="#">Barangay, Town, City</label>
        
                            <div class="input-address">
                                <input type="text" placeholder="" required>                                 
                            </div>
                                <label for="#">Province, Country</label>
                        
                            <div class="fields">

                                <div class="input-field2">                               
                                    <input type="text" placeholder="" required>
                                    <label for="#">Zip Code</label>
                                </div>

                                <div class="input-field2">                                
                                    <input type="text" placeholder="" required>
                                    <label for="#">Mobile Phone No.</label>
                                </div>


                                <div class="input-field2">                               
                                    <input type="text" placeholder="" required>
                                    <label for="#">Tel ephone No.</label>
                                </div>
                            </div>
                    </div> 

                        <div class="permanent">
                            <input type="checkbox" id="checkbox" name="check"
                            onclick="showCheckbox()"> 
                            <span class="title-address"><b>Permanent Address  </b>(Click checkbox if same information above)</span>
                        </div>

                    <div class="address" id="permanent-address" >
                            
                            <div class="input-address">
                                <input type="text" placeholder="" required>                               
                            </div>
                                <label for="#">House or Street No.</label>
        
                            <div class="input-address">
                                <input type="text" placeholder="" required>                                
                            </div>
                                <label for="#">Barangay, Town, City</label>
        
                            <div class="input-address">
                                <input type="text" placeholder="" required>                                 
                            </div>
                                <label for="#">Province, Country</label>

                        <div class="fields">

                            <div class="input-field2">                               
                                <input type="text" placeholder="" required>
                                <label for="#">Zip Code</label>
                            </div>

                            <div class="input-field2">                                
                                <input type="text" placeholder="" required>
                                <label for="#">Mobile Phone No.</label>
                            </div>

                            <div class="input-field2">                               
                                <input type="text" placeholder="" required>
                                <label for="#">Tel ephone No.</label>
                            </div>
                        </div>
                    </div>
                        

                        <div class="fields3">
                            <span class="title-parent"><b>Parents</b></span>
                            <div class="input-parent">
                                <label for="#">Father's Name:</label>
                                <input type="text" placeholder="" required>
                            </div>

                            <div class="input-parent">
                                <label for="#">Educational Attainment:</label>                              
                                <input type="text" placeholder="" required>                                
                            </div>

                            <div class="input-parent">   
                                <label for="#">Occupation:</label>                            
                                <input type="text" placeholder="" required>                               
                            </div>
                        </div>

                        <div class="fields3">
                            <span class="title-parent"><b>Guardian</b></span>
                            <div class="input-parent">
                                <label for="#">Guardian's Name:</label>
                                <input type="text" placeholder="" required>
                            </div>

                            <div class="input-parent">
                                <label for="#">Relationship:</label>                              
                                <input type="text" placeholder="" required>                                
                            </div>

                            <div class="input-parent">   
                                <label for="#">Address:</label>                            
                                <input type="text" placeholder="Street/Barangay/City/Province" required>                               
                            </div>

                            <div class="input-parent">   
                                <label for="#">Mobile No./ Telephone No.:</label>                            
                                <input type="text" placeholder="" required>                               
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="button">
                    <button>
                        Admit
                    </button>
                </div>
            </form>
        </div>
    </div>

        </form>
    </div>
</body>
</html>