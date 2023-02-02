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

//  Encoder
$query_data = $ticket->getTicketData();
$encoded_data = json_encode($query_data);

file_put_contents('tickets.json', $encoded_data);

//  Decoder
$json_data = file_get_contents('tickets.json');
$decoded_data = json_decode($json_data, JSON_OBJECT_AS_ARRAY);
/**
 *  Calls the View from the controller to pass the variable
 */

include '../View/ticket.php';





