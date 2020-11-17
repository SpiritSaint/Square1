<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'publication_date',
    ];

    /**
     * The attributes that are casted.
     *
     * @var array
     */
    protected $casts = [
        'publication_date' => 'datetime',
    ];

    /**
     * The model has timestamps.
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The model belongs to user.
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
