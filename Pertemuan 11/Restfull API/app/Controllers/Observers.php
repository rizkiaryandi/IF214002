<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Observers extends BaseResourceController
{
    protected $modelName = 'App\Models\ObserversModel';  

     /**
     * @OA\Get(
     *     path="/observers",
     *     tags={"Observers"},
     *     summary="Find list Observers",
     *     description="Returns list of Observers",
     *     operationId="getObservers",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Observers")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Observers")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Observers")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Observers not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/observers/{id}",
     *     tags={"Observers"},
     *     summary="Find Observers by ID",
     *     description="Returns a single Observers",
     *     operationId="getObserversById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Observers to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Observers"),
     *         @OA\XmlContent(ref="#/components/schemas/Observers"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Observers not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/observers",
     *     tags={"Observers"},
     *     summary="Add a new Observers to the store",
     *     operationId="addObservers",
     *     @OA\Response(
     *         response=201,
     *         description="Created Observers",
     *         @OA\JsonContent(ref="#/components/schemas/Observers"),
     *         @OA\XmlContent(ref="#/components/schemas/Observers"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Observers"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/observers/{id}",
     *     tags={"Observers"},
     *     summary="Update an existing Observers",
     *     operationId="updateObservers",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Observers id to update",
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
     *         description="Observers not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Observers"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/observers/{id}",
     *     tags={"Observers"},
     *     summary="Deletes a Observers",
     *     operationId="deleteObservers",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Observers id to delete",
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