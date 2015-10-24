<html>
    <head>
        <title>Menu Transaksi</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>        
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

        <script type="text/javascript">
            $(function () {
                var namaCustomer = ['<?php echo implode("','", $namaBarang); ?>'];
                $("#customerNameInput").autocomplete({
                    source: namaCustomer
                });
            });
        </script>

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
            <div class="row">
                <div class="container" style="margin-top: 5%">
                    <?php echo form_open('employee/submitCustName'); ?>
                        <div class="col l12">
                        <div class="card grey darken-4">
                            <div class="card-content ">
                                <input placeholder="Nama Customer" name="customerNameInput" id="customerNameInput" type="text" class="validate white-text" style="text-align: center ; font-size: 24">
                            </div>
                            <div class="card-action">
                                <button type="submit" class="waves-effect waves-light btn grey darken-2" style="width: 100%">Submit</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>

    </body>
</html>