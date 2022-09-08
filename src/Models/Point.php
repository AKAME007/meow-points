<?php

namespace VendorName\Skeleton\Models;

class Point extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'meow_points';

    protected $fillable = [
        'owner_id',
        'owner_type',
        'pointable_id',
        'pointable_type',
        'count',
        'type',
    ];

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function pointable()
    {
        return $this->morphTo();
    }

    public function owner()
    {
        return $this->morphTo();
    }

    public function for($pointable)
    {
        return $this->pointable()->associate($pointable);
    }
}
