<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NonAcademicSalary extends Model
{
    protected $table = 'nonacademicsalaries';
    protected $primaryKey = 'salaryid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'staffid', 'fullname', 'paymentdate', 'basic', 'costoflive', 'fest', 'interim', 'wop', 'insurance', 'stamp', 'welfare'

    ];
}
