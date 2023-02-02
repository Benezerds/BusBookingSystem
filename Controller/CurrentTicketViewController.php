<?php

use Model\TicketModel;
require_once '../Model/TicketModel.php';

session_start();
error_reporting(0);

class CurrentTicketViewController
{

}
/**  This $row will be used in the view for the view to get every data. The data is received from the
 *   ticketModel object when it is constructed in "new TicketModel()"
 **/
$ticket = new TicketModel();
$row = $ticket->getTicketData();

/**
 *  Calls the View from the controller to pass the variable
 */

include '../View/ticket.php';





