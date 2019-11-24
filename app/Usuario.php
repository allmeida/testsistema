<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table = 'usuarios';
	protected $dates = ['created_at', 'updated_at'];
	protected $fillable = ['nome', 'senha', 'email', 'cep', 'rua', 'data_criacao'];

    /*
    public function usuarios(){
		return $this->belongsTo("App\Usuario","relacao",'usuario_id','produto_id','venda_id');
    }
    */

    public function vendas() {
        return $this->hasMany('App\Venda');
    }

}
