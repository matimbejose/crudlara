<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;

    protected $table = 'cruds';

    protected $fillable = ['nome', 'whatsapp', 'contato2', 'cpf', 'cep', 'como_soube_empresa'];
}
