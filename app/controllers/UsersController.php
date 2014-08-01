<?php

class UsersController extends BaseController {

    /**
     * Show form to register/create a new user
     * @return View
     */
    public function create()
    {
        return View::make('pages.register');
    }

    /**
     * Create/Store a new user
     * @todo
     */
    public function store()
    {
        return Redirect::route('home');
    }

}