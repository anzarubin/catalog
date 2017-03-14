<?php
$response = new Response();
$response->status = 400;
$response->status_message = "Incorrect request";
$response->result = "One of parameters is incorrect. Check the documentation on http://obscure.cf";
$response->view();