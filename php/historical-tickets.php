<?php
include 'common/header.php';
?>

<a href="home.php">

    <?php
    include 'common/header-nav.php';
    ?>

    <div id="main-wrapper">
        <div id="content-wrapper">

            <h3>Tickets history</h3>
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
                        $query = $conn->prepare("SELECT * FROM Tickets WHERE raisedBy = ?");
                        $query->bind_param('s', $_SESSION['username']);
                        $query->execute();

                        $queryResults = $query->get_result();
                        $query->close();
                        $conn->close();

                        //display each row of a 
                        while ($ticket = $queryResults->fetch_object()) {
                            $row = "<tr><td>DUN" . str_pad((string) $ticket->ticketID, 9, "0", STR_PAD_LEFT)
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