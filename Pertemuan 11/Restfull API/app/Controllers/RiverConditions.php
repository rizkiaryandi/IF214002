<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class RiverConditions extends BaseResourceController
{
    protected $modelName = 'App\Models\RiverConditionsModel';  

     /**
     * @OA\Get(
     *     path="/riverConditions",
     *     tags={"RiverConditions"},
     *     summary="Find list RiverConditions",
     *     description="Returns list of RiverConditions",
     *     operationId="getRiverConditions",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RiverConditions")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RiverConditions")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/RiverConditions")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="RiverConditions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/riverConditions/{id}",
     *     tags={"RiverConditions"},
     *     summary="Find RiverConditions by ID",
     *     description="Returns a single RiverConditions",
     *     operationId="getRiverConditionsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of RiverConditions to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/RiverConditions"),
     *         @OA\XmlContent(ref="#/components/schemas/RiverConditions"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="RiverConditions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/riverConditions",
     *     tags={"RiverConditions"},
     *     summary="Add a new RiverConditions to the store",
     *     operationId="addRiverConditions",
     *     @OA\Response(
     *         response=201,
     *         description="Created RiverConditions",
     *         @OA\JsonContent(ref="#/components/schemas/RiverConditions"),
     *         @OA\XmlContent(ref="#/components/schemas/RiverConditions"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/RiverConditions"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/riverConditions/{id}",
     *     tags={"RiverConditions"},
     *     summary="Update an existing RiverConditions",
     *     operationId="updateRiverConditions",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RiverConditions id to update",
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
     *         description="RiverConditions not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/RiverConditions"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/riverConditions/{id}",
     *     tags={"RiverConditions"},
     *     summary="Deletes a RiverConditions",
     *     operationId="deleteRiverConditions",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RiverConditions id to delete",
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