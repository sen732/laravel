<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaterSource extends Model
{
    protected $table = 'watersources'; // Ensure this matches your table name in the database
    protected $fillable = ['name', 'type', 'capacity'];
}
