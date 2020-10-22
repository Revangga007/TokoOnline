<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BackendController;


class DashboardController extends BackendController
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $bcrum = $this->bcrum('Dashboard');
        return view('backend.home.index', compact('bcrum'));
    }
}
