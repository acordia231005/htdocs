<?php
class Cine
{

    public static function toArray($pdo)
    {
        $stmt = $pdo->query("SELECT * FROM cines");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
