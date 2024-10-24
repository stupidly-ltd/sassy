<?php

namespace Stupidly\Sassy\App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $casts = [
        'json' => 'array'
    ];

    protected $fillable = [
        'block',
        'page_id',
        'posts',
        'json'
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
