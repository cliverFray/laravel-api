<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Traits\ApiResponse;
use OpenApi\Annotations as OA;

class CategoryController extends Controller
{
    use ApiResponse;

    /**
     * @OA\Get(
     *     path="/api/categories",
     *     tags={"Categorías"},
     *     summary="Listado de categorías",
     *     @OA\Response(
     *         response=200,
     *         description="Operación exitosa"
     *     )
     * )
     */
    public function index()
    {
        $categories = Category::all();
        return $this->successResponse($categories, 'Categorías obtenidas correctamente');
    }

    /**
     * @OA\Post(
     *     path="/api/categories",
     *     tags={"Categorías"},
     *     summary="Crear categoría",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name"},
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="description", type="string")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Categoría creada"),
     *     @OA\Response(response=422, description="Error de validación")
     * )
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return $this->successResponse($category, 'Categoría creada correctamente', 201);
    }

    /**
     * @OA\Get(
     *     path="/api/categories/{id}",
     *     tags={"Categorías"},
     *     summary="Obtener categoría",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Operación exitosa"),
     *     @OA\Response(response=404, description="Categoría no encontrada")
     * )
     */
    public function show(Category $category)
    {
        return $this->successResponse($category, 'Categoría obtenida correctamente');
    }

    /**
     * @OA\Put(
     *     path="/api/categories/{id}",
     *     tags={"Categorías"},
     *     summary="Actualizar categoría",
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name"},
     *             @OA\Property(property="name", type="string"),
     *             @OA\Property(property="description", type="string")
     *         )
     *     ),
     *     @OA\Response(response=200, description="Categoría actualizada")
     * )
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return $this->successResponse($category, 'Categoría actualizada correctamente');
    }

    /**
     * @OA\Delete(
     *     path="/api/categories/{id}",
     *     tags={"Categorías"},
     *     summary="Eliminar categoría",
     *     @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     *     @OA\Response(response=200, description="Categoría eliminada")
     * )
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return $this->successResponse(null, 'Categoría eliminada correctamente');
    }
}
