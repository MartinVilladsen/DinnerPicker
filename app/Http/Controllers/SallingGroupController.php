<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductSuggestionService;
use App\Services\SallingGroupService;

class SallingGroupController extends Controller
{
    public function index()
    {
        $categories = ['Juice', 'Milk', 'Bread', 'Snacks', 'Fruit'];
        return view('food.index', compact('categories'));
    }

    public function search(Request $request, SallingGroupService $service)
    {
        $request->validate([
            'category' => 'required|string',
        ]);

        $results = $service->getRelevantFor($request->input('category'));

        return view('food.results', [
            'results' => $results['suggestions'],
            'category' => $request->input('category')
        ]);
    }
}
