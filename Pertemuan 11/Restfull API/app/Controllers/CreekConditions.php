<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class CreekConditions extends BaseResourceController
{
    protected $modelName = 'App\Models\CreekConditionsModel';  

     /**
     * @OA\Get(
     *     path="/creekConditions",
     *     tags={"CreekConditions"},
     *     summary="Find list CreekConditions",
     *     description="Returns list of CreekConditions",
     *     operationId="getCreekConditions",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/CreekConditions")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/CreekConditions")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/CreekConditions")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="CreekConditions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/creekConditions/{id}",
     *     tags={"CreekConditions"},
     *     summary="Find CreekConditions by ID",
     *     description="Returns a single CreekConditions",
     *     operationId="getCreekConditionsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of CreekConditions to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/CreekConditions"),
     *         @OA\XmlContent(ref="#/components/schemas/CreekConditions"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="CreekConditions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/creekConditions",
     *     tags={"CreekConditions"},
     *     summary="Add a new CreekConditions to the store",
     *     operationId="addCreekConditions",
     *     @OA\Response(
     *         response=201,
     *         description="Created CreekConditions",
     *         @OA\JsonContent(ref="#/components/schemas/CreekConditions"),
     *         @OA\XmlContent(ref="#/components/schemas/CreekConditions"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/CreekConditions"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/creekConditions/{id}",
     *     tags={"CreekConditions"},
     *     summary="Update an existing CreekConditions",
     *     operationId="updateCreekConditions",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="CreekConditions id to update",
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
     *         description="CreekConditions not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/CreekConditions"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/creekConditions/{id}",
     *     tags={"CreekConditions"},
     *     summary="Deletes a CreekConditions",
     *     operationId="deleteCreekConditions",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="CreekConditions id to delete",
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