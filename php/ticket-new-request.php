<?php
    include 'common/header.php';
?>

<a href="home.php">

<?php
    include 'common/header-nav.php';
?>

<div id="main-wrapper">
    <div id="content-wrapper">

        <hr>
        <div id="ticket">
            <div id="ticket-header">
                <h3>Ticket No.: 009905</h3>
                <label>Topic: </label><input id="ticket-input-topic">
            </div>
            <hr>
            <div id="ticket-body">
                <div id="ticket-body-col-left">
                    <label>Description:</label>
                    <textarea id="ticket-description-text"></textarea>
                </div>
                <div id="ticket-body-col-right">
                    <table>
                        <tr>
                            <td>Type:</td>
                            <td>
                                <select id="ticket-select-type">
                                    <option value="none-chosen">---</option>
                                    <option value="Request">Request</option>
                                    <option value="Incident">Incident</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Category:</td>
                            <td>
                                <select id="ticket-select-category">
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
                            <td id="ticket-username" class="td-data">Firstname Lastname</td>
                        </tr>
                        <tr>
                            <td>Assigned to:</td>
                            <td id="ticket-assigned-to" class="td-data">Ted Testovny</td>
                        </tr>
                        <tr>
                            <td>Status:</td>
                            <td>
                                <select id="ticket-select-status">
                                    <option value="none-chosen">---</option>
                                    <option value="Submitted">Submitted</option>
                                    <option value="Open">Open</option>
                                    <option value="Active">Active</option>
                                    <option value="Closed">Closed</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                                <i id="ticket-select-category-help-icon" class="ticket-help-popup far fa-question-circle">
                                    <span id="ticket-select-category-help-popup" class="ticket-help-popup-text">
                                        <b>Submitted:</b> Not seen by IT team yet.<br>
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
                    <button id="btn-ticket-submit" class="btn">Submit</button>
                    <button id="btn-ticket-cancel" class="btn">Cancel</button>
                </div>
            </div>
            <hr>
        </div>

    </div>
</div>

<script src="../js/main.js"></script>
<script src="../js/ticket.js"></script>
<?php
include 'common/footer.php';
?>
