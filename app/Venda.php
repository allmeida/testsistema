<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'vendas';
	protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['usuario_id', 'produto_id','numero_venda','vendedor_responsavel','data_venda'];


    public function produtos()
    {
        return $this->hasOne('App\Produto', 'produto_id');
    }


    public function usuarios()
    {
        $this->belongsTo('App\Usuario', 'usuario_id', 'id');
    }
}
