<?php 
namespace App\Services;

class SallingGroupService
{
    protected SallingGroupApi $api;

    public function __construct(SallingGroupApi $api)
    {
        $this->api = $api;
    }

    public function getRelevant($productName)
    {
        return $this->api->getRelevantFood($productName);
    }

    public function getSimilar($productId)
    {
        return $this->api->getSimilarProducts($productId);
    }

    public function getBoughtTogether($productId)
    {
        return $this->api->getBoughtTogether($productId);
    }
}
