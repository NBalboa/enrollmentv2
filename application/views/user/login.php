<?php $this->load->view('partials/header_log') ?>
    <form class="login-box" action="<?= base_url('main/process_login') ?>" method="POST">
        <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
        <img src="<?= base_url('/assets/img/Western-Mindanao-State-University-WMSU-logo1.jpg') ?>" alt="" class="avatar">
            <h1>Login Here</h1>
            <div class="form">
                <p>Username</p>
                <input type="text" placeholder="Enter your Username" id="username" name="username">
                <p>Password</p>
                <input type="password" placeholder="Enter your password" id="password" name="password">                
            </div>
                <div class="btn">
                    <input type="submit" value="Login"/>
                </div>
    </form>
    <script src="<?= base_url('assets/javascript/login.js') ?>"></script> 
<?php $this->load->view('partials/footer') ?>