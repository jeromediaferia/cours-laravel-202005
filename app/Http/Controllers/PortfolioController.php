<?php

namespace App\Http\Controllers;

use App\Model\Portfolio;
use App\Model\User;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
//        Portfolio::find(1)->user
        $portfolios = User::find(1)->portfolios()->paginate(1);

        return view('portfolios.index')
            ->with('portfolios', $portfolios);

    }
}
