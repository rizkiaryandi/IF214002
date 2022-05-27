<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class PublicPollutions extends BaseResourceController
{
    protected $modelName = 'App\Models\PublicPollutionsModel';  

     /**
     * @OA\Get(
     *     path="/publicPollutions",
     *     tags={"PublicPollutions"},
     *     summary="Find list PublicPollutions",
     *     description="Returns list of PublicPollutions",
     *     operationId="getPublicPollutions",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PublicPollutions")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/PublicPollutions")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/PublicPollutions")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="PublicPollutions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/publicPollutions/{id}",
     *     tags={"PublicPollutions"},
     *     summary="Find PublicPollutions by ID",
     *     description="Returns a single PublicPollutions",
     *     operationId="getPublicPollutionsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of PublicPollutions to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/PublicPollutions"),
     *         @OA\XmlContent(ref="#/components/schemas/PublicPollutions"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="PublicPollutions not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/publicPollutions",
     *     tags={"PublicPollutions"},
     *     summary="Add a new PublicPollutions to the store",
     *     operationId="addPublicPollutions",
     *     @OA\Response(
     *         response=201,
     *         description="Created PublicPollutions",
     *         @OA\JsonContent(ref="#/components/schemas/PublicPollutions"),
     *         @OA\XmlContent(ref="#/components/schemas/PublicPollutions"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PublicPollutions"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/publicPollutions/{id}",
     *     tags={"PublicPollutions"},
     *     summary="Update an existing PublicPollutions",
     *     operationId="updatePublicPollutions",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PublicPollutions id to update",
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
     *         description="PublicPollutions not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/PublicPollutions"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/publicPollutions/{id}",
     *     tags={"PublicPollutions"},
     *     summary="Deletes a PublicPollutions",
     *     operationId="deletePublicPollutions",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="PublicPollutions id to delete",
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