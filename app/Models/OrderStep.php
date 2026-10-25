<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStep extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'icon',
        'icon_color',
        'step_number',
        'title',
        'description',
        'sort_order',
        'is_active',
    ];

    /**
     * @return array{is_active: 'boolean', step_number: 'integer', sort_order: 'integer'}
     */
    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'step_number' => 'integer',
            'sort_order' => 'integer',
        ];
    }
}
