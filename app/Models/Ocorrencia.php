<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Ocorrencia extends Model
{

  protected $table = "ocorrencias"; 
  public function automovel()
  {
    return $this->belongsTo(automovel::class,'automovel_id','id');
  }
  
}
