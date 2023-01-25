<html>
    <head>
        <title>Login Ges</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <body>
        <h1>Login Aplikasi</h1>
        <h6>Admin Access</h6>
        <form action="proses_admin.php" method="post">
            <table class="table table-bordered">
                <tr>
                    <td>Admin</td>
                    <td>:</td>
                    <td><input type="text" name="admin" id="admin"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="pass" id="pass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="login"></td>
                </tr>
                <tr>
                    <td>user klik <a href="../user/login.php">sini</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>