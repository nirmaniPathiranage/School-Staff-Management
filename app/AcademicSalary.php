<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicSalary extends Model
{
    protected $table = 'academicsalaries';
    protected $primaryKey = 'salaryid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'staffid', 'fullname', 'paymentdate', 'basic', 'costoflive', 'fest', 'interim', 'leavebalance', 'wop', 'insurance', 'stamp', 'welfare'

        ];
}
