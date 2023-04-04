<?php
class database
{
    protected $db;
    protected string $prefix = 'm2r64_';

    public function connect()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=quote;charset=UTF8', 'kayes23_admin', 'Frapper60280');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
