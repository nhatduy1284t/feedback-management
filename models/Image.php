<?php

class Image
{
    public $conn;
    public $url;
    public $post_id;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
}