<?php

namespace App\Http\Controllers;

class ComponentPagesController extends Controller
{
    /**
     * Display the buttons page
     *
     * @return \Illuminate\View\View
     */
    public function buttons()
    {
        return view('dashboard.pages.components.buttons');
    }

    /**
     * Display the grid system page
     *
     * @return \Illuminate\View\View
     */
    public function grid()
    {
        return view('dashboard.pages.components.grid');
    }

    /**
     * Display the panels page
     *
     * @return \Illuminate\View\View
     */
    public function panels()
    {
        return view('dashboard.pages.components.panels');
    }

    /**
     * Display the sweet alert page
     *
     * @return \Illuminate\View\View
     */
    public function sweetAlert()
    {
        return view('dashboard.pages.components.sweet_alert');
    }

    /**
     * Display the notifications page
     *
     * @return \Illuminate\View\View
     */
    public function notifications()
    {
        return view('dashboard.pages.components.notifications');
    }

    /**
     * Display the icons page
     *
     * @return \Illuminate\View\View
     */
    public function icons()
    {
        return view('dashboard.pages.components.icons');
    }

    /**
     * Display the typography page
     *
     * @return \Illuminate\View\View
     */
    public function typography()
    {
        return view('dashboard.pages.components.typography');
    }
}
