<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Rivers extends BaseResourceController
{
    protected $modelName = 'App\Models\RiversModel';  

     /**
     * @OA\Get(
     *     path="/rivers",
     *     tags={"Rivers"},
     *     summary="Find list Rivers",
     *     description="Returns list of Rivers",
     *     operationId="getRivers",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Rivers")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Rivers")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Rivers")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Rivers not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/rivers/{id}",
     *     tags={"Rivers"},
     *     summary="Find Rivers by ID",
     *     description="Returns a single Rivers",
     *     operationId="getRiversById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Rivers to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Rivers"),
     *         @OA\XmlContent(ref="#/components/schemas/Rivers"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Rivers not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/rivers",
     *     tags={"Rivers"},
     *     summary="Add a new Rivers to the store",
     *     operationId="addRivers",
     *     @OA\Response(
     *         response=201,
     *         description="Created Rivers",
     *         @OA\JsonContent(ref="#/components/schemas/Rivers"),
     *         @OA\XmlContent(ref="#/components/schemas/Rivers"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Rivers"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/rivers/{id}",
     *     tags={"Rivers"},
     *     summary="Update an existing Rivers",
     *     operationId="updateRivers",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Rivers id to update",
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
     *         description="Rivers not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Rivers"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/rivers/{id}",
     *     tags={"Rivers"},
     *     summary="Deletes a Rivers",
     *     operationId="deleteRivers",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Rivers id to delete",
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