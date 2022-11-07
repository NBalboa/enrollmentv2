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
    font-weight: 500;
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
    margin-top: 174.5px;
    justify-content: center;
    align-items: center;
    position:fixed;
}
.side-menu li a{
    font-size: 24px;
    padding: 10px;
    color: white;
    display: flex;
    align-items: center;
    text-decoration: none;
}
.side-menu li a:hover{
    background: white;
    color: #f05462;
}

.header{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    padding: 10px;
    border-bottom: 2px solid #aaa;
}
.picture img{
    border: 2px solid #aaa;
    margin-top: 10px;
    margin-left: 20px;
    width: 260px;
    height: 250px;
    float: left;
}

        
 .fields{
    font-size: 16px;
    font-weight: 400;
    display: flex;
    align-items: center;
    margin-left: 300px;
    flex-wrap: wrap; 
}
.field-1{
    display:flex;
    align-items:center;
}
 .fields input{
    width: 280px;
    height: 35px;
    display: flex;
    border-radius: 5px;
    border: 1px solid #aaa;
}
.input-field,
.input-field-1{
    padding: 4px;
}

.input-field-1 input{
    width: 570px;
    height: 35px;
    display: flex;
    border-radius: 5px;
    border: 1px solid #aaa;
}  

/* Table Styling */
table{
    text-align: center;
    width: 100%;
    margin-top: 10px;
    margin-left: 23px;
    border: 2px solid rgb(49, 49, 49);
    padding: 10px;
}
th, td{
    border: 2px solid rgb(48, 47, 47);
    text-align: center;
    padding: 5px 30px;

}
.btn1{
    background: #09992d;
    color: #fff;
    padding: 0px 30px;
    text-align: center;
    border: 2px solid #09992d;
}
.btn1:hover{
    background: #fff;
    color: #333;
    padding: 0px 30px;
    text-align: center;
    border: 2px solid #09992d;
}


.btn-add{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-top: 20px;
}

.btn-add .btn{
    margin-left: 10px;
    height: 45px;
    width: 170px;
    outline: none;
    color: #fff;
    background-color: rgb(235, 27, 27) ;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 1px;
}
.btn-add .btn:hover{
    border: 2px solid rgb(235, 27, 27);
    font-weight: 500;
}

.modal-content{
    width: 100%;
    height: 91vh;
}

.search h1{
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 1px solid #aaa;
    font-size: 26px;
    padding: 10px;
    text-transform: uppercase;
    position: sticky;
}
.search form{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
    position: sticky;
}
.search input{
    width: 100%;
    height: 45px;
    outline: none;
    border-radius: 50px 0px 0px 50px;
    border: 1px solid #aaa;
    border-right: 1px solid silver;
}

.search option{
    color: #ffffff;
}
.search select{
    border: 1px solid #aaa;
    border-left: none;
    border-right: none;
    padding: 0 10px;
    height: 45px;
    outline: none;
    background: gray;
    color: #ffffff;
}

.search button{
    border: 0;
    outline: none;
    height: 45px;
    border-radius: 0px 50px 50px 0px;
    padding: 0 45px;
    background-color:  #186abd;
    color: white;
    
}
.table-modal{
    margin-top: 10px;
    margin-right: 40px;
}

.modal-footer button{
    background-color: rgb(235, 27, 27);
}
.modal-footer button:hover{
    border: 2px solid rgb(235, 27, 27);
}

.btn-add-student{
    width: 20px;
    background-color: black;
}

.modal-header1 h1{
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 1px solid #aaa;
    font-size: 26px;
    padding: 10px;
    text-transform: uppercase;
    position: sticky;
}
.table1{
    margin-top: 30px;
}