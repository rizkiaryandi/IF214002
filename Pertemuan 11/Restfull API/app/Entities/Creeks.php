<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Creeks
* @OA\Schema(
*     title="Creeks",
*     description="Creeks"
* )
*
* @OA\Tag(
*     name="Creeks",
*     description="Everything about your Creeks" 
* )
*/ 
class Creeks extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="creek_id",
	 *     title="creek_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $creek_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="river_id",
	 *     title="river_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $river_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="creek_name",
	 *     title="creek_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=50,
	 * )
	 *		 
	 */
	private $creek_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="creek_geojson",
	 *     title="creek_geojson",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $creek_geojson;
	/**
	 * @OA\Property(		 		 		 
	 *     description="creek_longitude",
	 *     title="creek_longitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $creek_longitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="creek_lattitude",
	 *     title="creek_lattitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $creek_lattitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="created_at",
	 *     title="created_at",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $created_at;
	/**
	 * @OA\Property(		 		 		 
	 *     description="updated_at",
	 *     title="updated_at",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $updated_at; 
}
/**
 *
 * @OA\RequestBody(
 *     request="Creeks",
 *     description="Creeks object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Creeks"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Creeks")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Creeks")
 *     )
 * )
 */