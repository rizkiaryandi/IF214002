<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class RegionalUnits
* @OA\Schema(
*     title="RegionalUnits",
*     description="RegionalUnits"
* )
*
* @OA\Tag(
*     name="RegionalUnits",
*     description="Everything about your RegionalUnits" 
* )
*/ 
class RegionalUnits extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="regional_unit_id",
	 *     title="regional_unit_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $regional_unit_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="main_administrator_id",
	 *     title="main_administrator_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $main_administrator_id;
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
	 *     description="regional_unit_name",
	 *     title="regional_unit_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=50,
	 * )
	 *		 
	 */
	private $regional_unit_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="regional_unit_address",
	 *     title="regional_unit_address",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $regional_unit_address;
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
 *     request="RegionalUnits",
 *     description="RegionalUnits object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/RegionalUnits"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/RegionalUnits")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/RegionalUnits")
 *     )
 * )
 */