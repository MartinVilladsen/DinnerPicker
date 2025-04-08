<?php 
namespace App\Services;

class SallingGroupService
{
    protected SallingGroupApi $api;

    public function __construct(SallingGroupApi $api)
    {
        $this->api = $api;
    }

    public function getRelevantFor($productName)
    {
        return $this->api->getRelevantFood($productName);
    }

    public function getSimilarFor($productId)
    {
        return $this->api->getSimilarProducts($productId);
    }

    public function getBoughtTogetherFor($productId)
    {
        return $this->api->getBoughtTogether($productId);
    }
}
