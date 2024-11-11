<?php

namespace App\Models;

use Core\App;

class Film
{
    protected static $table = 'films';

    // Funció per obtenir totes les pel·lícules
    public static function getAll()
    {
        // Obtenim la connexió a la base de dades
        $db = App::get('database');
        // Preparem la consulta per obtenir totes les pel·lícules
        $statement = $db->getConnection()->prepare('SELECT * FROM ' . self::$table);
        // Executem la consulta
        $statement->execute();
        // Retornem totes les pel·lícules com a matriu associativa
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Funció per buscar una pel·lícula per la seva ID
    public static function find($id)
    {
        // Obtenim la connexió a la base de dades
        $db = App::get('database')->getConnection();
        // Preparem la consulta per obtenir una pel·lícula amb la id especificada
        $statement = $db->prepare('SELECT * FROM ' . self::$table . ' WHERE id = :id');
        // Executem la consulta amb la id com a paràmetre
        $statement->execute(['id' => $id]);
        // Retornem la pel·lícula trobada com a objecte
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    // Funció per crear una nova pel·lícula
    public static function create($data)
    {
        // Obtenim la connexió a la base de dades
        $db = App::get('database')->getConnection();
        // Preparem la consulta per inserir una nova pel·lícula
        $statement = $db->prepare('INSERT INTO ' . static::$table . "(name, director, year) VALUES (:name, :director, :year)");
        // Assignem els valors dels paràmetres
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':director', $data['director']);
        $statement->bindValue(':year', $data['year']);
        // Executem la inserció
        $statement->execute();
    }

    // Funció per actualitzar les dades d'una pel·lícula existent
    public static function update($id, $data)
    {
        // Obtenim la connexió a la base de dades
        $db = App::get('database')->getConnection();
        // Preparem la consulta per actualitzar les dades de la pel·lícula amb la id especificada
        $statement = $db->prepare("UPDATE " . static::$table . " SET name = :name, director = :director, year = :year WHERE id = :id");
        // Assignem els valors dels paràmetres
        $statement->bindValue(':id', $id);
        $statement->bindValue(':name', $data['name']);
        $statement->bindValue(':director', $data['director']);
        $statement->bindValue(':year', $data['year']);
        // Executem l'actualització
        $statement->execute();
    }

    // Funció per eliminar una pel·lícula
    public static function delete($id)
    {
        // Obtenim la connexió a la base de dades
        $db = App::get('database')->getConnection();
        // Preparem la consulta per eliminar la pel·lícula amb la id especificada
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        // Assignem la id del registre a eliminar
        $statement->bindValue(':id', $id);
        // Executem la consulta d'eliminació
        $statement->execute();
    }
}
