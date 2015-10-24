<html>
    <head>
        <title>Barang</title>
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
                                    <form>
                                        <div class="input-field center">
                                            <input id="searchField" type="search" required>
                                            <label for="search"><i class="material-icons">search</i></label>
                                            <i class="material-icons">close</i>
                                        </div>
                                    </form>
                                </li>
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
            <div class="row" style="margin-top:20px">
                <div class="col l3">
                    <div class="card grey darken-4">
                        <div class="card-content">
                            <a href="<?php echo site_url('employee/viewTambahBarang'); ?>" id="tambahBarangButton" class="waves-effect waves-light btn grey darken-3 modal-trigger" style="margin-bottom: 10px ; width: 100%">
                                <i class="material-icons left">
                                    add
                                </i>
                                tambah barang
                            </a>
                            <a href="#" id="hapusBarangButton" class="disabled waves-effect waves-light btn grey darken-3" style="margin-bottom: 10px ; width: 100%">
                                <i class="material-icons left">
                                    delete
                                </i>
                                Hapus barang
                            </a>
                        </div>
                    </div>
                </div>
                <div  class="col l9">
                    <div class="row">
                        <div class="col l12">
                            <div class="card grey lighten-4">
                                <div class="card-content">
                                    <div class="card-title black-text">Table Barang</div>
                                    <table id="tableBarang" class="highlight tablesorter" style="margin-top: 10px;margin-bottom: 10px">
                                        <thead >
                                            <tr>
                                                <th data-field="id">Id</th>
                                                <th data-field="id">Produk</th>
                                                <th data-field="name">Kategori</th>
                                                <th data-field="price">Harga</th>
                                                <th data-field="price">S</th>
                                                <th data-field="price">M</th>
                                                <th data-field="price">L</th>
                                                <th data-field="price">Xl</th>
                                                <th data-field="price">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($query as $row): ?>
                                                <tr> 
                                                    <td><?php echo $row->id_barang; ?></td>
                                                    <td><?php echo $row->nama_barang; ?></td>
                                                    <td><?php echo $row->category_barang; ?></td>
                                                    <td><?php echo $row->harga_barang; ?></td>
                                                    <td><?php echo $row->stock_s; ?></td>
                                                    <td><?php echo $row->stock_m; ?></td>
                                                    <td><?php echo $row->stock_l; ?></td>
                                                    <td><?php echo $row->stock_xl; ?></td>
                                                    <td><?php echo $row->stock_s + $row->stock_m + $row->stock_l + $row->stock_xl; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <footer></footer>

    </body>
</html>