<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class IndustryPollutions extends BaseResourceController
{
    protected $modelName = 'App\Models\IndustryPollutionsModel';  

     /**
     * @OA\Get(
     *     path="/industryPollutions",
     *     tags={"IndustryPollutions"},
     *     summary="Find list IndustryPollutions",
     *     description="Returns list of IndustryPollutions",
     *     operationId="getIndustryPollutions",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/IndustryPollutions")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/IndustryPollutions")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/IndustryPollutions")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="IndustryPollutions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/industryPollutions/{id}",
     *     tags={"IndustryPollutions"},
     *     summary="Find IndustryPollutions by ID",
     *     description="Returns a single IndustryPollutions",
     *     operationId="getIndustryPollutionsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of IndustryPollutions to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/IndustryPollutions"),
     *         @OA\XmlContent(ref="#/components/schemas/IndustryPollutions"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="IndustryPollutions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/industryPollutions",
     *     tags={"IndustryPollutions"},
     *     summary="Add a new IndustryPollutions to the store",
     *     operationId="addIndustryPollutions",
     *     @OA\Response(
     *         response=201,
     *         description="Created IndustryPollutions",
     *         @OA\JsonContent(ref="#/components/schemas/IndustryPollutions"),
     *         @OA\XmlContent(ref="#/components/schemas/IndustryPollutions"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/IndustryPollutions"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/industryPollutions/{id}",
     *     tags={"IndustryPollutions"},
     *     summary="Update an existing IndustryPollutions",
     *     operationId="updateIndustryPollutions",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="IndustryPollutions id to update",
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
     *         description="IndustryPollutions not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/IndustryPollutions"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/industryPollutions/{id}",
     *     tags={"IndustryPollutions"},
     *     summary="Deletes a IndustryPollutions",
     *     operationId="deleteIndustryPollutions",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="IndustryPollutions id to delete",
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