<?php
    include 'common/header.php';
?>

<a href="manage-devices.php">
    
<?php
    include 'common/header-nav.php';
?>
    
<div id="main-wrapper">

    <div id="content-wrapper">

        <h3>Add New DEVICE</h3>
        <hr>

        <table>
            <tr>
                <td>Hostname:</td>
                <td><input id="add-new-device-hostname" class="input-add-new"></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td><input id="add-new-device-type" class="input-add-new"></td>
            </tr>
            <tr>
                <td>Serial No:</td>
                <td><input id="add-new-device-serial-number" class="input-add-new"></td>
            </tr>
            <tr>
                <td>User/Owner:</td>
                <td><input id="add-new-device-owner" class="input-add-new"></td>
            </tr>
            <tr>
                <td></td>
                <td><button id="btn-add-new-device-submit" class="btn btn-add">Add</button></td>
            </tr>
        </table>
    </div>
</div>

<script src="../js/main-a.js"></script>
<script src="../js/new-add.js"></script>
<?php
    include 'common/footer.php';
?>
