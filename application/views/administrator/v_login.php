<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Program Studi Sistem Informasi</title>

    <!-- Bootstrap core CSS -->
    <link  href="<?php echo base_url();?>assets/administrator/css/bootstrap.min.css" rel="stylesheet">
    <link  href="<?php echo base_url();?>assets/administrator/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link  href="<?php echo base_url();?>assets/administrator/css/animate.min.css" rel="stylesheet">
    <link  href="<?php echo base_url();?>assets/administrator/css/custom.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/administrator/js/jquery.min.js"></script>
</head>

<body style="background:#F7F7F7;">    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
            
        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form role="form" action="<?php echo base_url();?>index.php/c_login/login" method="post">
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" name="username" class="form-control" placeholder="Username" value="" required=""/>
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password" value="" required=""/>
                        </div>
                        <div>
                            <p style="color:red;"><?php echo $this->session->flashdata('notification')?></p>
                            <button style="margin-left: 80px;" type="submit" class="btn btn-default submit col-sm-3">Login</button>
                            <button type="reset" class="btn btn-default submit col-sm-3">Clear</button>
                        </div>
                    </form>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1> Universitas Jember</h1>
                                <p>©2016 All Rights Reserved. Nafta Ryandika Isyaca Fahmi Powered by Program Studi Sistem Informasi.</p>
                            </div>
                        </div>
                    
                </section>
            </div>
        </div>
    </div>

</body>

</html>