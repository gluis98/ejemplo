<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 * 
 * @property int $id
 * @property string $descripcion
 *
 * @package App\Models
 */
class Materia extends Model
{
	protected $table = 'materias';
	public $timestamps = false;

	protected $fillable = [
		'descripcion'
	];
}
