<!DOCTYPE html>
<html>
    <head>
        <title>IT Helpdesk Ticketing System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/ticket.css">
        <!-- FontAwesowe @ local CSS folder -->
        <link rel="stylesheet" href="../css/font-awesome-all.css">
    </head>
    <body>
        <header id="fake-header"></header>
        <header>
            <div id="header-title">
                <h3>IT Helpdesk Ticketing System</h3>
            </div>
            <div id="header-nav">
            </div>
        </header>

        <div id="login-container" class="center-container">
            <form action="login-verification.php" method="POST" onsubmit="return validate_login_input();">
                <table id="table-login">
                    <tr>
                        <td><p style="text-align: center"><i class="fas fa-user fa-2x"></i></p></td>
                    </tr>

                    <tr>
                        <td><input id="input-username" type="text" name="username"></td>
                    </tr>

                    <tr>
                        <td><input id="input-password" type="text" name="password"></td>
                    </tr>

                    <tr>
                        <td><input id="btn-login" class="btn" type="submit" value="Login"></td>
                    </tr>

                    <tr>
                        <td><a href="">Forget password?</a></td>
                    </tr>

                    <tr>
                        <td><hr><a href="login-create-account.php">Create account</a></td>
                    </tr>
                </table>
            </form>
        </div>

        <script src="../js/login.js"></script>
        <script src="../js/main.js"></script>

        <?php
        include 'common/footer.php';
        ?>    

