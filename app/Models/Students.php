<?php

namespace App\Models;

use App\Enums\StudentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    /** @use HasFactory<\Database\Factories\StudentsFactory> */
    use HasFactory;

    protected $fillable = [
        'full_name',
        'badge',
        'institutional_email',
        'available_permits',
        'state'
    ];

    protected function casts(): array
    {
        return [
            'state'=>StudentStatus::class
        ];
    }
}
