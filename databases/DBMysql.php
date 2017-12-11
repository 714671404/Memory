<?php
namespace Databases;

use Databases\PdoDatabases;

class DBMysql extends PdoDatabases
{
    public $db      =       null;

    public function __construct(PdoDatabases $db)
    {
        return $this->db   =   $db;
    }
}