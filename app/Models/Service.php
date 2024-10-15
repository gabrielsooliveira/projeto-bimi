<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'name',
        'has_plan',
    ];

    public function plans()
    {
        return $this->hasMany(Plan::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_service')->withPivot('plan_id');
    }
}
