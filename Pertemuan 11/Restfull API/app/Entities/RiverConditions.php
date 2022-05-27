<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class RiverConditions
* @OA\Schema(
*     title="RiverConditions",
*     description="RiverConditions"
* )
*
* @OA\Tag(
*     name="RiverConditions",
*     description="Everything about your RiverConditions" 
* )
*/ 
class RiverConditions extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="river_condition_id",
	 *     title="river_condition_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $river_condition_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="observer_id",
	 *     title="observer_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $observer_id;
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
	 *     description="river_condition_description",
	 *     title="river_condition_description",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $river_condition_description;
	/**
	 * @OA\Property(		 		 		 
	 *     description="river_condition_longitude",
	 *     title="river_condition_longitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $river_condition_longitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="river_condition_lattitude",
	 *     title="river_condition_lattitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $river_condition_lattitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="river_condition_status",
	 *     title="river_condition_status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $river_condition_status;
	/**
	 * @OA\Property(		 		 		 
	 *     description="river_condition_handling_status",
	 *     title="river_condition_handling_status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $river_condition_handling_status;
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
 *     request="RiverConditions",
 *     description="RiverConditions object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/RiverConditions"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/RiverConditions")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/RiverConditions")
 *     )
 * )
 */