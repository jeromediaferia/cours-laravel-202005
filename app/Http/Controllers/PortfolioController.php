<?php

namespace App\Http\Controllers;

use App\Model\Portfolio;
use App\Model\User;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
//        dd(User::find(1)->portfolios);
        dd(Portfolio::find(1)->user);

    }
}
