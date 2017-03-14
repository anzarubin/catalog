<?php

class Response
{
    public $status;
    public $status_message;
    public $result;

    public function __construct()
    {
        header("Content-Type: application/json; charset=utf-8");
        header("HTTP/1.1");
    }

    public function view()
    {
        $response = [
            'meta' => [
                'status'            => $this->status,
                'status_message'    => $this->status_message,
                'issue_date'        => date("Ymd, H:i:s"),
            ],
            'result' => $this->result,
        ];
        $json_response = json_encode($response, JSON_UNESCAPED_UNICODE);
        echo $json_response;
    }
}