<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seccione
 * 
 * @property int $id
 * @property string|null $seccion
 *
 * @package App\Models
 */
class Seccione extends Model
{
	protected $table = 'secciones';
	public $timestamps = false;

	protected $fillable = [
		'seccion'
	];
}
