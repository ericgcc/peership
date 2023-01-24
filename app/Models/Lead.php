<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lead
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $preferred_name
 * @property string $email
 * @property ARRAY|null $phones
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $contact_language
 * @property string|null $notes
 * 
 * @property Language $language
 *
 * @package App\Models
 */
class Lead extends Model
{
	protected $table = 'leads';
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
		'phones',
		'contact_language',
		'notes'
	];

	public function language()
	{
		return $this->belongsTo(Language::class, 'contact_language');
	}
}
