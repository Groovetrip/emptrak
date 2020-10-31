<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
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
}
