<?php

$response = new Response();
$response->status = 200;
$response->status_message = "OK";
$response->result = $this->data['article'];
$response->view();