<?php

namespace App\Controllers;

use App\Models\Futbolista;

class FutbolistaController
{
    public function index()
    {
        $futbolistes = Futbolista::getAll();
        return view('futbolistes/index', ['futbolistes' => $futbolistes]);
    }

    public function create()
    {
        return view('futbolistes/create');
    }

    public function store()
    {
        $data = $_POST;
        Futbolista::create($data);
        header('Location: /futbolistes');
        exit;
    }

    public function edit($id)
    {
        $futbolista = Futbolista::find($id);
        return view('futbolistes/edit-futbolista', ['futbolista' => $futbolista]);
    }

    public function update($id)
    {
        $data = $_POST;
        Futbolista::update($id, $data);
        header('Location: /futbolistes');
        exit;
    }

    public function delete($id)
    {
        $futbolista = Futbolista::find($id);
        return view('futbolistes/delete-futbolista', ['futbolista' => $futbolista]);
    }

    public function destroy($id)
    {
        Futbolista::delete($id);
        header('Location: /futbolistes');
        exit;
    }
}
