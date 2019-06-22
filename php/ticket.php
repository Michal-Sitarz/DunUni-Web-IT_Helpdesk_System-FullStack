<?php
include 'common/header.php';

if ($_SESSION["admin"]) {
    echo '<a href="home-a.php">';
} else {
    echo '<a href="home.php">';
}
include 'common/header-nav.php';

if (!empty($_POST)) {
    $id = $_POST['id'];

    //obtain tickets data from the DB
    include '../../DB/connection.php';
    $query = $conn->prepare("SELECT * FROM Tickets WHERE ticketID = ?");
    $query->bind_param('s', $id);
    $query->execute();

    $queryResults = $query->get_result();
    $query->close();
    $conn->close();
    
    $ticket = $queryResults->fetch_object();
    
} else {
    header('location: home.php');
    exit;
}
?>
<div id="main-wrapper">
    <div id="content-wrapper">

        <hr>
        <div id="ticket">

            <div id="ticket-header">
                <h3>Ticket <?php echo "DUN" . str_pad((string) $id, 9, "0", STR_PAD_LEFT) ?></h3>
                <form action="ticket-update.php" method="POST" onsubmit="return submitTicket();">
                    <label>Topic: </label><input id="ticket-input-topic" type="text" name="topic" value="<?php echo $ticket->topic ?>">
                    </div>
                    <hr>
                    <div id="ticket-body">
                        <div id="ticket-body-col-left">
                            <label>Description:</label>
                            <textarea id="ticket-description-text" name="description"><?php echo $ticket->description ?></textarea>
                        </div>
                        <div id="ticket-body-col-right">
                            <table>
                                <tr>
                                    <td>Type:</td>
                                    <td>
                                        <select id="ticket-select-type" name="ticketType" disabled>
                                            <option value="none-chosen">---</option>
                                            <option value="request" <?php if($ticket->ticketType=='request') {echo 'selected';} ?>>Request</option>
                                            <option value="incident" <?php if($ticket->ticketType=='incident') {echo 'selected';} ?>>Incident</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Category:</td>
                                    <td>
                                        <select id="ticket-select-category" name="category" disabled>
                                            <option value="none-chosen">---</option>
                                            <option value="Hardware" <?php if($ticket->category=='Hardware') {echo 'selected';} ?>>Hardware</option>
                                            <option value="Software" <?php if($ticket->category=='Software') {echo 'selected';} ?>>Software</option>
                                            <option value="E-mail/Office Suite" <?php if($ticket->category=='E-mail/Office Suite') {echo 'selected';} ?>>E-mail/Office Suite</option>
                                            <option value="Network connection" <?php if($ticket->category=='Network connection') {echo 'selected';} ?>>Network connection</option>
                                            <option value="Security" <?php if($ticket->category=='Security') {echo 'selected';} ?>>Security</option>
                                            <option value="Other" <?php if($ticket->category=='Other') {echo 'selected';} ?>>Other</option>
                                        </select> 
                                    </td>
                                </tr>
                                <tr><td colspan="2"><hr></td>
                                </tr>
                                <tr>
                                    <td>Raised by:</td>
                                    <td id="ticket-username" class="td-data"><?php echo $ticket->raisedBy ?></td>
                                </tr>
                                <tr>
                                    <td>Assigned to:</td>
                                    <td id="ticket-assigned-to" class="td-data"><?php if(!empty($ticket->assignedTo)){ echo $ticket->assignedTo; } else { echo "---";} ?></td>
                                </tr>
                                <tr>
                                    <td>Status:</td>
                                    <td>
                                        <select id="ticket-select-status" name="status">
                                            <option value="none-chosen">---</option>
                                            <option value="new" <?php if($ticket->status=='new') {echo 'selected';} ?>>New</option>
                                            <option value="open" <?php if($ticket->status=='open') {echo 'selected';} ?>>Open</option>
                                            <option value="active" <?php if($ticket->status=='active') {echo 'selected';} ?>>Active</option>
                                            <option value="closed" <?php if($ticket->status=='closed') {echo 'selected';} ?>>Closed</option>
                                            <option value="cancelled" <?php if($ticket->status=='cancelled') {echo 'selected';} ?>>Cancelled</option>
                                        </select>
                                        <i id="ticket-select-category-help-icon" class="ticket-help-popup far fa-question-circle">
                                            <span id="ticket-select-category-help-popup" class="ticket-help-popup-text">
                                                <b>New:</b> Not seen by IT team yet.<br>
                                                <b>Open:</b> Assigned to member of IT team.<br>
                                                <b>Active:</b> In progress, some activity done.<br>
                                                <b>Closed:</b> Issue resolved, or request met.<br>
                                                <b>Cancelled:</b> Cancelled without resolution.<br>
                                            </span>
                                        </i>
                                    </td>
                                </tr>
                                <tr><td colspan="2"><hr></td>
                                </tr>
                            </table>
                            <button id="btn-ticket-submit" class="btn" type="submit" name="ticketID" value="<?php echo $id; ?>">Submit</button>
                            </form>
                            <!--<button id="btn-ticket-cancel" class="btn">Cancel</button>-->
                        </div>
                    </div>
                    <hr>
                    <div id="ticket-notes">
                    </div>

            </div>

        </div>
    </div>

    <script src="../js/main.js"></script>
    <script src="../js/ticket.js"></script>
<?php
include 'common/footer.php';
?>