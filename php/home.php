<?php
include 'common/header.php';
include 'common/header-nav.php';
?>

<div id="main-wrapper">
    <nav>
        <form action="ticket.php" method="GET">
            <button class="btn-mainpage" id="btn-helpdesk-guide">[?] Helpdesk Guide</button>    
            <button class="btn-mainpage" id="btn-report-incident" name="type" value="incident">[!] Report Incident</button>
            <button class="btn-mainpage" id="btn-new-request" name="type" value="request">[+] New Request</button>
            <button class="btn-mainpage" id="btn-tickets-history">[=] Tickets History</button>
        </form>
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
                        <th>Ticket number</th>
                        <th>Topic</th>
                        <th>Date created</th>
                        <th>Priority</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>DND0001111013</td>
                        <td>Ticket Topic here</td>
                        <td>19/09/2019</td>
                        <td>normal</td>
                        <td><a href="ticket-example.php">Details</a></td>
                    </tr>
                    <tr>
                        <td>DND0001111013</td>
                        <td>Ticket Topic here</td>
                        <td>19/09/2019</td>
                        <td>normal</td>
                        <td><a href="ticket-example.php">Details</a></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<script src="../js/main.js"></script>

<?php
include 'common/footer.php';
?>