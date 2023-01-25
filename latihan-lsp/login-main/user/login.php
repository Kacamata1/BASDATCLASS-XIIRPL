<html>
    <head>
        <title>Login Ges</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <body>
        <h1>Login Aplikasi</h1>
        <h6>User Access</h6>
        <form action="proses.php" method="post">
            <table class="table table-bordered">
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" id="email"></td>
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
                    <td>admin klik <a href="../admin/login_admin.php">sini</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>