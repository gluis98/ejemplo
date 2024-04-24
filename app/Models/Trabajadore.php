<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trabajadore
 * 
 * @property int $id
 * @property string|null $cedula
 * @property string|null $nombre
 * @property string|null $apellido
 * @property int $sector_id
 * @property string|null $direccion
 * @property string|null $fecha_nacimiento
 * @property string|null $edad
 * @property string|null $area
 * @property string|null $estado
 * @property string|null $email
 * @property string|null $telefono
 * @property string $tipo
 *
 * @package App\Models
 */
class Trabajadore extends Model
{
	protected $table = 'trabajadores';
	public $timestamps = false;

	protected $casts = [
		'sector_id' => 'int'
	];

	protected $fillable = [
		'cedula',
		'nombre',
		'apellido',
		'sector_id',
		'direccion',
		'fecha_nacimiento',
		'edad',
		'area',
		'estado',
		'email',
		'telefono',
		'tipo'
	];
}
