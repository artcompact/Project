<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'responsible',
        'start_date',
        'end_date',
    ];

    // Validarea pentru coloana "status"
    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (!in_array($model->status, ['activ', 'finalizat', 'sters'])) {
                throw new \Exception('Statusul trebuie să fie "activ", "finalizat" sau "sters".');
            }
        });
    }
}