<?php

class PagesController extends BaseController {

    public function homePage()
    {
        return View::make('pages.home');
    }

}