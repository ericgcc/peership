<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * 
 * @property string $id
 * @property string $name
 * @property string $phone_code
 * 
 * @property Collection|Address[] $addresses
 * @property Collection|State[] $states
 * @property Collection|Member[] $members
 *
 * @package App\Models
 */
class Country extends Model
{
	protected $table = 'countries';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'name',
		'phone_code'
	];

	public function addresses()
	{
		return $this->hasMany(Address::class, 'country');
	}

	public function states()
	{
		return $this->hasMany(State::class, 'country');
	}

	public function members()
	{
		return $this->hasMany(Member::class, 'country');
	}
}
