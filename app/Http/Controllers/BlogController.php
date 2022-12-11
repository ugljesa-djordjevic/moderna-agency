<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends BaseController
{
    public function index() {
        return view('client.pages.blog');
    }

    public function blogDetail($id) {
        return view('client.pages.components.detail', ['id' => $id]);
    }
}
