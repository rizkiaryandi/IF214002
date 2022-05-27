<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class DrainConditions extends BaseResourceController
{
    protected $modelName = 'App\Models\DrainConditionsModel';  

     /**
     * @OA\Get(
     *     path="/drainConditions",
     *     tags={"DrainConditions"},
     *     summary="Find list DrainConditions",
     *     description="Returns list of DrainConditions",
     *     operationId="getDrainConditions",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/DrainConditions")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/DrainConditions")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/DrainConditions")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="DrainConditions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/drainConditions/{id}",
     *     tags={"DrainConditions"},
     *     summary="Find DrainConditions by ID",
     *     description="Returns a single DrainConditions",
     *     operationId="getDrainConditionsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of DrainConditions to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/DrainConditions"),
     *         @OA\XmlContent(ref="#/components/schemas/DrainConditions"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="DrainConditions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/drainConditions",
     *     tags={"DrainConditions"},
     *     summary="Add a new DrainConditions to the store",
     *     operationId="addDrainConditions",
     *     @OA\Response(
     *         response=201,
     *         description="Created DrainConditions",
     *         @OA\JsonContent(ref="#/components/schemas/DrainConditions"),
     *         @OA\XmlContent(ref="#/components/schemas/DrainConditions"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/DrainConditions"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/drainConditions/{id}",
     *     tags={"DrainConditions"},
     *     summary="Update an existing DrainConditions",
     *     operationId="updateDrainConditions",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="DrainConditions id to update",
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
     *         description="DrainConditions not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/DrainConditions"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/drainConditions/{id}",
     *     tags={"DrainConditions"},
     *     summary="Deletes a DrainConditions",
     *     operationId="deleteDrainConditions",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="DrainConditions id to delete",
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