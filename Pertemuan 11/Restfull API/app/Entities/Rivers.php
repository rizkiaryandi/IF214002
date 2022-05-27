<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Rivers
* @OA\Schema(
*     title="Rivers",
*     description="Rivers"
* )
*
* @OA\Tag(
*     name="Rivers",
*     description="Everything about your Rivers" 
* )
*/ 
class Rivers extends BaseEntity
{
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
	 *     description="river_name",
	 *     title="river_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=50,
	 * )
	 *		 
	 */
	private $river_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="river_geojson",
	 *     title="river_geojson",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $river_geojson;
	/**
	 * @OA\Property(		 		 		 
	 *     description="river_longitude",
	 *     title="river_longitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $river_longitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="river_lattitude",
	 *     title="river_lattitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $river_lattitude;
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
 *     request="Rivers",
 *     description="Rivers object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Rivers"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Rivers")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Rivers")
 *     )
 * )
 */