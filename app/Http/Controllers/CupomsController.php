<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\CupomRepository;
use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminCupomRequest;


class CupomsController extends Controller
{

 private $repository;

    public function __construct(CupomRepository $repository)
 {
    $this->middleware('auth');
    $this->repository = $repository;
 }
    
    public function Index()
  {

      $cupoms = $this->repository->paginate();

      return view('admin.cupoms.index',compact('cupoms'));

  }

    public function Create()
  {
      return view('admin.cupoms.create');

  }

    public function Store(AdminCupomRequest $request)
    {
       $data = $request->all();
       $this->repository->create($data);

        return redirect()->route('admin.cupoms.index');

    }

    public function edit($id)
    {
        $cupom = $this->repository->find($id);

        return view('admin.cupoms.edit',compact('cupom'));


    }

    public function update(AdminCupomRequest $request,$id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);
        return redirect()->route('admin.cupoms.index');

    }

}
