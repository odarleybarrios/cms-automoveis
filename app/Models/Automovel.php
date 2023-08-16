<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Automovel extends Model
{
   protected $table = "automoveis";
   public function cliente(){

      return $this->belongsTo(cliente::class,'cliente_id','id');
   }
   
}
