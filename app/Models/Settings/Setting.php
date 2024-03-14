<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slogan",
        "logo",
        "status",
    ];
    protected $attributes = [
        'status' => 'Inactive',
    ];
}
