<?php
$response = new Response();
$response->status = 400;
$response->status_message = "Incorrect request";
$response->result = '"type" parameter must be in "Articles", "Authors", "Rubrics"';
$response->view();