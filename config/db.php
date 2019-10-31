<?php
/**
 * Created by PhpStorm.
 * User: harishuginval
 * Date: 01/11/19
 * Time: 3:23 AM
 */

class db{
    private $db_host = 'slimSample';
    private $db_name = 'slimsampledb';
    private $db_user = 'root';
    private $db_pass = 'password';

    private $dbconnection;

    //connect
    public function connection(): PDO{
        $mysql_connect_Str = "mysql:host=$this->db_host;port='8889';dbname=$this->db_name";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];
        $this->dbconnection = new PDO($mysql_connect_Str, $this->db_user, $this->db_pass, $options);
       // $dbconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        require $this->dbconnection;
    }
}