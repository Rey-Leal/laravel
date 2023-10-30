<?php

// Referencia ao namespace
namespace App\Http\Controllers;
// Possibilidade de usar outras classes
use App\Http\Controllers\Controller;
// Request do Laravel
use Illuminate\Http\Request;
// Classe de Modelo 
use App\Clientes;

// Todas classes se faz necessario sempre ser extensao da Controller
class ClientesController extends Controller
{
    // Para mais comandos de banco pesquisar a documentacao do Active Records

    public function index()
    {
        // all() pega todos dados
        $data['clientes'] = Clientes::all();
        // Retorna view e paramentros
        return view('clientes', $data);
    }
    public function getCliente($id)
    {
        // SELECT find($var)
        $data = Clientes::find($id);

        // SELECT where(campo, $var)->first()
        // $data = Clientes::where('id', $id)->first();

        // AND ->where(campo, $var)
        // $data = Clientes::where('id', $id)->where('sexo', 1)->first();

        // OR ->orWhere(campo, $var)
        // $data = Clientes::where('id', $id)->orWhere('sexos', 1)->first();

        // COMPARACOES ->where(campo, comp, $var)
        // $data = Clientes::where('id', $id)->where('id', '<', 10)->first();

        return view('cliente_single', $data);
    }
}
