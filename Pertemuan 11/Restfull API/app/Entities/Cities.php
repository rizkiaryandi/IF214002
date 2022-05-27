<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Cities
* @OA\Schema(
*     title="Cities",
*     description="Cities"
* )
*
* @OA\Tag(
*     name="Cities",
*     description="Everything about your Cities" 
* )
*/ 
class Cities extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="city_id",
	 *     title="city_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $city_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="city_name",
	 *     title="city_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $city_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="prov_id",
	 *     title="prov_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $prov_id; 
}
/**
 *
 * @OA\RequestBody(
 *     request="Cities",
 *     description="Cities object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Cities"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Cities")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Cities")
 *     )
 * )
 */