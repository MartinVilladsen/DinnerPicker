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

    public function show(SallingGroupService $service, $category)
    {
        $results = $service->getRelevant($category);

        return view('food.results', [
            'results' => $results['suggestions'],
            'category' => $category
        ]);
    }

    public function boughtTogether(SallingGroupService $service, $prodId)
    {
        $results = $service->getBoughtTogether($prodId);
        
        return view('food.boughtTogether', [
            'results' => $results,
            'prodId' => $prodId
        ]);
    }
}
