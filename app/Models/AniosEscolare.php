<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AniosEscolare
 * 
 * @property int $id
 * @property string|null $anio
 *
 * @package App\Models
 */
class AniosEscolare extends Model
{
	protected $table = 'anios_escolares';
	public $timestamps = false;

	protected $fillable = [
		'anio'
	];
}
