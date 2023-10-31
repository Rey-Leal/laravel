<?php

// Referencia ao namespace
namespace App\Http\Controllers;
// Possibilidade de usar outras classes
use App\Http\Controllers\Controller;
// Request do Laravel
use Illuminate\Http\Request;
// Classe de Modelo 
use App\Clientes;

date_default_timezone_set('America/Sao_Paulo');

// Todas classes se faz necessario sempre ser extensao da Controller
class ClientesController extends Controller
{
    // Para mais comandos de banco pesquisar a documentacao do Active Records

    // GET
    public function index()
    {
        // all() pega todos dados
        $data['clientes'] = Clientes::all();

        // Retorna view e parametros
        return view('clientes', $data);
    }

    // GET
    public function buscar($id)
    {
        // SELECT Class::find($var)
        $data = Clientes::find($id);

        // SELECT Class::where(campo, $var)->first()
        // $data = Clientes::where('id', $id)->first();

        // AND Class::where(campo, $var)->where(campo, $var)
        // $data = Clientes::where('id', $id)->where('sexo', 1)->first();

        // OR Class::where(campo, $var)->orWhere(campo, $var)
        // $data = Clientes::where('id', $id)->orWhere('sexos', 1)->first();

        // COMPARACOES Class::where(campo, comp, $var)
        // $data = Clientes::where('id', '<', 10)->first();

        // Retorna view e parametros
        return view('cliente_single', $data);
    }

    // POST
    public function inserir(Request $req)
    {
        // Valida se existe post
        if ($req->has('nome')) {
            // Instancia novo modelo
            $clientes = new Clientes();
            $clientes->nome = $req->input('nome');
            $clientes->sobrenome = $req->input('sobrenome');
            $clientes->sexo = $req->input('sexo');
            $clientes->dataCadastro = date('Y-m-d H:i:s');

            // Salva dados atraves do modelo
            $clientes->save();

            // Redireciona para pagina principal
            return redirect('/');
        }
    }

    public function deletar($id)
    {
        // DELETE Class::find($var)->delete()
        Clientes::find($id)->delete();

        // Redireciona para pagina principal
        return redirect('/');
    }

    public function atualizar($id)
    {
        // SELECT Class::find($var)
        $data = Clientes::find($id);

        // Atualiza dados e salva
        $data->nome = "Novo nome";
        $data->save();

        // Redireciona para pagina principal
        return redirect('/');
    }
}
