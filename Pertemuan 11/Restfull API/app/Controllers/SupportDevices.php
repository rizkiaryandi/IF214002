<?php namespace App\Controllers;
 
use asligresik\easyapi\Controllers\BaseResourceController;
class SupportDevices extends BaseResourceController
{
    protected $modelName = 'App\Models\SupportDevicesModel';  

     /**
     * @OA\Get(
     *     path="/supportDevices",
     *     tags={"SupportDevices"},
     *     summary="Find list SupportDevices",
     *     description="Returns list of SupportDevices",
     *     operationId="getSupportDevices",  
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
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SupportDevices")),
     *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
     *         ),
     *         @OA\XmlContent(type="object",
     *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/SupportDevices")),
     *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/SupportDevices")),
     *         ),           
     *     ),     
     *     @OA\Response(
     *         response=404,
     *         description="SupportDevices not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Get(
     *     path="/supportDevices/{id}",
     *     tags={"SupportDevices"},
     *     summary="Find SupportDevices by ID",
     *     description="Returns a single SupportDevices",
     *     operationId="getSupportDevicesById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of SupportDevices to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/SupportDevices"),
     *         @OA\XmlContent(ref="#/components/schemas/SupportDevices"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="SupportDevices not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *     
     */

    /**
     * @OA\Post(
     *     path="/supportDevices",
     *     tags={"SupportDevices"},
     *     summary="Add a new SupportDevices to the store",
     *     operationId="addSupportDevices",
     *     @OA\Response(
     *         response=201,
     *         description="Created SupportDevices",
     *         @OA\JsonContent(ref="#/components/schemas/SupportDevices"),
     *         @OA\XmlContent(ref="#/components/schemas/SupportDevices"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SupportDevices"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/supportDevices/{id}",
     *     tags={"SupportDevices"},
     *     summary="Update an existing SupportDevices",
     *     operationId="updateSupportDevices",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SupportDevices id to update",
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
     *         description="SupportDevices not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },     
     *     requestBody={"$ref": "#/components/requestBodies/SupportDevices"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/supportDevices/{id}",
     *     tags={"SupportDevices"},
     *     summary="Deletes a SupportDevices",
     *     operationId="deleteSupportDevices",     
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="SupportDevices id to delete",
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