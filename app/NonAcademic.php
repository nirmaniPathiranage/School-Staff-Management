<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NonAcademic extends Model
{
    protected $table = 'nonacademics';

    protected $primaryKey = 'staffid';
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'staffid', 'fullname', 'dob', 'gender',  'nic', 'paddress', 'caddress', 'contact', 'email', 'profession', 'qualifications', 'experience', 'department','username', 'passsword', 'confirmpassword', 'regdate'

    ];
}
