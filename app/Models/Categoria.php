<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'menu',
        'orden',
        'ultfoto'
    ];

    public function empresas(): HasMany
    {
        return $this->hasMany(Empresa::class);
    }
}
