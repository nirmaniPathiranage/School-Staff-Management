<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NonLeaveRequest extends Model
{
    protected $table = 'nonleaverequests';

    protected $primaryKey = 'leaveid';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'staffid', 'fullname', 'profession', 'department', 'from', 'to', 'type', 'reason', 'status'

    ];
}
