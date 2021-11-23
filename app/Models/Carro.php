<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carro
 *
 * @property $id
 * @property $cliente
 * @property $H_entrada
 * @property $salida
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carro extends Model
{
    
    static $rules = [
		'cliente' => 'required',
		'H_entrada' => 'required',
		'salida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente','H_entrada','salida'];



}
