<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Dikes extends BaseResourceController
{
    protected $modelName = 'App\Models\DikesModel';  

     /**
     * @OA\Get(
     *     path="/dikes",
     *     tags={"Dikes"},
     *     summary="Find list Dikes",
     *     description="Returns list of Dikes",
     *     operationId="getDikes",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Dikes")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Dikes")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Dikes")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Dikes not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/dikes/{id}",
     *     tags={"Dikes"},
     *     summary="Find Dikes by ID",
     *     description="Returns a single Dikes",
     *     operationId="getDikesById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Dikes to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Dikes"),
     *         @OA\XmlContent(ref="#/components/schemas/Dikes"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Dikes not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/dikes",
     *     tags={"Dikes"},
     *     summary="Add a new Dikes to the store",
     *     operationId="addDikes",
     *     @OA\Response(
     *         response=201,
     *         description="Created Dikes",
     *         @OA\JsonContent(ref="#/components/schemas/Dikes"),
     *         @OA\XmlContent(ref="#/components/schemas/Dikes"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Dikes"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/dikes/{id}",
     *     tags={"Dikes"},
     *     summary="Update an existing Dikes",
     *     operationId="updateDikes",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Dikes id to update",
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
     *         description="Dikes not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Dikes"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/dikes/{id}",
     *     tags={"Dikes"},
     *     summary="Deletes a Dikes",
     *     operationId="deleteDikes",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Dikes id to delete",
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