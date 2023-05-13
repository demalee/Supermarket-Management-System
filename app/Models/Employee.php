<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'gender ',
        'manager_id'
    ];
    public function Manager()
    {
        return $this->belongsTo(Manager::class);
    }
}
