<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 * 
 * @property int $id
 * @property string|null $codigo
 * @property string|null $nombre
 * @property string|null $direccion
 * @property string|null $telefonoRes
 * @property string|null $telefonoMovil
 * @property string|null $cedula
 * @property string|null $email
 * @property int|null $estatus
 * @property Carbon|null $fecha_nacimiento
 * @property string|null $edad
 * @property string|null $lugar_nacimiento
 * @property string|null $estado
 *
 * @package App\Models
 */
class Estudiante extends Model
{
	protected $table = 'estudiantes';
	public $timestamps = false;

	protected $casts = [
		'estatus' => 'int',
		'fecha_nacimiento' => 'datetime'
	];

	protected $fillable = [
		'codigo',
		'nombre',
		'direccion',
		'telefonoRes',
		'telefonoMovil',
		'cedula',
		'email',
		'estatus',
		'fecha_nacimiento',
		'edad',
		'lugar_nacimiento',
		'estado'
	];
}
