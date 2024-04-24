<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrabajadoresMateria
 * 
 * @property int $id
 * @property int|null $materia_id
 * @property int|null $trabajador_id
 * @property int|null $seccion_id
 * @property int|null $anio_id
 * @property string|null $dia
 * @property string|null $hora
 *
 * @package App\Models
 */
class TrabajadoresMateria extends Model
{
	protected $table = 'trabajadores_materias';
	public $timestamps = false;

	protected $casts = [
		'materia_id' => 'int',
		'trabajador_id' => 'int',
		'seccion_id' => 'int',
		'anio_id' => 'int'
	];

	protected $fillable = [
		'materia_id',
		'trabajador_id',
		'seccion_id',
		'anio_id',
		'dia',
		'hora'
	];
}
