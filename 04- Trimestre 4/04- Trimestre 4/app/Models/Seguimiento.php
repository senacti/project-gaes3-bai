<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seguimiento
 *
 * @property $id
 * @property $Descripción
 * @property $Responsable
 * @property $Productos
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seguimiento extends Model
{
    
    static $rules = [
		'Descripción' => 'required',
		'Responsable' => 'required',
		'Productos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripción','Responsable','Productos'];



}
