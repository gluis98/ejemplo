<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inscripcione
 * 
 * @property int $id
 * @property int|null $estudiante_id
 * @property int|null $representante_id
 * @property int|null $docente_id
 * @property int|null $anio_escolar
 * @property int|null $seccion_id
 * @property string|null $procedencia
 * @property string|null $repitiente
 * @property string|null $talla_camisa
 * @property string|null $talla_zapatos
 * @property string|null $talla_pantalon
 * @property string|null $partida_nacimiento
 * @property string|null $vacunas
 * @property string|null $fotografias
 * @property string|null $cedula_representante
 * @property string|null $cedula_estudiante
 * @property string|null $otros
 * @property Carbon|null $fecha_inscripcion
 *
 * @package App\Models
 */
class Inscripcione extends Model
{
	protected $table = 'inscripciones';
	public $timestamps = false;

	protected $casts = [
		'estudiante_id' => 'int',
		'representante_id' => 'int',
		'docente_id' => 'int',
		'anio_escolar' => 'int',
		'seccion_id' => 'int',
		'fecha_inscripcion' => 'datetime'
	];

	protected $fillable = [
		'estudiante_id',
		'representante_id',
		'docente_id',
		'anio_escolar',
		'seccion_id',
		'procedencia',
		'repitiente',
		'talla_camisa',
		'talla_zapatos',
		'talla_pantalon',
		'partida_nacimiento',
		'vacunas',
		'fotografias',
		'cedula_representante',
		'cedula_estudiante',
		'otros',
		'fecha_inscripcion'
	];
}
