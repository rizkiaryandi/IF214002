<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Drains extends BaseResourceController
{
    protected $modelName = 'App\Models\DrainsModel';  

     /**
     * @OA\Get(
     *     path="/drains",
     *     tags={"Drains"},
     *     summary="Find list Drains",
     *     description="Returns list of Drains",
     *     operationId="getDrains",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Drains")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Drains")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Drains")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Drains not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/drains/{id}",
     *     tags={"Drains"},
     *     summary="Find Drains by ID",
     *     description="Returns a single Drains",
     *     operationId="getDrainsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Drains to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Drains"),
     *         @OA\XmlContent(ref="#/components/schemas/Drains"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Drains not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/drains",
     *     tags={"Drains"},
     *     summary="Add a new Drains to the store",
     *     operationId="addDrains",
     *     @OA\Response(
     *         response=201,
     *         description="Created Drains",
     *         @OA\JsonContent(ref="#/components/schemas/Drains"),
     *         @OA\XmlContent(ref="#/components/schemas/Drains"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Drains"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/drains/{id}",
     *     tags={"Drains"},
     *     summary="Update an existing Drains",
     *     operationId="updateDrains",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Drains id to update",
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
     *         description="Drains not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Drains"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/drains/{id}",
     *     tags={"Drains"},
     *     summary="Deletes a Drains",
     *     operationId="deleteDrains",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Drains id to delete",
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