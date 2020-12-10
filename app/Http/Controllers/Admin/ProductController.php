<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Gate;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\View\View;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Application|Factory|View|void
     */
    public function index(Request $request)
    {
        //$products = Product::search($request->input('search'))
        //->orderBy('id', 'asc', $request->get('sort', config('app.sort_direction')))
        //->paginate();

        //return response()->view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Product $product
     * @return Application|Factory|Response|View
     */
    public function create(Product $product)
    {
        if (Gate::denies('edit-users')) {
            return redirect(route('admin.products.index'));
        }

        return view('admin.products.create')->with(
            [
                'product'  => $product,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductRequest $request
     * @return void
     */
    public function store(StoreProductRequest $request, Product $product)
    {
        $product->code = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->url_image = $request->url_image;
        $product->save();


        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return Response
     */
    public function show(Product $product)
    {
        return response()->view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return Application|Factory|Response|View
     */
    public function edit(Product $product)
    {
        if (Gate::denies('edit-users')) {
            return redirect(route('admin.products.index'));
        }

        return view('admin.products.edit')->with(
            [
                'product'  => $product,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductRequest $request
     * @param Product $product
     * @return void
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->code = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->url_image = $request->url_image;
        $product->save();


        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return RedirectResponse
     */
    public function destroy(Product $product)
    {
        if (Gate::denies('edit-users')) {
            return redirect(route('admin.products.index'));
        }

        $product->delete();

        return back();
    }

    /**
     * Import the specified resource
     *
     * @param ImportProductRequest $request
     * @param ImportProductsAction $action
     * @return RedirectResponse
     */
    public function import(ImportProductRequest $request, ImportProductsAction $action)
    {
        $importedProducts = $action->setImportFile($request->file('import_file'))->execute();

        return redirect()->route('admin.products.index')->withSuccess("{$importedProducts} products were imported!");
    }
}
