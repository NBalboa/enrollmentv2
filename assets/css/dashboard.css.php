<?php
    header('Content-type: text/css');
?>

*{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            min-height: 100vh;
            display: flex;
        }
        /* Sidenav Styling */
        a{
            text-decoration: none;
        }
        li{
            list-style: none;
        } 
        .side-menu{
            background: #b30000;
            width: 20vw;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .side-menu .admin{
            height: 10hv;
            margin-top: 110px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 20px;
        }
        .avatar .avatar{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .avatar{
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin-left: 45px;
            margin-top: 10px;
            position: fixed;
        }
        .side-menu ul{
            margin-top: 20px;
        }
        .side-menu li a{
            font-size: 24px;
            padding: 10px 40px;
            color: white;
            display: flex;
            align-items: center;
        }
        .side-menu li a:hover{
            background: white;
            color: #f05462;
        }

        /* Header Styling */
        .container{
            position: absolute;
            right: 0;
            width: 80vw;
            height: 100vh;
            background: #f1f1f1;
        }

        /* Cards */
        .container .content{
            position: relative;
            margin-top: 5vh;
            min-height: 90vh;
        }
        .container .content .cards{
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .container .content .cards .card{
            width: 200px;
            height: 120px;
            background: white;
            margin: 20px 10px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .container .content .cards .card1{
            width: 190px;
            height: 100px;
            background: white;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .container .content .cards .card1 h1{
            font-size: 24px;
            color: #e72b3b;
        }
        .container .content .cards .card1 h2{
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }
        .container .content .cards .card h1{
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            color: #e72b3b;
        }
        .container .content .cards .card .icon-case{
            margin-top: 15px;
            font-size: 25px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .year-select {
            overflow: hidden;
            height: 40px;
            border: 2px solid #333; 
            border-radius: 5px;
        }
        
        .year-select select {          
            font-size: 20px;
            border-radius: 5px;
            width: 150px;
            height: 40px;
            justify-content:center ;
            text-align: center;
            /* -webkit-appearance: none; */
        }
        .year-select option .year {
            padding: 10px;
        }

        /* Content 2 */
         .container .content .content2{
            min-height: 60vh;
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        .container .content .content2 .student-status{
            min-height: 50vh;
            flex: 5;
            background: white;
            margin: 0 25px 25px 25px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            display: flex;
            flex-direction: column;
        }
        .container .content .content2 .new-students{
            flex: 3;
            background: white;
            min-height: 50vh;
            margin: 0 25px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            display: flex;
            flex-direction: column;
        } 
        .title{
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 15px 10px;
            border-bottom: 2px solid #999;
        }
        .btn{
            background: #f05462;
            color: white;
            padding: 5px 10px;
            text-align: center;
        }
        .btn:hover{
            color: #f05462;
            background: white;
            padding: 3px 8px;
            border: 2px solid;
        }
        .btn1{
            background: #09992d;
            color: #fff;
            padding: 5px 30px;
            text-align: center;
        }
        .btn1:hover{
            color:#333;
            background: white;
            padding: 5px 30px;
            text-align: center;
            border: 2px solid #09992d;
        }
/* Table Styling */
        table{
            padding: 10px;
        }
        th, td{
            text-align: left;
            padding: 8px;
        }


        