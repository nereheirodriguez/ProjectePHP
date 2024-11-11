<?php

namespace App\Models;

use Core\App;

class Futbolista
{
    // Definim el nom de la taula a la base de dades
    protected static $table = 'futbolistes';

    // Mètode per obtenir tots els futbolistes
    public static function getAll()
    {
        // Obtenim la connexió a la base de dades
        $db = App::get('database');

        // Preparem i executem la consulta SQL per seleccionar tots els registres
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        $statement->execute();

        // Retornem tots els resultats com un array associatiu
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Mètode per trobar un futbolista específic pel seu ID
    public static function find($id)
    {
        // Obtenim la connexió a la base de dades
        $db = App::get('database')->getConnection();

        // Preparem la consulta SQL amb un paràmetre ID
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');

        // Executem la consulta passant l'ID com a paràmetre
        $statement->execute(['id' => $id]);

        // Retornem el resultat com un objecte
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    // Mètode per crear un nou futbolista a la base de dades
    public static function create($data)
    {
        // Obtenim la connexió a la base de dades
        $db = App::get('database')->getConnection();

        // Preparem la consulta SQL per inserir un nou registre amb valors vinculats
        $statement = $db->prepare(
            'INSERT INTO ' . static::$table . " (nom_futbolista, equip, any, dorsal, nacionalitat) VALUES (:nom_futbolista, :equip, :any, :dorsal, :nacionalitat)"
        );

        // Enllacem els valors del formulari als paràmetres de la consulta
        $statement->bindValue(':nom_futbolista', $data['nom_futbolista']);
        $statement->bindValue(':equip', $data['equip']);
        $statement->bindValue(':any', $data['any']);
        $statement->bindValue(':dorsal', $data['dorsal']);
        $statement->bindValue(':nacionalitat', $data['nacionalitat']);

        // Executem la consulta per inserir el nou futbolista
        $statement->execute();
    }

    // Mètode per actualitzar les dades d'un futbolista existent
    public static function update($id, $data)
    {
        // Obtenim la connexió a la base de dades
        $db = App::get('database')->getConnection();

        // Preparem la consulta SQL per actualitzar el registre amb valors vinculats
        $statement = $db->prepare(
            "UPDATE " . static::$table . " SET nom_futbolista = :nom_futbolista, equip = :equip, any = :any, dorsal = :dorsal, nacionalitat = :nacionalitat WHERE id = :id"
        );

        // Enllacem els valors del formulari i l'ID als paràmetres de la consulta
        $statement->bindValue(':id', $id);
        $statement->bindValue(':nom_futbolista', $data['nom_futbolista']);
        $statement->bindValue(':equip', $data['equip']);
        $statement->bindValue(':any', $data['any']);
        $statement->bindValue(':dorsal', $data['dorsal']);
        $statement->bindValue(':nacionalitat', $data['nacionalitat']);

        // Executem la consulta per actualitzar el futbolista
        $statement->execute();
    }

    // Mètode per eliminar un futbolista de la base de dades
    public static function delete($id)
    {
        // Obtenim la connexió a la base de dades
        $db = App::get('database')->getConnection();

        // Preparem la consulta SQL per eliminar el registre amb el paràmetre ID
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');

        // Enllacem l'ID al paràmetre de la consulta
        $statement->bindValue(':id', $id);

        // Executem la consulta per eliminar el futbolista
        $statement->execute();
    }
}
