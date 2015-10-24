<html>
    <?php
    if (isset($this->session->userdata['logged_in'])) {
        $username = ($this->session->userdata['logged_in']['username']);
    } else {
        header("location: http://http://localhost:8080/obs/");
    }
    ?>
    <head></head>
    <body>this is main page <b>ADMIN</b>
        <a href="logout">click</a>
    </body>
</html>