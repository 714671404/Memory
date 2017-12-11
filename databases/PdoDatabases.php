<?php
namespace Databases;

use System\Classs\FilesGetArray;

class PdoDatabases
{
    private     $link_db            =   null;
    private     $db_mysql           =   'mysql';
    private     $db_host            =   '192.168.10.10';
    private     $db_dbname          =   'memory';
    private     $db_user            =   'homestead';
    private     $db_pass            =   'secret';
    private     $db_port            =   '3306';
    private     $db_charset         =   'utf8';

    public function __construct()
    {
        $db = new FilesGetArray();
        $dbname = $db->get_file_cotent(APP_PATH . '/.env');
        $this->link_db = $this->link_databases($dbname);
        return $this->link_db;
    }

    private function link_databases(array $dbname = null)
    {
        if (!empty($dbname)) {
            $this->db_mysql     =   $dbname['APP_MYSQL'];
            $this->db_host      =   $dbname['APP_HOST'];
            $this->db_dbname    =   $dbname['APP_DBNAME'];
            $this->db_user      =   $dbname['APP_USER'];
            $this->db_pass      =   $dbname['APP_PASS'];
            $this->db_port      =   $dbname['APP_PORT'];
            $this->db_charset   =   $dbname['APP_CHARSET'];
        }
        return new \PDO("$this->db_mysql:host=$this->db_host;dbname=$this->db_dbname;port=$this->db_port", $this->db_user, $this->db_pass);
    }
}