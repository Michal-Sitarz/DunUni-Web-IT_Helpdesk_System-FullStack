<?php
    include 'common/header.php';
?>

</header>
</div>

<div id="login-container" class="center-container">
    <table id="table-login">
        <tr>
            <td><p style="text-align: center"><i class="fas fa-user fa-2x"></i></p></td>
        </tr>

        <tr>
            <td><input id="input-username" type="text"></td>
        </tr>

        <tr>
            <td><input id="input-password" type="text"></td>
        </tr>

        <tr>
            <td><button id="btn-login" class="btn" type="button">Login</button></td>
        </tr>

        <tr>
            <td><a href="">Forget password?</a></td>
        </tr>

        <tr>
            <td><hr><a href="login-create-account.php">Create account</a></td>
        </tr>
    </table>
</div>

<script src="../js/login.js"></script>
<script src="../js/main.js"></script>

<?php
    include 'common/footer.php';
?>    

