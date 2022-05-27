<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class DrainConditions
* @OA\Schema(
*     title="DrainConditions",
*     description="DrainConditions"
* )
*
* @OA\Tag(
*     name="DrainConditions",
*     description="Everything about your DrainConditions" 
* )
*/ 
class DrainConditions extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="drain_condition_id",
	 *     title="drain_condition_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $drain_condition_id;
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
	 *     description="drain_condition_description",
	 *     title="drain_condition_description",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $drain_condition_description;
	/**
	 * @OA\Property(		 		 		 
	 *     description="drain_condition_longitude",
	 *     title="drain_condition_longitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $drain_condition_longitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="drain_condition_lattitude",
	 *     title="drain_condition_lattitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $drain_condition_lattitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="drain_condition_status",
	 *     title="drain_condition_status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $drain_condition_status;
	/**
	 * @OA\Property(		 		 		 
	 *     description="drain_condition_handling_status",
	 *     title="drain_condition_handling_status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $drain_condition_handling_status;
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
 *     request="DrainConditions",
 *     description="DrainConditions object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/DrainConditions"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/DrainConditions")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/DrainConditions")
 *     )
 * )
 */