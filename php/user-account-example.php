<?php
    include 'common/header.php';
?>

<a href="manage-users.php">

<?php
    include 'common/header-nav.php';
?>

<div id="main-wrapper">

    <div id="content-wrapper">

        <h3>User Account details</h3>
        <hr>

        <table>
            <tr>
                <td>First Name:</td>
                <td><input id="add-new-user-first-name" class="input-add-new" value="Ted"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input id="add-new-user-last-name" class="input-add-new" value="Testovny"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input id="add-new-user-email" class="input-add-new" value="ted.testovny@test.com"></td>
            </tr>
            <tr>
                <td class="highlight">Password:</td>
                <td><button id="btn-user-account-reset-password" class="btn btn-add">Reset password</button></td>
            </tr>
            <tr>
                <td>Job role:</td>
                <td><input id="add-new-user-job-role" class="input-add-new" value="Tester"></td>
            </tr>
            <tr>
                <td>Department:</td>
                <td><input id="add-new-user-department" class="input-add-new" value="Quality"></td>
            </tr>
            <tr>
                <td>Location:</td>
                <td><input id="add-new-user-location" class="input-add-new" value="U1F1"></td>
            </tr>
            <tr>
                <td></td>
                <td><button id="btn-user-account-update" class="btn btn-add">Save</button></td>
            </tr>
            <tr>
                <td></td>
                <td><button id="btn-user-account-cancel" class="btn btn-add">Cancel</button></td>
            </tr>
            <tr>
                <td colspan="2"><hr>User Account wipe-out <span class="highlight">[warning: irreversible action]</span></td>
            </tr>
            <tr>
                <td></td>
                <td><button id="btn-user-account-delete" class="btn btn-add">Delete</button></td>
            </tr>
        </table>

    </div>
</div>

<script src="../js/main-a.js"></script>
<script src="../js/new-add.js"></script>
<?php
    include 'common/footer.php';
?>