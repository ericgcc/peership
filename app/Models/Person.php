<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $preferred_name
 * @property string $email
 * @property ARRAY|null $phones
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Person extends Model
{
	protected $table = 'people';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'phones' => 'ARRAY'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'preferred_name',
		'email',
		'phones'
	];
}
