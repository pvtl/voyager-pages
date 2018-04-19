<?php

namespace Pvtl\VoyagerPages\Http\Controllers;

use Pvtl\VoyagerPages\Page;
use TCG\Voyager\Http\Controllers\VoyagerBreadController as BaseVoyagerBreadController;

class PageController extends BaseVoyagerBreadController
{
    /**
     * Route: Gets a single page and passes data to a view
     *
     * @param string $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPage($slug = 'home')
    {
        $page = Page::where('slug', '=', $slug)->firstOrFail();

        return view('voyager-pages::modules.pages.default', [
            'page' => $page,
        ]);
    }
}
