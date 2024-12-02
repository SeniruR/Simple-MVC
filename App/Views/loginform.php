<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/loginformstyle.css">
    <script src="./js/login.js"></script>
</head>
<body>
    <div class="main">
        <div class="main_box">
            <h2>Login</h2>
            <form name="login" action="processlogin" method="post" onsubmit="return validateForm()">
                <table>
                    <tr>
                        <td><label for="name">Username:</label></td>
                        <td><input type="text" id="name" name="name" placeholder="Enter your UserName"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td><input type="password" id="password" name="password" placeholder="Enter your password"></td>
                    </tr>
                    <tr class="button">
                        <td colspan="2"><button type="submit">Login</button></td>
                    </tr>
                    <?php if (isset($_SESSION['error'])) { ?>
                        <tr>
                            <td colspan="2"><p style="color: red; text-align: center"><?php echo $_SESSION['error']; ?></p></td>
                        </tr>
                    <?php } ?>
                </table>
                <p>If you haven't signed up yet? <a href="#">sign up</a></p>
                <p><a href="#">Forget Password</a></p>
            </form>
        </div>
    </div>
</body>
</html>
