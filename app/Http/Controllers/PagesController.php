<?php namespace App\Http\Controllers;

class PagesController extends Controller {

    /**
     * @return \Illuminate\View\View
     */
    public function about()
    {
        $people = ['diego', 'henrique', 'rodrigues'];

        return view('pages.about', compact('people'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
