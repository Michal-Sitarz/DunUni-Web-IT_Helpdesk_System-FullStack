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
            <?php
            //retrieve all user details from the database
            $username = $_SESSION['username'];

            include '../../DB/connection.php';

            // obtain user's information from DB (in a secure manner)
            $query = $conn->prepare("SELECT * FROM Users WHERE username = ?");
            $query->bind_param('s', $username);
            $query->execute();

            $userQuery = $query->get_result();
            $user = $userQuery->fetch_object();
            $query->close();
            $conn->close();

            //assign user info
            $userType = ($user->adminUsertype > 0 ? 'admin' : 'standard');
            $password = $user->password;
            $firstName = $user->firstName;
            $lastName = $user->lastName;
            $department = $user->department;
            ?>

            <table>
                <form action="user-account-updateDB.php" method="POST">
                    <tr>
                        <td>User type:</td>
                        <td><input id="add-new-user-type" class="input-add-new" type="text" value="<?php echo $userType ?>" disabled></td>
                    </tr>
                    <tr>
                        <td>First Name:</td>
                        <td><input id="add-new-user-first-name" class="input-add-new" type="text" name="firstName" value="<?php echo $firstName ?>"></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input id="add-new-user-last-name" class="input-add-new" type="text" name="lastName" value="<?php echo $lastName ?>"></td>
                    </tr>
                    <tr>
                        <td>E-mail <span class="faded-out">(Username)</span>:</td>
                        <td><input id="add-new-user-email" class="input-add-new" type="text" name="username" value="<?php echo $username ?>" disabled></td>
                    </tr>
                    <tr>
                        <td class="highlight">Password:</td>
                        <td><input id="add-new-user-password" class="input-add-new" type="password" name="password" value="<?php echo $password ?>"></td>
                    </tr>
                    <tr>
                        <td>Department:</td>
                        <td><input id="add-new-user-department" class="input-add-new" type="text" name="department" value="<?php echo $department ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button id="btn-user-account-update" class="btn btn-add" type="submit">Save</button></td>
                    </tr>
                </form>
                <tr>
                    <td></td>
                    <td><button id="btn-user-account-cancel" class="btn btn-add">Cancel</button></td>
                </tr>
            </table>

        </div>
    </div>

    <script src="../js/main-a.js"></script>
    <script src="../js/new-add.js"></script>
    <?php
    include 'common/footer.php';
    ?>