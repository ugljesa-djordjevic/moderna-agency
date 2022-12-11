<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends BaseController
{
    public function index() {
        return view('client.pages.team');
    }
}
