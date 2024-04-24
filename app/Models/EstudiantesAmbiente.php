<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstudiantesAmbiente
 * 
 * @property int $id
 * @property int|null $estudiante_id
 * @property string|null $situacion_pareja
 * @property string|null $nino_vive_con
 * @property string|null $nro_hermanos
 * @property string|null $lugar_ocupa
 * @property string|null $adultos_viven
 * @property string|null $duerme_con
 * @property string|null $tipo_vivienda
 * @property string|null $tenencia
 * @property string|null $medio_transporte
 * @property string|null $encargado_transporte_traida
 * @property string|null $encargado_transporte_retirada
 * @property string|null $programas_sociales
 * @property string|null $alimentos_preferencia
 * @property string|null $alimento_rechazo
 * @property string|null $alimentos_preescuela
 * @property string|null $alimentos_prohibidos
 * @property string|null $enfermedades
 * @property string|null $vacunas
 * @property string|null $aficiones
 * @property string|null $otros_intereses
 *
 * @package App\Models
 */
class EstudiantesAmbiente extends Model
{
	protected $table = 'estudiantes_ambiente';
	public $timestamps = false;

	protected $casts = [
		'estudiante_id' => 'int'
	];

	protected $fillable = [
		'estudiante_id',
		'situacion_pareja',
		'nino_vive_con',
		'nro_hermanos',
		'lugar_ocupa',
		'adultos_viven',
		'duerme_con',
		'tipo_vivienda',
		'tenencia',
		'medio_transporte',
		'encargado_transporte_traida',
		'encargado_transporte_retirada',
		'programas_sociales',
		'alimentos_preferencia',
		'alimento_rechazo',
		'alimentos_preescuela',
		'alimentos_prohibidos',
		'enfermedades',
		'vacunas',
		'aficiones',
		'otros_intereses'
	];
}
