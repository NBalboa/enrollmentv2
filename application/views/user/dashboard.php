<?php $this->load->view('partials/header') ?>
<link rel="stylesheet" href="<?= base_url('/assets/css/dashboard.css') ?>">
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
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>No. of Enrollees</h1>
                        <div class="icon-case">
                            <img src="images/33308.png" alt="" height="40px">
                            <h2 class="num">1000</h2>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>No. of Male</h1>
                        <div class="icon-case">
                            <img src="images/1997545-200.png" alt="" height="40px">
                            <h2 class="num">500</h2>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>No. of Female</h1>
                        <div class="icon-case">
                            <img src="images/1997442-200.png" alt="" height="40px">
                            <h2 class="num">500</h2>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>School Year:</h1>
                        <div class="year-select">
                            <select class="year" name="year">
                                <option class="year">2021-2022</option>
                                <option class="year">2022-2023</option>
                                <option class="year">2023-2024</option>
                                <option class="year">2024-2025</option>
                                <option value="year">2025-2026</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="content2">
                <div class="student-status">
                    <div class="title">
                        <h2>Student Status</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Program</th>
                            <th>Year</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>Mark Zuckerberg</td>
                            <td>BSCS</td>
                            <td>1st Year</td>
                            <td><a href="#" class="btn">Enrolled</a></td>
                        </tr>
                        <tr>
                            <td>Bill Gates</td>
                            <td>BSCS</td>
                            <td>2st Year</td>
                            <td><a href="#" class="btn">Enrolled</a></td>
                        </tr>
                        <tr>
                            <td>Elon Musk</td>
                            <td>BSCS</td>
                            <td>1st Year</td>
                            <td><a href="#" class="btn">Enrolled</a></td>
                        </tr>
                        <tr>
                            <td>Larry Ellison</td>
                            <td>BSCS</td>
                            <td>1st Year</td>
                            <td><a href="#" class="btn">Enrolled</a></td>
                        </tr>
                        <tr>
                            <td>Larry Page</td>
                            <td>BSCS</td>
                            <td>1st Year</td>
                            <td><a href="#" class="btn">Enrolled</a></td>
                        </tr>
                        <tr>
                            <td>Gautam Adani</td>
                            <td>BSCS</td>
                            <td>1st Year</td>
                            <td><a href="#" class="btn">Enrolled</a></td>
                        </tr>
                        <tr>
                            <td>Jeff Bezos</td>
                            <td>BSCS</td>
                            <td>1st Year</td>
                            <td><a href="#" class="btn">Enrolled</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Students</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Requirements</th>
                        </tr>
                        <tr>
                            <td>Manuel Villar</td>
                            <td>Pending</td>
                            <td><a href="#" class="btn1">View</a></td>
                        </tr>
                        <tr>
                            <td>Enrique Razon Jr.</td>
                            <td>Pending</td>
                            <td><a href="#" class="btn1">View</a></td>
                        </tr>
                        <tr>
                            <td>Mike Tyson</td>
                            <td>Pending</td>
                            <td><a href="#" class="btn1">View</a></td>
                        </tr>
                        <tr>
                            <td>Manuel Villar</td>
                            <td>Pending</td>
                            <td><a href="#" class="btn1">View</a></td>
                        </tr>
                        <tr>
                            <td>Manuel Villar</td>
                            <td>Pending</td>
                            <td><a href="#" class="btn1">View</a></td>
                        </tr>
                        <tr>
                            <td>Manuel Villar</td>
                            <td>Pending</td>
                            <td><a href="#" class="btn1">View</a></td>
                        </tr>
                        <tr>
                            <td>Manny Pacquiao</td>
                            <td>Pending</td>
                            <td><a href="#" class="btn1">View</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('partials/footer') ?>