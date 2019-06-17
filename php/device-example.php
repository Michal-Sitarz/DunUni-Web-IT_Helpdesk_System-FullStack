<?php
    include 'common/header.php';
?>

<a href="manage-devices.php">
    
<?php
    include 'common/header-nav.php';
?>
    
<div id="main-wrapper">

    <div id="content-wrapper">

        <h3>DEVICE: DUNXX000?</h3>
        <hr>

        <table>
            <tr>
                <td>Hostname:</td>
                <td><input id="add-new-device-hostname" class="input-add-new" value="Device Hostname" disabled></td>
            </tr>
            <tr>
                <td>Type:</td>
                <td><input id="add-new-device-type" class="input-add-new" value="Device Type" disabled></td>
            </tr>
            <tr>
                <td>Serial No:</td>
                <td><input id="add-new-device-serial-number" class="input-add-new" value="SerialNo0909090909090909" disabled></td>
            </tr>
            <tr>
                <td>User/Owner:</td>
                <td><input id="add-new-device-owner" class="input-add-new" value="Ted Testovny"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button id="btn-device-save" class="btn btn-add">Save</button>
                    <button id="btn-device-cancel" class="btn btn-add">Cancel</button>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button id="btn-device-remove" class="btn btn-add">Remove</button>
                </td>
            </tr>
        </table>
    </div>
</div>

<script src="../js/main-a.js"></script>
<script src="../js/new-add.js"></script>
<?php
    include 'common/footer.php';
?>
