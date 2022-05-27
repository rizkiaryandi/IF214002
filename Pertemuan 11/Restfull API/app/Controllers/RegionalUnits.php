<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class RegionalUnits extends BaseResourceController
{
    protected $modelName = 'App\Models\RegionalUnitsModel';  

     /**
     * @OA\Get(
     *     path="/regionalUnits",
     *     tags={"RegionalUnits"},
     *     summary="Find list RegionalUnits",
     *     description="Returns list of RegionalUnits",
     *     operationId="getRegionalUnits",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RegionalUnits")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/RegionalUnits")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/RegionalUnits")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="RegionalUnits not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/regionalUnits/{id}",
     *     tags={"RegionalUnits"},
     *     summary="Find RegionalUnits by ID",
     *     description="Returns a single RegionalUnits",
     *     operationId="getRegionalUnitsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of RegionalUnits to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/RegionalUnits"),
     *         @OA\XmlContent(ref="#/components/schemas/RegionalUnits"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="RegionalUnits not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/regionalUnits",
     *     tags={"RegionalUnits"},
     *     summary="Add a new RegionalUnits to the store",
     *     operationId="addRegionalUnits",
     *     @OA\Response(
     *         response=201,
     *         description="Created RegionalUnits",
     *         @OA\JsonContent(ref="#/components/schemas/RegionalUnits"),
     *         @OA\XmlContent(ref="#/components/schemas/RegionalUnits"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/RegionalUnits"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/regionalUnits/{id}",
     *     tags={"RegionalUnits"},
     *     summary="Update an existing RegionalUnits",
     *     operationId="updateRegionalUnits",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RegionalUnits id to update",
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
     *         description="RegionalUnits not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/RegionalUnits"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/regionalUnits/{id}",
     *     tags={"RegionalUnits"},
     *     summary="Deletes a RegionalUnits",
     *     operationId="deleteRegionalUnits",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="RegionalUnits id to delete",
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