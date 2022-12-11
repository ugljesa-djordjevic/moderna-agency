<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends BaseController
{
    public function index() {
        return view('client.pages.portfolio');
    }

    public function portfolioDetail($id) {
        return view('client.pages.components.portfolio-detail', ['id' => $id]);
    }
}
