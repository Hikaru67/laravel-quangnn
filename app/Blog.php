<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array[] $listBlogs)
 * @method static find($id)
 * @method static findOrFail($id)
 */
class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true;
    protected $fillable = [
        'title',
        'des',
        'detail',
        'thumbs',
        'category',
        'position',
        'public',
        'data_pubblic',
    ];
    protected $casts = [
        'position' => 'array',
    ];
    protected $primaryKey = 'id';
    protected $table = 'blogs';
}
