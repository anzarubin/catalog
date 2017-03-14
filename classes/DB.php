<?php


class DB
{
    private $db = null;
    private $result = null;

    public function __construct()
    {
        $this->db = new mysqli('localhost', 'root', 'user', 'catalog');
        $this->db->set_charset('utf8');
    }

    public function query($sql, $class = 'stdClass')
    {
        $this->result = $this->db->query($sql);

        if ($this->result === false) {
            return false;
        }
        $return = [];
        while ( $row = mysqli_fetch_object($this->result, $class) ) {
            $return[] = $row;
        }

        $this->result->free();
        return $return;
    }
}