<?php $this->load->view('partials/header') ?>
    <link rel="stylesheet" href="<?= base_url("assets/css/enlistment.css") ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8fc129ec61.js" crossorigin="anonymous"></script>
</head>
<body>
<body>
    <div class="avatar">
        <img src="<?= base_url('assets/img/userlogo.png') ?>" alt="admin logo" class="avatar">
    </div>
    <div class="side-menu">
        <div class="admin">
            <h1><b>Admin</b></h1>
        </div>
        <ul>
            <li><a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/dashboard-icon.jpg')?>" alt="" height="30px">&nbsp; Dashboard</a></li>
            <li><a href="<?= base_url('admission') ?>"><img src="<?= base_url("assets/img/admission icon.jpg ")?>" alt="admission icon" height="29px" width="38px">&nbsp; Admission</a></li>
            <li><a href="<?= base_url('enlistment') ?>"><img src="<?= base_url("assets/img/icon-enlistment1.jpg") ?>" alt="Enlishment icon"height="30px" width="40px">&nbsp;Enlishment</a></li>
            <li><a href="enlistment.html">&nbsp;Logout</a></li>
        </ul>
    </div>    
    
    <div class="container-sm" style=" width: 67vw; height: 100%; margin-top: 20px;">
        <div class="header">
            <span><b>Certificate Of Registration</b></span>
        </div>
        <div class="form">
         <div class="picture">
            <img src="images\profile.png" alt="student-profile">
        </div> 

         <div class="fields">
        <div class="field-1">
            <div class="input-field">
               <label for="#">Student I.D</label>
                <input type="text" placeholder="" required>
            </div>

            <div class="input-field">
                <label for="#">Semester</label>
                <input type="text" placeholder="" required>
            </div>
        </div>
        <div class="field-1">
            <div class="input-field">
                <label for="#">School Year</label>
                <input type="text" placeholder="" required>
            </div>

            <div class="input-field">
                <label for="#">Level</label>
                <input type="text" placeholder="" required>
            </div>   
        </div>
        <div>
            <div class="input-field-1">
                <label for="#">Student Name</label>
                <input type="text" placeholder="" required>
            </div>            
        </div>
            <div class="input-field-1">
                <label for="#">Program</label>
                <input type="text" placeholder="" required>
            </div>
        </div>
            
            <div class="table">
                <table class="table table-bordered table-sm">
                    <tr>
                        <th>Subject ID</th>
                        <th>Subject Code</th>
                        <th>Subject Description</th>
                        <th>Lab</th>
                        <th>Lec</th>
                        <th></th>
                    </tr>

                    <tr>
                        <td>BSCS 1000</td>
                        <td>CC 111</td>
                        <td>Computer Programming</td>
                        <td>1</td>
                        <td>3</td>
                        <td><button class="btn1">delete</button></td>
                    </tr>
                    <tr>
                        <td>BSCS 1000</td>
                        <td>CC 111</td>
                        <td>Computer Programming</td>
                        <td>1</td>
                        <td>3</td>
                        <td><button class="btn1">delete</button></td>
                    </tr>
                    <tr>
                        <td>BSCS 1000</td>
                        <td>CC 111</td>
                        <td>Computer Programming</td>
                        <td>1</td>
                        <td>3</td>
                        <td><button class="btn1">delete</button></td>
                    </tr>

                    <tr>
                        <td>BSCS 1000</td>
                        <td>CC 111</td>
                        <td>Computer Programming</td>
                        <td>1</td>
                        <td>3</td>
                        <td><button class="btn1">delete</button></td>
                    </tr>

                    <tr>
                        <td>BSCS 1000</td>
                        <td>CC 111</td>
                        <td>Computer Programming</td>
                        <td>1</td>
                        <td>3</td>
                        <td><button class="btn1">delete</button></td>
                    </tr>
                    <tr>
                        <td>BSCS 1000</td>
                        <td>CC 111</td>
                        <td>Computer Programming</td>
                        <td>1</td>
                        <td>3</td>
                        <td><button class="btn1">delete</button></td>
                    </tr>

                    <tr>
                        <td>BSCS 1000</td>
                        <td>CC 111</td>
                        <td>CS Fundamentals</td>
                        <td>0</td>
                        <td>3</td>
                        <td><button class="btn1">delete</button></td>
                    </tr>

                    <tr>
                        <td>BSCS 1000</td>
                        <td>CC 113</td>
                        <td>CS Elective</td>
                        <td>1</td>
                        <td>3</td>
                        <td><button class="btn1">delete</button></td>
                    </tr>

                    <tr>
                        <td>BSCS 1000</td>
                        <td>CC 114</td>
                        <td>Software Engineering</td>
                        <td>1</td>
                        <td>3</td>
                        <td><button class="btn1">delete</button></td>
                    </tr>

                    <tr>
                        <td>BSCS 1000</td>
                        <td>CC 114</td>
                        <td>Web Programming</td>
                        <td>1</td>
                        <td>3</td>
                        <td><button class="btn1">delete</button></td>
                    </tr>
                </table>
            </div> 
    </div>
<!-- BUTTON SEARCH -->
    <div class="btn-add">
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="margin-bottom:20px;">
            Search Student
          </button>
    
          <!-- <button type="button" class="btn">
            Add Subject
          </button> -->
<!--BUTTON ADD SUBJECT-->
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-bottom:20px;">
        Add Subject
        </button>
    
<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header1">
                    <h1>Add Subject</h1>
                </div>
                <div class="modal-body">
                    <div class="search">
                        <form action="">
                            <input type="text" placeholder="Search...">
                            <select name="" id="" style="border-right: 1px solid silver;">
                                <option value="">1st Year</option>
                                <option value="">2nd Year</option>
                                <option value="">3rd Year</option>
                                <option value="">4th Year</option>
                            </select>
                            <select name="" id="" style="border-right: 1px solid silver;">
                                <option value="">BSCS</option>
                                <option value="">BSSW</option>
                                <option value="">BSPolScie</option>
                                <option value="">BSCRIM</option>
                                <option value="">BSED</option>
                            </select>
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                      </div>
                      <div class="table1" style="margin-right: 40px;">
                        <table class="table table-bordered table-sm">
                            <tr>
                                <th>Subject ID</th>
                                <th>Subject Code</th>
                                <th>Subject Description</th>
                                <th>Lab</th>
                                <th>Lec</th>
                                <th></th>
                            </tr>
        
                            <tr>
                                <td>BSCS 1000</td>
                                <td>CC 111</td>
                                <td>Computer Programming</td>
                                <td>1</td>
                                <td>3</td>
                                <td><button class="btn1">Add</button></td>
                            </tr>
        
                            <tr>
                                <td>BSCS 1000</td>
                                <td>CC 111</td>
                                <td>CS Fundamentals</td>
                                <td>0</td>
                                <td>3</td>
                                <td><button class="btn1">Add</button></td>
                            </tr>
        
                            <tr>
                                <td>BSCS 1000</td>
                                <td>CC 113</td>
                                <td>CS Elective</td>
                                <td>1</td>
                                <td>3</td>
                                <td><button class="btn1">Add</button></td>
                            </tr>
        
                            <tr>
                                <td>BSCS 1000</td>
                                <td>CC 114</td>
                                <td>Software Engineering</td>
                                <td>1</td>
                                <td>3</td>
                                <td><button class="btn1">Add</button></td>
                            </tr>
        
                            <tr>
                                <td>BSCS 1000</td>
                                <td>CC 114</td>
                                <td>Web Programming</td>
                                <td>1</td>
                                <td>3</td>
                                <td><button class="btn1">Add</button></td>
                            </tr>
                            <tr>
                                <td>BSCS 1000</td>
                                <td>CC 114</td>
                                <td>Software Engineering</td>
                                <td>1</td>
                                <td>3</td>
                                <td><button class="btn1">Add</button></td>
                            </tr>
                            <tr>
                                <td>BSCS 1000</td>
                                <td>CC 114</td>
                                <td>Software Engineering</td>
                                <td>1</td>
                                <td>3</td>
                                <td><button class="btn1">Add</button></td>
                            </tr>
                            <tr>
                                <td>BSCS 1000</td>
                                <td>CC 114</td>
                                <td>Software Engineering</td>
                                <td>1</td>
                                <td>3</td>
                                <td><button class="btn1">Add</button></td>
                            </tr>
                            <tr>
                                <td>BSCS 1000</td>
                                <td>CC 114</td>
                                <td>Software Engineering</td>
                                <td>1</td>
                                <td>3</td>
                                <td><button class="btn1">Add</button></td>
                            </tr>
                        </table>
                    </div> 
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div>
<!--BUTTON ENROLL-->
          <button type="button" class="btn" style="margin-bottom:20px;">
            Enroll
          </button>
    </div>

<!-- Modal-1 -->
  <div class="modal fade" id="exampleModal1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-body">
          <div class="search">
            <h1>Search Student</h1>
            <form action="">
                <input type="text" placeholder="Search...">
                <select name="" id="">
                    <option value="">Student Name</option>
                    <option value="">Student I.D</option>
                </select>
                <button type="submit">Search</button>
            </form>
          </div>
          <div class="table-modal">
          <table class="table table-bordered table-sm">
            <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Programs</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>01</td>
                <td>Gautam Adani</td>
                <td>BSCS</td>
                <td><button class="btn1">Select</button></td>
            </tr>

            <tr>
                <td>02</td>
                <td>Jeff Bezos</td>
                <td>BSED</td>
                <td><button class="btn1">Select</button></td>
            </tr>
            <tr>
                <td>03</td>
                <td>Bill Gates</td>
                <td>BSPolScie</td>
                <td><button class="btn1">Select</button></td>
            </tr>
            <tr>
                <td>04</td>
                <td>Larry Ellison</td>
                <td>BSCRIM</td>
                <td><button class="btn1">Select</button></td>
            </tr>
            <tr>
                <td>05</td>
                <td>Warren Buffett</td>
                <td>BSSW</td>
                <td><button class="btn1">Select</button></td>
            </tr>
            <tr>
                <td>06</td>
                <td>Mukesh Ambani</td>
                <td>BSCS</td>
                <td><button class="btn1">Select</button></td>
            </tr>
            <tr>
                <td>07</td>
                <td>Larry Page</td>
                <td>BSCS</td>
                <td><button class="btn1">Select</button></td>
            </tr>
            <tr>
                <td>08</td>
                <td>Sergey Brin</td>
                <td>BSCS</td>
                <td><button class="btn1">Select</button></td>
            </tr>
            <tr>
                <td>09</td>
                <td>Mark Zuckerberg</td>
                <td>BSCS</td>
                <td><button class="btn1">Select</button></td>
            </tr>
            <tr>
                <td>010</td>
                <td>Elon Musk</td>
                <td>BSCS</td>
                <td><button class="btn1">Select</button></td>
            </tr>

          </table>
        </div>
 
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="padding: 10px 70px;">Close</button>
        </div>
     
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>