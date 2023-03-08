<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cargo
 *
 * @property $id
 * @property $nombre
 * @property $nivelJerarquico
 * @property $direccion
 * @property $canal
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cargo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'nivelJerarquico' => 'required',
		'direccion' => 'required',
		'canal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','nivelJerarquico','direccion','canal'];



}
