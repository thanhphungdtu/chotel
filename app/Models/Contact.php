<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'vnecontact';
    protected $guarded = [''];
    public $timestamps = false;
}
