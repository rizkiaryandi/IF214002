<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Cities extends BaseResourceController
{
    protected $modelName = 'App\Models\CitiesModel';  

     /**
     * @OA\Get(
     *     path="/cities",
     *     tags={"Cities"},
     *     summary="Find list Cities",
     *     description="Returns list of Cities",
     *     operationId="getCities",  
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="search by column defined",     
     *         @OA\Schema(
     *             type="object"              
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="order",
     *         in="query",
     *         description="order by column defined",     
     *         @OA\Schema(
     *             type="object"              
     *         )
     *     ),    
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="page to show",     
     *         @OA\Schema(
     *             type="int32"     
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="count data display per page",     
     *         @OA\Schema(
     *             type="int32"     
     *         )
     *     ),   
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",     
     *         @OA\JsonContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Cities")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Cities")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Cities")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Cities not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/cities/{id}",
     *     tags={"Cities"},
     *     summary="Find Cities by ID",
     *     description="Returns a single Cities",
     *     operationId="getCitiesById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Cities to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Cities"),
     *         @OA\XmlContent(ref="#/components/schemas/Cities"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Cities not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/cities",
     *     tags={"Cities"},
     *     summary="Add a new Cities to the store",
     *     operationId="addCities",
     *     @OA\Response(
     *         response=201,
     *         description="Created Cities",
     *         @OA\JsonContent(ref="#/components/schemas/Cities"),
     *         @OA\XmlContent(ref="#/components/schemas/Cities"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Cities"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/cities/{id}",
     *     tags={"Cities"},
     *     summary="Update an existing Cities",
     *     operationId="updateCities",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Cities id to update",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Cities not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Cities"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/cities/{id}",
     *     tags={"Cities"},
     *     summary="Deletes a Cities",
     *     operationId="deleteCities",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Cities id to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pet not found",
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     * )
     */
} 