<?php

namespace CodeDelivery\Http\Controllers\Api\Client;

use CodeDelivery\Http\Controllers\Controller;
use CodeDelivery\Http\Requests\CheckoutRequest;
use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\OrderService;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;


class ClientCheckoutController extends Controller
{

 private $repository;
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var ProductRepository
     */
    private $productRepository;
    /**
     * @var OrderService
     */
    private $orderService;

    private $with = ['client','cupom','items'];

    public function __construct(
        OrderRepository $repository,
        UserRepository $userRepository,
        ProductRepository $productRepository,
        OrderService $orderService
    )
 {

     $this->repository = $repository;
     $this->userRepository = $userRepository;
     $this->productRepository = $productRepository;
     $this->orderService = $orderService;
 }




public function index()
{
        $id = Authorizer::getResourceOwnerId();
        $clientId = $this->userRepository->find($id)->client->id;
        $orders = $this->repository
            ->skipPresenter(false)
            ->with($this->with)
            ->scopeQuery(function($query) use($clientId){
            return $query->where('client_id', '=', $clientId);
        })->paginate();

        return $orders;
}




public function store(CheckoutRequest $request)
{

    $id = Authorizer::getResourceOwnerID();
    $data = $request->all();
    $clientId = $this->userRepository->find($id)->client->id;
    $data['client_id'] = $clientId;
    $order = $this->orderService->create($data);
    return $this->repository
        ->skipPresenter(false)
        ->with($this->with)
        ->find($order->id);

    
}

public function show($id)
{
    return $this->repository
        ->skipPresenter(false)
        ->with($this->with)
        ->find($id);
}

}
