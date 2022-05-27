<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class DikeConditions
* @OA\Schema(
*     title="DikeConditions",
*     description="DikeConditions"
* )
*
* @OA\Tag(
*     name="DikeConditions",
*     description="Everything about your DikeConditions" 
* )
*/ 
class DikeConditions extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="dike_condition_id",
	 *     title="dike_condition_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $dike_condition_id;
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
	 *     description="dike_id",
	 *     title="dike_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $dike_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="dike_condition_description",
	 *     title="dike_condition_description",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $dike_condition_description;
	/**
	 * @OA\Property(		 		 		 
	 *     description="dike_condition_longitude",
	 *     title="dike_condition_longitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $dike_condition_longitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="dike_condition_lattitude",
	 *     title="dike_condition_lattitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $dike_condition_lattitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="dike_condition_status",
	 *     title="dike_condition_status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $dike_condition_status;
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
 *     request="DikeConditions",
 *     description="DikeConditions object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/DikeConditions"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/DikeConditions")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/DikeConditions")
 *     )
 * )
 */