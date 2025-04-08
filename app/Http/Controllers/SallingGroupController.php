<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductSuggestionService;
use App\Services\SallingGroupService;

class SallingGroupController extends Controller
{
    public function index()
    {
        $categories = [
            'Pasta' => '/images/food/pasta.jpg',
            'Pizza' => '/images/food/pizza.jpg',
            'Salat' => '/images/food/salads.jpg',
            'Burger'=> '/images/food/burgers.jpg',
            'Suppe'=> '/images/food/soups.jpg',
            'Fisk'=> '/images/food/seafood.jpg',
            'Vegetarisk'=> '/images/food/vegetarian.jpg',
            'Ris' => '/images/food/rice.jpg'
        ];
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
