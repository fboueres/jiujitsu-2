<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasUuids, SoftDeletes;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'uuid';    
    
    /**
     * Attributes that can be mass assigned.
     * 
     * @var array
     */
    protected $fillable = [
        'cpf',
        'name',
        'email',
        'gender',
        'birth_date',
        'phone_number',
        'enrollment_date',
    ];
    
}
