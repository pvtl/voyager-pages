<?php

namespace Pvtl\VoyagerPages\Listeners;

use Illuminate\Support\Facades\Artisan;
use TCG\Voyager\Events\BreadDataChanged;

class ClearPagesCache
{
    /**
     * handle.
     *
     * @param BreadDataChanged $event
     *
     * @return void
     */
    public function handle(BreadDataChanged $event)
    {
        if ($event->dataType->name === 'pages') {
            Artisan::call('route:clear');
            Artisan::call('view:clear');
        }
    }
}
