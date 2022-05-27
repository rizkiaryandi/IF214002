<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Provinces extends BaseResourceController
{
    protected $modelName = 'App\Models\ProvincesModel';  

     /**
     * @OA\Get(
     *     path="/provinces",
     *     tags={"Provinces"},
     *     summary="Find list Provinces",
     *     description="Returns list of Provinces",
     *     operationId="getProvinces",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Provinces")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Provinces")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Provinces")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Provinces not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/provinces/{id}",
     *     tags={"Provinces"},
     *     summary="Find Provinces by ID",
     *     description="Returns a single Provinces",
     *     operationId="getProvincesById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Provinces to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Provinces"),
     *         @OA\XmlContent(ref="#/components/schemas/Provinces"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Provinces not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/provinces",
     *     tags={"Provinces"},
     *     summary="Add a new Provinces to the store",
     *     operationId="addProvinces",
     *     @OA\Response(
     *         response=201,
     *         description="Created Provinces",
     *         @OA\JsonContent(ref="#/components/schemas/Provinces"),
     *         @OA\XmlContent(ref="#/components/schemas/Provinces"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Provinces"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/provinces/{id}",
     *     tags={"Provinces"},
     *     summary="Update an existing Provinces",
     *     operationId="updateProvinces",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Provinces id to update",
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
     *         description="Provinces not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Provinces"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/provinces/{id}",
     *     tags={"Provinces"},
     *     summary="Deletes a Provinces",
     *     operationId="deleteProvinces",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Provinces id to delete",
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