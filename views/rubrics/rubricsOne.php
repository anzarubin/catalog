<?php

$response = new Response();
$response->status = 200;
$response->status_message = "Vse OK";
$response->result = $this->data['rubric'];
$response->view();