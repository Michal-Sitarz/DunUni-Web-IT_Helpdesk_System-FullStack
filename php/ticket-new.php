<?php
include 'common/header.php';

if ($_SESSION["admin"]) {
    echo '<a href="home-a.php">';
} else {
    echo '<a href="home.php">';
}
include 'common/header-nav.php';

?>
<div id="main-wrapper">
    <div id="content-wrapper">

        <hr>
        <div id="ticket">
            
                <div id="ticket-header">
                    <h3>New Ticket</h3>
                    <form action="ticket-new-submit.php" method="POST" onsubmit="return submitTicket();">
                    <label>Topic: </label><input id="ticket-input-topic" type="text" name="topic">
                </div>
                <hr>
                <div id="ticket-body">
                    <div id="ticket-body-col-left">
                        <label>Description:</label>
                        <textarea id="ticket-description-text" name="description"></textarea>
                    </div>
                    <div id="ticket-body-col-right">
                        <table>
                            <tr>
                                <td>Type:</td>
                                <td>
                                    <select id="ticket-select-type" name="ticketType">
                                        <option value="none-chosen">---</option>
                                        <option value="request">Request</option>
                                        <option value="incident">Incident</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Category:</td>
                                <td>
                                    <select id="ticket-select-category" name="category">
                                        <option value="none-chosen">---</option>
                                        <option value="Hardware">Hardware</option>
                                        <option value="Software">Software</option>
                                        <option value="E-mail/Office Suite">E-mail/Office Suite</option>
                                        <option value="Network connection">Network connection</option>
                                        <option value="Other">Other</option>
                                    </select> 
                                </td>
                            </tr>
                            <tr><td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Raised by:</td>
                                <td id="ticket-username" class="td-data"><?php echo $_SESSION['fullName']; ?></td>
                            </tr>
                            <tr>
                                <td>Assigned to:</td>
                                <td id="ticket-assigned-to" class="td-data">---</td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td>
                                    <select id="ticket-select-status" name="status">
                                        <option value="none-chosen">---</option>
                                        <option value="new">New</option>
                                        <option value="open">Open</option>
                                        <option value="active">Active</option>
                                        <option value="closed">Closed</option>
                                        <option value="cancelled">Cancelled</option>
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
                        <button id="btn-ticket-submit" class="btn" type="submit">Submit</button>
                        </form>
                        <button id="btn-ticket-cancel" class="btn">Cancel</button>
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