<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'itens';
    protected $primaryKey = "idItem";
    protected $fillable = ['numero_item', 'fk_idCompra'];
}
