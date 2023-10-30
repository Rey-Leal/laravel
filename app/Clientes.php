<?php

namespace App;

// Model possui todos metodos do Active Records do Laravel para acesso a dados
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;
}
