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
            margin-left: 74.5px;
            position: fixed;
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
            position: fixed;
            margin-top: 174.5px;
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

        .container {
            width: 60rem;
            background: white;
            border: 1px solid #aaa;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            display: flex;
            flex-direction: column;
            margin-left: 60px;
            
        }

        .header{
            border-bottom: 2px solid #999;
            padding: 10px;
            margin-bottom: 15px;
        }
        .header h2{
            display: flex;
            justify-content: center;
            padding: 5px;
            align-items: center;
        }

/* Container Styling */

        .picture{
            border: 2px solid #aaa;
            height: 160px;
            width: 160px;
            position: relative;
            top: 30px;
            left: 720px;
        }
        .picture p{
            display: flex;
            padding-top: 60px;
            text-align: center;
            font-size: 14px;

        }

        .data{
            display: flex;
            padding: 10px 50px;
        }
        .data .data-title{
            margin-right: 15px;
            margin-top: 0;
            font-size: 18px;
        }

        .one{
            position: absolute;
            top: 120px;
        }

        .filled p{
            margin-left: 50px;
            font-size: 16px;
        }

        .college{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px;
            font-size: 16px;
        }
        .college select{
            height: 35px;
            border-radius: 5px;
            font-size: 16px;
            border: 1px solid #aaa;
        }

        .college .input-id{
            margin-right: 10px;
            margin-left: 30px;
            font-size: 18px;
            padding-top: 30px;
        }

        .types-admission{
            padding-top: 70px;
            margin-right: 110px;
            display: flex;
            justify-content: center;
            text-align: center;
        }
        .input-admission label{
            justify-content: center;
            margin-left: 40px;
        }

        .types-admission select{
            height: 35px;
            border-radius: 5px;
            font-size: 16px;
            margin-left: 50px;
            width: 160px;
            border: 1px solid #aaa;

        }

        .fields-id{
            margin-top: 50px;
            display: flex;
            justify-content: center;
            text-align: center;
        }
        .fields-id input{
            height: 35px;
            border-radius: 5px;
            border: 1px solid #aaa;
        }

        .first{
            margin-top: 50px;
        }
        .form .title{
            font-weight: 500;
            padding:20px;
            font-size: 16px;
        }
        
        .form .fields{
            font-size: 16px;
            font-weight: 400;
             display: flex;
             align-items: center;
             justify-content: space-between;
             padding: 20px;
             margin: 20px;
             flex-wrap: wrap; 
        }
        .form .fields input{
            width: 250px;
            height: 35px;
            display: flex;
            padding: 5px;
            border-radius: 5px;
            flex-direction: column;
            border: 1px solid #aaa;
        }

         .gender-section{
            display: flex;
            align-items: center;
            font-size: 16px;
            margin-left: 50px;
            
        }
        .gender-section .input-field-1{
           margin-right: 100px;
           font-size: 16px;
           
        } 
        .gender-section .input-field-1 #gender{
            margin-bottom: 50px;
            font-size: 16px;
           justify-content: center;
           align-items: center;
            
        }

        .gender-section .input-field-1 input{
            margin-top: 10px;
            border: 1px solid #aaa;
            padding: 8px 30px;
            border-radius: 5px;
        }
/* Address Section Styling */

        .permanent{
            margin-left: 0;
            padding: 30px;
        }
        .address .title-address{
            font-weight: 500;
            padding:20px;
            font-size: 16px;
        }

        .address .input-address{
            font-size: 16px;
            font-weight: 400;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
             
        }

        .address .input-address input{
            width: 80%;
            height: 35px;
            display: flex;
            padding: 5px;
            border-radius: 5px;
            margin: 4px 0;
            border: 1px solid #aaa;
        }
        .address label{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: 400;
            
        }

        .fields .input-field2 label{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .fields3 .title-parent{
            margin:20px;
            font-size: 20px;
            font-family: 500;
        }

        .fields3 .input-parent{
            font-size: 16px;
            font-weight: 400;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .fields3 label{
            margin-left: 50px;
        }
        .fields3 .input-parent input{
            justify-content: center;
            margin-top: 10px;
            margin-right: 70px;
            border: 1px solid #aaa;
            height: 35px;
            width: 60%;
            border-radius: 5px;
        }


        form .button{
            height: 45px;
            margin: 45px 0;
            display: flex;
            justify-content: flex-end;
            align-items:center ;
        }
        form .button button{
            margin-right: 80px;
            height: 100%;
            width: 180px;
            outline: none;
            color: #fff;
            background-color: rgb(235, 27, 27) ;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            /* position: relative;
            left: 20px; */
        }
        form .button button:hover{
            border: 2px solid rgb(235, 27, 27);
            font-weight: 500;
            background: white;
            color: #333;
        }