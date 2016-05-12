<?php
namespace CodeDelivery\Http\Controllers\Api\Client;


use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Controllers\Controller;




class ClientProductController extends Controller
{
    private $repository;
    
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }
    
    public  function index(){
        $products = $this->repository
            ->skipPresenter(false)
            ->all();
        return $products;
    }
}