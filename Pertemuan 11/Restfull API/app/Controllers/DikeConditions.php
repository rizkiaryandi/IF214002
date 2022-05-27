<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class DikeConditions extends BaseResourceController
{
    protected $modelName = 'App\Models\DikeConditionsModel';  

     /**
     * @OA\Get(
     *     path="/dikeConditions",
     *     tags={"DikeConditions"},
     *     summary="Find list DikeConditions",
     *     description="Returns list of DikeConditions",
     *     operationId="getDikeConditions",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/DikeConditions")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/DikeConditions")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/DikeConditions")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="DikeConditions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/dikeConditions/{id}",
     *     tags={"DikeConditions"},
     *     summary="Find DikeConditions by ID",
     *     description="Returns a single DikeConditions",
     *     operationId="getDikeConditionsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of DikeConditions to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/DikeConditions"),
     *         @OA\XmlContent(ref="#/components/schemas/DikeConditions"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="DikeConditions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/dikeConditions",
     *     tags={"DikeConditions"},
     *     summary="Add a new DikeConditions to the store",
     *     operationId="addDikeConditions",
     *     @OA\Response(
     *         response=201,
     *         description="Created DikeConditions",
     *         @OA\JsonContent(ref="#/components/schemas/DikeConditions"),
     *         @OA\XmlContent(ref="#/components/schemas/DikeConditions"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/DikeConditions"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/dikeConditions/{id}",
     *     tags={"DikeConditions"},
     *     summary="Update an existing DikeConditions",
     *     operationId="updateDikeConditions",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="DikeConditions id to update",
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
     *         description="DikeConditions not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/DikeConditions"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/dikeConditions/{id}",
     *     tags={"DikeConditions"},
     *     summary="Deletes a DikeConditions",
     *     operationId="deleteDikeConditions",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="DikeConditions id to delete",
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