<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'categoria_id',
        'name',
        'description',
        'exclusive'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function categoria(){

        return $this->belongsTo(related:Categoria::class);
    }
}
