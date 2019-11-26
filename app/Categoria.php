<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['nome'];

    public function produtos(){
    	return $this->belongsTo("App\Categoria","relacao",'categoria_id','produto_id');
    }
}
