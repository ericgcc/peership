<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 * 
 * @property string $id
 * @property string $name
 * 
 * @property Collection|Member[] $members
 * @property Collection|Lead[] $leads
 *
 * @package App\Models
 */
class Language extends Model
{
	protected $table = 'languages';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function members()
	{
		return $this->hasMany(Member::class, 'contact_language');
	}

	public function leads()
	{
		return $this->hasMany(Lead::class, 'contact_language');
	}
}
