<?php
declare(strict_types=1);

namespace Alfa\Database;

use PDO;

class MysqlPDO extends PDO
{
    public function __construct()
    {
        $dns = 'mysql:host=localhost;dbname=cambio';
        $username = 'root';
        $password = '1234';
        
        parent:: __construct(
            $dns,
            $username,
            $password);

            $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
}