
<?php
    header('Content-type: text/css');
?>
*{
        box-sizing: border-box;
    }
    body{
        margin: 0;
        padding: 0;
        background: url('../img/wmsupagagian.jpg');
        font-family: 'Poppins',sans-serif;
        background-repeat: no-repeat;
        height: 550px;
        display: flex;
        align-items: center;
        justify-content: center; 
    }

    .login-box{
        margin-top: 100px;
        width: 400px;
        height: 500px;
        background:  rgba(0, 0, 0, 0.671);
        position: absolute;
        color: #fff;
        box-sizing: border-box;
        transform: traslate(-50, -50%);
        padding: 70px 30px;
        border-radius: 5px;
    }

    .avatar{
        width: 120px;
        height: 120;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }

    h1{
        margin: 0;
        margin-top: 20px;
        padding: 0 0 20px;
        text-align: center;
        font-size: 24px;
    }
    .login-box p{
        font-size: 18px;
        font-weight: bold;
    }
    .login-box .form input{
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        border: none;
        border-radius: 6px;
        font-size: 16px;
    }

    .login-box .btn input[type="submit"]{
        margin-top: 20px;
        border: none;
        border-radius: 6px;
        outline: none;
        height: 40px;
        width: 340px;
        background-color: #b30000;
        font-size: 18px;
        color: #fff;
    }
    .icon {
        position: relative;
        color: black;
        bottom: -30px;
        right: 10px;
        display: flex;
        justify-content: flex-end;
    }