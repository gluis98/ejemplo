<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstudiantesAntecedente
 * 
 * @property int $id
 * @property int|null $estudiante_id
 * @property string|null $deseado
 * @property string|null $sexo_deseado
 * @property string|null $duracion_gestacion
 * @property string|null $tipo_parto
 * @property string|null $peso_talla
 * @property string|null $edad_caminar
 * @property string|null $edad_hablar
 * @property string|null $edad_banio
 * @property string|null $suenio
 * @property string|null $temor
 * @property string|null $dificultad
 * @property string|null $dedo
 * @property string|null $chupon
 * @property string|null $nervioso
 * @property string|null $alegre
 * @property string|null $agresivo
 * @property string|null $necesita_ayuda
 * @property string|null $atencion_especial
 * @property string|null $juguetes_preferidos
 * @property string|null $juegos_preferidos
 *
 * @package App\Models
 */
class EstudiantesAntecedente extends Model
{
	protected $table = 'estudiantes_antecedentes';
	public $timestamps = false;

	protected $casts = [
		'estudiante_id' => 'int'
	];

	protected $fillable = [
		'estudiante_id',
		'deseado',
		'sexo_deseado',
		'duracion_gestacion',
		'tipo_parto',
		'peso_talla',
		'edad_caminar',
		'edad_hablar',
		'edad_banio',
		'suenio',
		'temor',
		'dificultad',
		'dedo',
		'chupon',
		'nervioso',
		'alegre',
		'agresivo',
		'necesita_ayuda',
		'atencion_especial',
		'juguetes_preferidos',
		'juegos_preferidos'
	];
}
