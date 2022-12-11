<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\callback;

class ContactController extends BaseController
{
    public function index() {
        return view('client.pages.contact');
    }
}
