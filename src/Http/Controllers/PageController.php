<?php

namespace Pvtl\VoyagerPages\Http\Controllers;

use Pvtl\VoyagerPages\Page;
use TCG\Voyager\Http\Controllers\VoyagerBreadController as BaseVoyagerBreadController;

class PageController extends BaseVoyagerBreadController
{
    /**
     * This is the module's view path that can be overriden
     */
    protected $viewPath = 'voyager-pages::modules.pages.default';

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

        return view($this->viewPath, [
            'page' => $page,
        ]);
    }
}
