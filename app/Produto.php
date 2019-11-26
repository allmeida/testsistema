<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";
	protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['nome','preco','categoria_id','data_criacao','data_alteracao','created_at', 'updated_at'];

    public function categorias(){
    	return $this->belongsTo("App\Categoria","relacao",'categoria_id','produto_id');
    }
}
