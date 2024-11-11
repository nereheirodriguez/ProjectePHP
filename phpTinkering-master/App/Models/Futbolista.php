<?php

namespace App\Models;

use Core\App;

class Futbolista
{
    protected static $table = 'futbolistes';

    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        $statement->execute(['id' => $id]);
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public static function create($data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('INSERT INTO ' . static::$table . " (nom_futbolista, equip, any, dorsal, nacionalitat) VALUES (:nom_futbolista, :equip, :any, :dorsal, :nacionalitat)");
        $statement->bindValue(':nom_futbolista', $data['nom_futbolista']);
        $statement->bindValue(':equip', $data['equip']);
        $statement->bindValue(':any', $data['any']);
        $statement->bindValue(':dorsal', $data['dorsal']);
        $statement->bindValue(':nacionalitat', $data['nacionalitat']);
        $statement->execute();
    }

    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare("UPDATE " . static::$table . " SET nom_futbolista = :nom_futbolista, equip = :equip, any = :any, dorsal = :dorsal, nacionalitat = :nacionalitat WHERE id = :id");
        $statement->bindValue(':id', $id);
        $statement->bindValue(':nom_futbolista', $data['nom_futbolista']);
        $statement->bindValue(':equip', $data['equip']);
        $statement->bindValue(':any', $data['any']);
        $statement->bindValue(':dorsal', $data['dorsal']);
        $statement->bindValue(':nacionalitat', $data['nacionalitat']);
        $statement->execute();
    }

    public static function delete($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}