<?php

namespace App\Http\Controllers;


use App\Models\Productos;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;

/**  */
class ProductosController extends BaseController
{
    /**
     * Retrieves all products or filters products by name.
     *
     * @param Request $request The request object.
     * @return string The response with the retrieved products.
     */
    public function index(Request $request)
    {
        $name = $request->query('name');
        if ($name != null) {
            $products = Productos::where('name', 'like', '%' . $name . '%')->paginate()->withQueryString();
        } else {
            $products = Productos::paginate()->withQueryString();
        }

        return $this->sendResponse($products, 'Productos extraídos exitosamente.');
    }

    /**
     * Creates a new product based on the provided request data.
     *
     * @param Request $request The request object.
     * @return string The response with the created product.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $product = Productos::create($input);

        return $this->sendResponse($product, 'Producto creado exitosamente.', 201);
    }

    /**
     * Retrieves a specific product by its ID.
     *
     * @param int $id The product ID.
     * @return string The response with the retrieved product.
     */
    public function show($id)
    {
        $product = Productos::find($id);
        if (!empty($product)) {
            return $this->sendResponse($product, 'Producto encontrado exitosamente.');
        } else {
            return $this->sendError('Producto no encontrado');
        }
    }

    /**
     * Updates a specific product with the provided request data.
     *
     * @param Request $request The request object.
     * @param int $id The product ID.
     * @return string The response with the updated product.
     */
    public function update(Request $request, $id)
    {
        if (Productos::where('id', $id)->exists()) {
            $product = Productos::find($id);
            $product->update($request->all());
            $product->save();
            return $this->sendResponse($product, 'Product actualizado exitosamente.');
        } else {
            return $this->sendError('No se ha podido actualizar el producto', [], 404);
        }
    }

    /**
     * Deletes a specific product by its ID.
     *
     * @param int $id The product ID.
     * @return string The response indicating the success of the deletion.
     */
    public function destroy($id)
    {

        if (Productos::where('id', $id)->exists()) {
            $product = Productos::find($id);
            $product->delete();
            return $this->sendResponse([], 'Product Deleted Successfully.');
        } else {
            return $this->sendError('El producto no existe en la base de datos', [], 404);
        }
    }
}
