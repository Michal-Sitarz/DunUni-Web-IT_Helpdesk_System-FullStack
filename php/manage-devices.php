<?php
    include 'common/header.php';
?>

<a href="home-a.php">
            
<?php
    include 'common/header-nav.php';
?>
            
<div id="main-wrapper">

    <nav>
        <div id="search-bars">
            <div>
                <input id="search-bar-device" type="text">
                <button class="btn-search">
                    <i class="fas fa-search fa-lg"></i>
                </button>
            </div>
        </div>
        <button class="btn-mainpage" id="btn-add-new-device">[+] Add New Device</button>    
    </nav>
    <hr>

    <div id="content-wrapper">

        <h3>List of all devices</h3>
        <div id="tbl-tickets-list">
            <table>
                <thead>
                    <tr>
                        <th>Hostname</th>
                        <th>Type</th>
                        <th>Owner (User)</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DUNFD0001</td>
                        <td>Desktop PC</td>
                        <td>Ted Testovny</td>
                        <td><a href="device-example.html">More</a></td>
                    </tr>
                    <tr>
                        <td>DUNFD0007</td>
                        <td>Desktop PC</td>
                        <td>Ted Testovny</td>
                        <td><a href="device-example.html">More</a></td>
                    </tr>
                    <tr>
                        <td>DUNFL0002</td>
                        <td>Laptop</td>
                        <td>Ted Testovny</td>
                        <td><a href="device-example.html">More</a></td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>

<script src="../js/main-a.js"></script>
<script src="../js/search-bars.js"></script>
<?php
    include 'common/footer.php';
?>