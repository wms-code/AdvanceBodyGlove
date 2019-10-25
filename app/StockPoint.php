<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StockPoint extends Model
{
    use SoftDeletes, Auditable;

    public $table = 'stock_points';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'rack',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
