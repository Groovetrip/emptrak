<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public const RESULTS_PER_PAGE = 25;

    protected $connection = 'mysql';
    protected $table = 'employees';

    /** @var string[]  */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'birth_date',
    ];

    /** @var string[] */
    protected $dates = [
        'birth_date',
    ];

    /**
     * Get Employee's first and last name
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * @param Builder $query
     * @param string|null $name
     * @return Builder
     */
    public function scopeName(Builder $query, $name) {

        if (is_null($name)) return $query;

        $names = explode(' ', $name);
        return $query->whereIn('first_name', $names)
            ->orWhereIn('last_name', $names);
    }

    /**
     * @param Builder $query
     * @param string|null $email
     * @return Builder
     */
    public function scopeEmail(Builder $query, $email) {

        if (is_null($email)) return $query;
        return $query->where('email', 'LIKE', '%' . $email . '%');
    }

    /**
     * @param Builder $query
     * @param string|null $phone
     * @return Builder
     */
    public function scopePhone(Builder $query, $phone) {

        if (is_null($phone)) return $query;
        return $query->where('phone', 'LIKE', '%' . $phone . '%');
    }

    /**
     * @param Builder $query
     * @param string|null $gender
     * @return Builder
     */
    public function scopeGender(Builder $query, $gender) {

        if (is_null($gender)) return $query;
        return $query->where('gender', $gender);
    }

    public function scopeBirthDate(Builder $query, $birthDate) {

        if (is_null($birthDate)) return $query;

        $formattedBirthDate = Carbon::createFromFormat('m/d/Y', $birthDate);
        return $query->whereDate('birth_date', $formattedBirthDate);
    }
}
