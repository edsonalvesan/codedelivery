<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Http\Requests;
use CodeDelivery\Http\Requests\AdminCategoryRequest;


class CategoriesController extends Controller
{

 private $repository;

    public function __construct(CategoryRepository $repository)
 {
    $this->middleware('auth');
    $this->repository = $repository;
 }
    
    public function Index()
  {

      $categories = $this->repository->paginate();

      return view('admin.categories.index',compact('categories'));

  }

    public function Create()
  {
      return view('admin.categories.create');

  }

    public function Store(AdminCategoryRequest $request)
    {
       $data = $request->all();
       $this->repository->create($data);

        return redirect()->route('admin.categories.index');
        //dd($request->all());

    }

    public function edit($id)
    {
        $category = $this->repository->find($id);

        return view('admin.categories.edit',compact('category'));


    }

    public function update(AdminCategoryRequest $request,$id)
    {
        $data = $request->all();
        $this->repository->update($data,$id);
        return redirect()->route('admin.categories.index');

    }

}
