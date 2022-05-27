<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Drains
* @OA\Schema(
*     title="Drains",
*     description="Drains"
* )
*
* @OA\Tag(
*     name="Drains",
*     description="Everything about your Drains" 
* )
*/ 
class Drains extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="drain_id",
	 *     title="drain_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $drain_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="drain_name",
	 *     title="drain_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=50,
	 * )
	 *		 
	 */
	private $drain_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="drain_geojson",
	 *     title="drain_geojson",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $drain_geojson;
	/**
	 * @OA\Property(		 		 		 
	 *     description="drain_longitude",
	 *     title="drain_longitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $drain_longitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="drain_lattitude",
	 *     title="drain_lattitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $drain_lattitude;
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
 *     request="Drains",
 *     description="Drains object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Drains"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Drains")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Drains")
 *     )
 * )
 */