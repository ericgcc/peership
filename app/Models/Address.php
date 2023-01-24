<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $id
 * @property string $line_1
 * @property string|null $line_2
 * @property string $city
 * @property string $country
 * @property string $region
 * @property string $zip
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Member[] $members
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'addresses';

	protected $fillable = [
		'line_1',
		'line_2',
		'city',
		'country',
		'region',
		'zip'
	];

	public function country()
	{
		return $this->belongsTo(Country::class, 'country');
	}

	public function members()
	{
		return $this->hasMany(Member::class);
	}
}
