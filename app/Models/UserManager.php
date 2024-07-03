<?php

namespace App\Models;

use App\Core\Database;
use App\Helpers\Log;
use PDO;

class UserManager
{
    protected PDO $connection;

    public function __construct()
    {
        $this->connection = Database::getInstance()->getConnection();
    }

    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(":id", $id);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        $user = new User($result);

        return $user->withoutPassword();
    }
}