<html>
    <head>
        <title>Menu Transaksi</title>
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
            <div class="col l12">
                <div class="row">
                    <h3 style="text-align: center">Detail Transaksi</h3>
                </div>
                <div class="row">
                    <div class="col l12">
                        <div class="card grey darken-4 white-text">
                            <div class="card-content">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input disabled id="namaCustomer" type="text" class="validate white-text" value="<?php echo $namaCustomer ?>">
                                                <label for="namaCustomer" class="active white-text">Nama</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">phone</i>
                                                <input disabled id="phoneCustomer" type="tel" class="validate white-text" value="<?php echo $phoneCustomer ?>">
                                                <label for="phoneCustomer" class="active white-text">Phone</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">location_on</i>
                                                <input disabled id="alamatCustomer" type="text" class="validate white-text" value="<?php echo $alamatCustomer ?>">
                                                <label for="alamatCustomer" class="active white-text">Alamat</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">my_location</i>
                                                <input disabled id="kotaCustomer" type="text" class="validate white-text" value="<?php echo $kotaCustomer ?>">
                                                <label for="kotaaCustomer" class="active white-text">Kota</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">email</i>
                                                <input disabled id="emailCustomer" type="text" class="validate white-text" value="<?php echo $emailCustomer ?>">
                                                <label for="emailCustomer" class="active white-text">E-Mail</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">perm_identity</i>
                                                <input disabled id="lineCustomer" type="text" class="validate white-text" value="<?php echo $lineCustomer ?>">
                                                <label for="lineCustomer" class="active white-text">Line</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form>
                    <div class="row">
                        <div class="col l6">
                            <div class="card grey darken-4 white-text">
                                <div class="card-content">
                                    <div class="card-title">Data Pembelian</div>
                                    <div class="row">
                                        <div class="input-field col l6 black-text">
                                            <select id="namaBarangSelect" onchange="setData()" name="namaBarang" class="browser-default" required>
                                                <option value="" disabled selected>Nama Barang</option>
                                                <?php foreach ($dataBarang as $row): ?>
                                                <option id="<?php echo $row->nama_barang; ?>" value="<?php echo $row->nama_barang; ?>"><?php echo $row->nama_barang; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="input-field col s6">
                                            <i class="material-icons prefix">loyalty</i>
                                            <input id="hrg" disabled  type="text" class="validate white-text" placeholder="Harga">
                                            <label class="active white-text" for="hrg">Harga</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l12">
                                            <p>Stock tersedia</p>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="input-field col l3">
                                            <input disabled name="stockS" type="number" min="1" class="validate white-text " value="10">
                                            <label class="active white-text" for="stockBarang">Stock S</label>
                                        </div>
                                        <div class="input-field col l3">
                                            <input disabled name="stockM" type="number" min="1" class="validate white-text" required>
                                            <label class="active white-text" for="stockBarang">Stock M</label>
                                        </div>
                                        <div class="input-field col l3"> 
                                            <input disabled name="stockL" type="number" min="1" class="validate white-text" required>
                                            <label class="active white-text" for="stockBarang">Stock L</label>
                                        </div>
                                        <div class="input-field col l3">
                                            <input disabled name="stockXL" type="number" min="1" class="validate white-text" required>
                                            <label class="active white-text" for="stockBarang">Stock XL</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col l12">
                                            <p>Size yang dibeli</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col l3">
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
                                            <input name="stockXL" type="number" min="1" class="validate" required >
                                            <label class="active" for="stockBarang">Stock XL</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col l6">
                            <div class="card grey darken-4 white-text">
                                <div class="card-content">
                                    <div class="card-title">Detail Harga</div>
                                    <div class="row">
                                        <div class="input-field col l12">
                                            <input disabled value="#" id="totalHarga" type="text" class="validate white-text">
                                            <label class="active white-text" for="totalHarga">Total Harga</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col l4">
                                            <input id="hargaDibayar" type="number" class="validate">
                                            <label class="active" for="hargaDibayar">Harga Dibayarakan</label>
                                        </div>
                                        <div class="input-field col l4">
                                            <input id="ongkir" type="number" class="validate">
                                            <label class="active" for="ongkir">Ongkir</label>
                                        </div>
                                        <div class="input-field col l4">
                                            <input disabled value="#" id="diskon" type="text" class="validate white-text">
                                            <label class="active white-text" for="diskon">Diskon</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col l12">
                                            <input id="tanggalTransaksi" type="date" class="datepicker">
                                            <label class="active white-text" for="tanggalTransaksi">Tanggal Transaksi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <div class="row">
                                        <div class="col l6">
                                            <button class="btn waves-effect waves-light" style="width: 100%">Cancel</button>
                                        </div>
                                        <div class="col l6">
                                            <button class="btn waves-effect waves-light" style="width: 100%">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <a href="<?php echo site_url('employee/tesbarang/abc');?> ">click</a>
        </main>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>

    </body>
</html>