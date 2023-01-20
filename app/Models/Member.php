<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $preferred_name
 * @property string $email
 * @property ARRAY|null $phones
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Carbon $birth_date
 * @property string $country
 * @property string $contact_language
 * @property string|null $pronouns
 * @property string|null $gender
 * @property int $address_id
 * @property string|null $emergency_contacts
 * @property string|null $reference_contacts
 * 
 * @property Language $language
 * @property Address $address
 *
 * @package App\Models
 */
class Member extends Model
{
	protected $table = 'members';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'phones' => 'ARRAY',
		'address_id' => 'int'
	];

	protected $dates = [
		'birth_date'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'preferred_name',
		'email',
		'phones',
		'birth_date',
		'country',
		'contact_language',
		'pronouns',
		'gender',
		'address_id',
		'emergency_contacts',
		'reference_contacts'
	];

	public function country()
	{
		return $this->belongsTo(Country::class, 'country');
	}

	public function language()
	{
		return $this->belongsTo(Language::class, 'contact_language');
	}

	public function address()
	{
		return $this->belongsTo(Address::class);
	}
}
