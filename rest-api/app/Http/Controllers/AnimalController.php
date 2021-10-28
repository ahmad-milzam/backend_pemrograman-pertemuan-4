<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{

    private $animal = array(
        'kucing',
        'ayam',
        'ikan'
    );

    public function index()
    {
        echo "Menampilkan data animal";
        echo "<br>";
        echo json_encode($this->animal);
    }

    public function store(Request $request)
    {
        echo "Menambahkan hewan baru";
        echo "<br>";
        array_push($this->animal, $request->nama);
        echo "Menampilkan data animal";
        echo "<br>";
        echo json_encode($this->animal);
    }

    public function update(Request $request, $id)
    {
        echo "Mengupdate data hewan id $id";
        echo "<br>";
        echo "Menampilkan data animal";
        echo "<br>";
        $this->animal[1] = $request->nama;
        echo json_encode($this->animal);
    }

    public function destroy($id)
    {
        echo "Menghapus data hewan id $id";
        echo "<br>";
        echo "Menampilkan data animal";
        echo "<br>";
        unset($this->animal[2]);
        echo json_encode($this->animal);
    }
}
