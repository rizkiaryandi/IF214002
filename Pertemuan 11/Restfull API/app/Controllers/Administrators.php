<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class Administrators extends BaseResourceController
{
    protected $modelName = 'App\Models\AdministratorsModel';  

     /**
     * @OA\Get(
     *     path="/administrators",
     *     tags={"Administrators"},
     *     summary="Find list Administrators",
     *     description="Returns list of Administrators",
     *     operationId="getAdministrators",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Administrators")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Administrators")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Administrators")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="Administrators not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/administrators/{id}",
     *     tags={"Administrators"},
     *     summary="Find Administrators by ID",
     *     description="Returns a single Administrators",
     *     operationId="getAdministratorsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Administrators to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Administrators"),
     *         @OA\XmlContent(ref="#/components/schemas/Administrators"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Administrators not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/administrators",
     *     tags={"Administrators"},
     *     summary="Add a new Administrators to the store",
     *     operationId="addAdministrators",
     *     @OA\Response(
     *         response=201,
     *         description="Created Administrators",
     *         @OA\JsonContent(ref="#/components/schemas/Administrators"),
     *         @OA\XmlContent(ref="#/components/schemas/Administrators"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Administrators"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/administrators/{id}",
     *     tags={"Administrators"},
     *     summary="Update an existing Administrators",
     *     operationId="updateAdministrators",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Administrators id to update",
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
     *         description="Administrators not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/Administrators"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/administrators/{id}",
     *     tags={"Administrators"},
     *     summary="Deletes a Administrators",
     *     operationId="deleteAdministrators",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Administrators id to delete",
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