<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Prompts\Table;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Category;
use App\Models\Time;

class Dish extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dishes';

        /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'image',
        'time_id',
        'category_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function time(): BelongsTo
    {
        return $this->belongsTo(Time::class, 'time_id');
    }
}
