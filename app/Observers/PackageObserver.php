<?php

namespace App\Observers;

use App\Models\package;

class PackageObserver
{
    /**
     * Handle the package "created" event.
     *
     * @param  \App\Models\package  $package
     * @return void
     */
    public function created(package $package)
    {
        //
    }

    /**
     * Handle the package "updated" event.
     *
     * @param  \App\Models\package  $package
     * @return void
     */
    public function updated(package $package)
    {
        //
    }

    /**
     * Handle the package "deleted" event.
     *
     * @param  \App\Models\package  $package
     * @return void
     */
    public function deleted(package $package)
    {
        //
    }

    /**
     * Handle the package "restored" event.
     *
     * @param  \App\Models\package  $package
     * @return void
     */
    public function restored(package $package)
    {
        //
    }

    /**
     * Handle the package "force deleted" event.
     *
     * @param  \App\Models\package  $package
     * @return void
     */
    public function forceDeleted(package $package)
    {
        //
    }
}
