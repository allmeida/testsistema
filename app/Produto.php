<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
	protected $dates = ['created_at', 'updated_at'];
	protected $fillable = ['nome', 'preco','data_criacao','data_alteracao'];
}
