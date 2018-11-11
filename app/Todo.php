<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /**
     * Column yang bisa di inputkan data
     *
     * @var array
     */
    protected $fillable = ['name'];
}
