<html>
    <head>
        <title>Login</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/materialize.min.css"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body div class="grey darken-3">
        <header></header>
        <main>
            <div class="container" style="margin-top: 5%">
                <div class="row">
                    <div class="col l12">
                        <div class="card grey darken-4">
                            <?php echo form_open('login/processlogin'); ?>
                            <div class="card-content">
                                <div class="card-title white-text" style="text-align: center">
                                    <b>LOGIN</b>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="input-field col l12">
                                            <label for="username">Username</label>
                                            <input type="text" id="username" name="username" class="validate white-text" style="text-align: center" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col l12">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" name="password" class="validate white-text" style="text-align: center" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-action">
                                <div class="container">
                                    <div class="row">
                                        <div class="col l12">
                                            <button type="submit" value="Login" class="btn waves-effect waves-light grey darken-3" style="width: 100%"><i class="material-icons right">play_arrow</i>Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer></footer>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
    </body>
</html>