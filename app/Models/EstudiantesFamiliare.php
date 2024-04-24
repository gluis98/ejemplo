<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstudiantesFamiliare
 * 
 * @property int $id
 * @property int|null $estudiante_id
 * @property string|null $cedula
 * @property string|null $nombre
 * @property Carbon|null $fecha_nacimiento
 * @property string|null $estado_civil
 * @property string|null $lugar_trabajo
 * @property string|null $direccion
 * @property string|null $parentesco
 * @property string|null $telefono_movil
 * @property string|null $telefono_res
 * @property string|null $email
 *
 * @package App\Models
 */
class EstudiantesFamiliare extends Model
{
	protected $table = 'estudiantes_familiares';
	public $timestamps = false;

	protected $casts = [
		'estudiante_id' => 'int',
		'fecha_nacimiento' => 'datetime'
	];

	protected $fillable = [
		'estudiante_id',
		'cedula',
		'nombre',
		'fecha_nacimiento',
		'estado_civil',
		'lugar_trabajo',
		'direccion',
		'parentesco',
		'telefono_movil',
		'telefono_res',
		'email'
	];
}
