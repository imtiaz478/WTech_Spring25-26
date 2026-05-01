<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/loginValidation.php" method="post">
        <?php
        echo "<h1 style='color: red'>Login</h1>"
        ?>
        <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>
             <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>   
        </table>
    </form>
</body>
</html>