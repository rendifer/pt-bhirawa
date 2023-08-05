<?php

namespace App\Http\Controllers\Solution\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherproductsController extends Controller
{
    public function oil()
    {
        return view ('layout.our_solution.product.oil');
    }

    public function Industrial()
    {
        return view ('layout.our_solution.product.Industrial');
    }
    public function Telecominication()
    {
        return view ('layout.our_solution.product.Telecominication');
    }
    public function Building()
    {
        return view ('layout.our_solution.product.Building');
    }
    public function Locker()
    {
        return view ('layout.our_solution.product.Locker');
    }
    public function Outdor()
    {
        return view ('layout.our_solution.product.Outdor');
    }
    public function Housing()
    {
        return view ('layout.our_solution.product.Housing');
    }
    public function Marshaling()
    {
        return view ('layout.our_solution.product.Marshaling');
    }
    public function Protection()
    {
        return view ('layout.our_solution.product.Protection');
    }
    public function Wall()
    {
        return view ('layout.our_solution.product.Wall');
    }
    public function Console()
    {
        return view ('layout.our_solution.product.Console');
    }
    public function project()
    {
        return view ('layout.our_solution.product.project');
    }

    public function service()
    {
        return view ('layout.our_solution.product.service');
    }

}