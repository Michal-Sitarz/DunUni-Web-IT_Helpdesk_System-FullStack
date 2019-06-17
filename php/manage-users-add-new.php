<?php
    include 'common/header.php';
?>

<a href="manage-users.php">
    
<?php
    include 'common/header-nav.php';
?>
    
<div id="main-wrapper">

    <div id="content-wrapper">

        <h3>Add New USER</h3>
        <hr>

        <table>
            <tr>
                <td>First Name:</td>
                <td><input id="add-new-user-first-name" class="input-add-new"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input id="add-new-user-last-name" class="input-add-new"></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input id="add-new-user-email" class="input-add-new"></td>
            </tr>
            <tr>
                <td class="highlight">Password:</td>
                <td><input type="password" id="add-new-user-password"  class="input-add-new"></td>
            </tr>
            <tr>
                <td>Job role:</td>
                <td><input id="add-new-user-job-role" class="input-add-new"></td>
            </tr>
            <tr>
                <td>Department:</td>
                <td><input id="add-new-user-department" class="input-add-new"></td>
            </tr>
            <tr>
                <td>Location:</td>
                <td><input id="add-new-user-location" class="input-add-new"></td>
            </tr>
            <tr>
                <td></td>
                <td><button id="btn-add-new-user-submit" class="btn btn-add">Add</button></td>
            </tr>
        </table>

    </div>
</div>

<script src="../js/main-a.js"></script>
<script src="../js/new-add.js"></script>
<?php
    include 'common/footer.php';
?>