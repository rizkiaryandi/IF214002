<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Creeks extends BaseResourceController
{
    protected $modelName = 'App\Models\CreeksModel';  

     /**
     * @OA\Get(
     *     path="/creeks",
     *     tags={"Creeks"},
     *     summary="Find list Creeks",
     *     description="Returns list of Creeks",
     *     operationId="getCreeks",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Creeks")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Creeks")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Creeks")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Creeks not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/creeks/{id}",
     *     tags={"Creeks"},
     *     summary="Find Creeks by ID",
     *     description="Returns a single Creeks",
     *     operationId="getCreeksById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Creeks to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Creeks"),
     *         @OA\XmlContent(ref="#/components/schemas/Creeks"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Creeks not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/creeks",
     *     tags={"Creeks"},
     *     summary="Add a new Creeks to the store",
     *     operationId="addCreeks",
     *     @OA\Response(
     *         response=201,
     *         description="Created Creeks",
     *         @OA\JsonContent(ref="#/components/schemas/Creeks"),
     *         @OA\XmlContent(ref="#/components/schemas/Creeks"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Creeks"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/creeks/{id}",
     *     tags={"Creeks"},
     *     summary="Update an existing Creeks",
     *     operationId="updateCreeks",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Creeks id to update",
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
     *         description="Creeks not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Creeks"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/creeks/{id}",
     *     tags={"Creeks"},
     *     summary="Deletes a Creeks",
     *     operationId="deleteCreeks",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Creeks id to delete",
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