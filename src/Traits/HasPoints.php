<?php

namespace AhmedTofaha\MeowPoints\Traits;

use AhmedTofaha\MeowPoints\Models\Point;

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

    public function addAmount($amount)
    {
        return $this->addPoints($amount * config('meow-points.amount'));
    }

    public function subAmount($amount)
    {
        return $this->subPoints($amount * config('meow-points.amount'));
    }

    public function getCurrentPointsAttribute()
    {
        return $this->points()->type('add')->sum('count') - $this->points()->type('sub')->sum('count');
    }
    public function getCurrentAmountAttribute()
    {
        return $this->getCurrentPointsAttribute() / config('meow-points.amount');
    }
}
