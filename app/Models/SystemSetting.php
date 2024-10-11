<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemSetting extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'address',
        'phone_number',
        'email',
        'system_name',
        'copyright_text',
        'logo',
        'favicon',
        'description',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function casts(): array {
        return [
            'title'          => 'string',
            'address'        => 'string',
            'phone_number'   => 'string',
            'email'          => 'string',
            'system_name'    => 'string',
            'copyright_text' => 'string',
            'logo'           => 'string',
            'favicon'        => 'string',
            'description'    => 'string',
        ];
    }
}