<html>
    <head>
        <title>Tambah Barang</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>


        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.tablesorter.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body class="grey darken-3">

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
            <div class="container" style="margin-top: 1%">
                <div class="row">
                    <div class="col l12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-title black-text" style="text-align: center">Tambah Barang</div>
                                <?php echo form_open('employee/simpanbarang'); ?>
                                    <div class="card-content black-text ">
                                        <div class="row">
                                            <div class="input-field col l12">
                                                <i class="material-icons prefix">label</i>
                                                <input name="namaBarang" type="text" required>
                                                <label class="active" for="namaBarang">Nama Barang</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col l6">
                                                <i class="material-icons prefix">loyalty</i>
                                                <input name="hargaBarang" type="number" min="1" class="validate" required>
                                                <label class="active" for="hargaBarang">Harga Barang</label>
                                            </div>
                                            <div class="input-field col l6">
                                                <select name="kategoriBarang" class="browser-default" required>
                                                    <option value="" disabled selected>Category</option>
                                                    <option value="Sweater">Sweater</option>
                                                    <option value="Hoodie">Hoodie</option>
                                                    <option value="Kemeja">Kemeja</option>
                                                    <option value="T-Shirt">T-Shirt</option>
                                                    <option value="Polo Shirt">Polo Shirt</option>
                                                    <option value="Long Sleeve">Long Sleeve</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col l3">
                                                <i class="material-icons prefix">view_column</i>
                                                <input name="stockS" type="number" min="1" class="validate" required>
                                                <label class="active" for="stockBarang">Stock S</label>
                                            </div>
                                            <div class="input-field col l3">
                                                <input name="stockM" type="number" min="1" class="validate" required>
                                                <label class="active" for="stockBarang">Stock M</label>
                                            </div>
                                            <div class="input-field col l3"> 
                                                <input name="stockL" type="number" min="1" class="validate" required>
                                                <label class="active" for="stockBarang">Stock L</label>
                                            </div>
                                            <div class="input-field col l3">
                                                <input name="stockXL" type="number" min="1" class="validate" required>
                                                <label class="active" for="stockBarang">Stock XL</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="file-field input-field col l12">
                                                <div class="btn disabled">
                                                    <span>Picture</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-action right">
                                        <div class="row">
                                            <div class="col l12">
                                                <button class="btn waves-effect waves-light" type="reset">Cancel
                                                    <i class="material-icons right">error_outline</i>
                                                </button>
                                                <button class="btn waves-effect waves-light" type="submit" name="action">Simpan
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>