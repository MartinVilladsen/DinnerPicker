<?php 
namespace App\Services;

use Illuminate\Support\Facades\Http;

class SallingGroupApi
{
    protected string $relevantUrl = 'https://api.sallinggroup.com/v1/product-suggestions/relevant-products?';
    protected string $similarUrl = 'https://api.sallinggroup.com/v1/product-suggestions/similar-products?';
    protected string $boughtTogetherUrl = 'https://api.sallinggroup.com/v1/product-suggestions/frequently-bought-together?';


    public function getRelevantFood($product)
    {
        $response = Http::withToken(config('services.salling.token'))
            ->get($this->relevantUrl, [
                'query' => $product,
            ]);

        if ($response->ok()) {
            return $response->json();
        }

        throw new \Exception('API request failed: ' . $response->body());
    }

    public function getSimilarProducts($productId)
    {
        $response = Http::withToken(config('services.salling.token'))
            ->get($this->similarUrl, [
                'productId' => $productId,
            ]);

        if ($response->ok()) {
            return $response->json();
        }

        throw new \Exception('API request failed: ' . $response->body());
    }
    
    public function getBoughtTogether($productId)
    {
        $response = Http::withToken(config('services.salling.token'))
            ->get($this->boughtTogetherUrl, [
                'productId' => $productId,
            ]);

        if ($response->ok()) {
            return $response->json();
        }

        throw new \Exception('API request failed: ' . $response->body());
    }

}
