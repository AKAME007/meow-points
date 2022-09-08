<?php

namespace Ahmedtofaha\MeowPoints\Traits;

use VendorName\Skeleton\Models\Point;

trait HasPoints
{
    public function points()
    {
        return $this->morphMany(Point::class, 'owner', 'owner_type', 'owner_id');
    }

    public function addPoints($points)
    {
        return $this->points()->create([
            'count' => $points,
            'type' => 'add',
        ]);
    }

    public function subPoints($points)
    {
        return $this->points()->create([
            'count' => $points,
            'type' => 'sub',
        ]);
    }

    public function getPointsAttribute()
    {
        return $this->points()->type('add')->sum('count') - $this->points()->type('sub')->sum('count');
    }
}
