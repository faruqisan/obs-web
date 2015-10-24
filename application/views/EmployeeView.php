<html>
    <head>
        <title>OBS! Employee</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body class="grey darken-2">
        <header>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper grey darken-4">
                        <div style="margin-left: 20px;margin-right: 20px ">
                            <ul class="left ">
                                <li>
                                    <a class=" white-text tooltipped" data-position="bottom" data-delay="50" data-tooltip="Main" href="<?php echo site_url('employee'); ?>" >
                                        <i class="large material-icons">dashboard</i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="right">
                                <li>
                                    <a href="#!" class="white-text">
                                        <?php echo 'Employee'; ?>
                                    </a>
                                </li>
                                <li>
                                    <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Logout" href="<?php echo site_url('login/logout'); ?>"style="color: white">
                                        <i class="large material-icons">power_settings_new</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="container" style="margin-top: 4%">
                <div class="row">
                    <div class="col l4">
                        <div class="card grey darken-4 hoverable">
                            <div class="card-image">
                                <img src="<?php echo base_url(); ?>assets/img/barangicon.png">
                                <span class="card-title black-text">Barang</span>
                            </div>
                            <div class="card-content">
                                <p class="white-text">Tambah, Hapus, dan Update data barang.</p>
                            </div>
                            <div class="card-action">
                                <a href="<?php echo site_url('employee/menubarang'); ?>">Barang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col l4">
                        <div class="card grey darken-4 hoverable">
                            <div class="card-image">
                                <img src="<?php echo base_url(); ?>assets/img/transaksiicon.png">
                                <span class="card-title black-text">Transaksi</span>
                            </div>
                            <div class="card-content">
                                <p class="white-text">Transaksi Baru, Customer added after transaction sucess</p>
                            </div>
                            <div class="card-action">
                                <a href="<?php echo site_url('employee/menutransaksi'); ?>">Transaksi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col l4">
                        <div class="card grey darken-4 hoverable" >
                            <div class="card-image">
                                <img src="<?php echo base_url(); ?>assets/img/customericon.png">
                                <span class="card-title black-text">Customer</span>
                            </div>
                            <div class="card-content">
                                <p class="white-text">View data Customer, Update data Customer.</p>
                            </div>
                            <div class="card-action">
                                <a href="#">Customer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
    </body>
</html>