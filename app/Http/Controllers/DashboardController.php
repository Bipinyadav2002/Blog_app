<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::all(); // Fetch all categories
        return view('dashboard', compact('categories')); // Pass categories to view
    }
}


