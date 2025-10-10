<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'persons';

    protected $fillable = [
        'person_code',
        'name',
        'email',
        'password',
        'mobile_no',
        'person_type'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $lastCode = Person::max('person_code');
            $model->person_code = $lastCode ? $lastCode + 1 : 1000;
        });
    }
}
