<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class StudentResponsible extends Model
{
    use HasUuids;

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
    ];

    /**
     * Get the students related to this responsible. 
     */
    public function students()
    {
        return $this->belongsToMany(Student::class, foreignPivotKey: 'student_responsible_uuid', relatedPivotKey: 'student_uuid')
                    ->withPivot('filiation');
    }
}
