<?php

namespace Ahmedtofaha\MeowPoints;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MeowPointsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('meow-points')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_meow_points_table');
    }
}
