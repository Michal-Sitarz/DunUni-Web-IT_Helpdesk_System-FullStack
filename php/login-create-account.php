<?php
include 'common/header.php';
?>
</div>
</header>


<div id="main-wrapper">

    <div id="content-wrapper">

        <h3>Create account</h3>
        <hr>
        <form action="login-create-account-verify.php" method="POST" onsubmit="return submitNewUser();">
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input id="add-new-user-first-name" class="input-add-new" type="text" name="firstName"></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input id="add-new-user-last-name" class="input-add-new" type="text" name="lastName"></td>
                </tr>
                <tr>
                    <td>E-mail <span class="faded-out">(Username)</span>:</td>
                    <td><input id="add-new-user-email" class="input-add-new" type="text" name="username"></td>
                </tr>
                <tr>
                    <td class="highlight">Password:</td>
                    <td><input id="add-new-user-password" class="input-add-new" type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Department:</td>
                    <td><input id="add-new-user-department" class="input-add-new" type="text" name="department"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button id="btn-create-account-submit" class="btn">Submit</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button id="btn-create-account-cancel" class="btn">Cancel</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>

<script src="../js/main-a.js"></script>
<script src="../js/new-add.js"></script>
<?php
include 'common/footer.php';
?>