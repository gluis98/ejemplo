<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 * 
 * @property int $id
 * @property int|null $trabajador_id
 * @property int|null $materia_id
 * @property int|null $anio_id
 * @property int|null $seccion_id
 * @property string|null $hora
 * @property string|null $dia
 *
 * @package App\Models
 */
class Horario extends Model
{
	protected $table = 'horarios';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'trabajador_id' => 'int',
		'materia_id' => 'int',
		'anio_id' => 'int',
		'seccion_id' => 'int'
	];

	protected $fillable = [
		'trabajador_id',
		'materia_id',
		'anio_id',
		'seccion_id',
		'hora',
		'dia'
	];
}
