<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 * 
 * @property int $id
 * @property string $name
 * @property string $country
 * 
 *
 * @package App\Models
 */
class State extends Model
{
	protected $table = 'states';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'country'
	];

	public function country()
	{
		return $this->belongsTo(Country::class, 'country');
	}
}
