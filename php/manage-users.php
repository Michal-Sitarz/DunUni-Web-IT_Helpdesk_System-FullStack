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
                <input id="search-bar-user" type="text">
                <button class="btn-search">
                    <i class="fas fa-search fa-lg"></i>
                </button>
            </div>
        </div>
        <button class="btn-mainpage" id="btn-add-new-user">[+] Add New User</button>
    </nav>
    <hr>

    <div id="content-wrapper">

        <h3>List of all users</h3>
        <div id="tbl-tickets-list">
            <table>
                <thead>
                    <tr>
                        <th>User</th>
                        <th>E-mail</th>
                        <th>Department</th>
                        <th>Location</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ted Testovny</td>
                        <td>ted.testovny@test.com</td>
                        <td>IT</td>
                        <td>U1F1</td>
                        <td><a href="user-account-example.php">More</a></td>
                    </tr>
                    <tr>
                        <td>Ted Testovny</td>
                        <td>ted.testovny@test.com</td>
                        <td>Engineering</td>
                        <td>U1F2</td>
                        <td><a href="user-account-example.php">More</a></td>
                    </tr>
                    <tr>
                        <td>Ted Testovny</td>
                        <td>ted.testovny@test.com</td>
                        <td>Finance</td>
                        <td>U3F1</td>
                        <td><a href="user-account-example.php">More</a></td>
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