<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class CreekConditions
* @OA\Schema(
*     title="CreekConditions",
*     description="CreekConditions"
* )
*
* @OA\Tag(
*     name="CreekConditions",
*     description="Everything about your CreekConditions" 
* )
*/ 
class CreekConditions extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="creek_condition_id",
	 *     title="creek_condition_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $creek_condition_id;
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
	 *     description="creek_condition_description",
	 *     title="creek_condition_description",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $creek_condition_description;
	/**
	 * @OA\Property(		 		 		 
	 *     description="creek_condition_longitude",
	 *     title="creek_condition_longitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $creek_condition_longitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="creek_condition_lattitude",
	 *     title="creek_condition_lattitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $creek_condition_lattitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="creek_condition_status",
	 *     title="creek_condition_status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $creek_condition_status;
	/**
	 * @OA\Property(		 		 		 
	 *     description="creek_condition_handling_status",
	 *     title="creek_condition_handling_status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $creek_condition_handling_status;
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
 *     request="CreekConditions",
 *     description="CreekConditions object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/CreekConditions"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/CreekConditions")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/CreekConditions")
 *     )
 * )
 */