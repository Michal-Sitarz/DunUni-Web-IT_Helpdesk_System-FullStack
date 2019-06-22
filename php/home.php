<?php
include 'common/header.php';
include 'common/header-nav.php';
?>

<div id="main-wrapper">
    <nav>

        <button class="btn-mainpage" id="btn-helpdesk-guide">[?] Helpdesk Guide</button>    
        <form action="ticket-new.php" method="GET"> 
            <button class="btn-mainpage" id="btn-report-incident" name="type" value="incident">[!] Report Incident</button>
            <button class="btn-mainpage" id="btn-new-request" name="type" value="request">[+] New Request</button>
        </form>
        <button class="btn-mainpage" id="btn-tickets-history">[=] Tickets History</button>


    </nav>
    <hr>

    <div id="content-wrapper">

        <div id="notifications-container">
            <div id="notifications-header">
                <h3>Notifications</h3>
                <button id="btn-notifications-close" class="">
                    <i id="notifications-close" class="fas fa-window-close"></i>
                </button>
            </div>
            <p>No new notifications</p>
            <hr>
        </div>

        <h3>Open tickets</h3>
        <div id="tbl-tickets-list">
            <table>
                <thead>
                    <tr>
                        <th>Ticket ID</th>
                        <th>Topic</th>
                        <th>Status</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    //obtain all open tickets from the DB
                    include '../../DB/connection.php';
                    // obtain user's information from DB (in a secure manner)
                    $query = $conn->prepare("SELECT * FROM Tickets WHERE raisedBy = ? AND (status='new' OR status='open' OR status='active')");
                    $query->bind_param('s', $_SESSION['username']);
                    $query->execute();

                    $queryResults = $query->get_result();
                    $query->close();
                    $conn->close();

                    //display each row of a 
                    while ($ticket = $queryResults->fetch_object()) {
                        $row = "<tr><td>DUN" . str_pad((string)$ticket->ticketID, 9, "0", STR_PAD_LEFT) 
                                . "</td><td>" . $ticket->topic 
                                . "</td><td>" . $ticket->status 
                                . "</td><td><form action='ticket.php' method='POST'><button name='id' value='".$ticket->ticketID."'>Details</button></form></td></tr>";
                        echo $row;
                    }

                    ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

<script src="../js/main.js"></script>

<?php
include 'common/footer.php';
?>