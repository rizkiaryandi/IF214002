<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Dikes
* @OA\Schema(
*     title="Dikes",
*     description="Dikes"
* )
*
* @OA\Tag(
*     name="Dikes",
*     description="Everything about your Dikes" 
* )
*/ 
class Dikes extends BaseEntity
{
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
	 *     description="dike_name",
	 *     title="dike_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=50,
	 * )
	 *		 
	 */
	private $dike_name;
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
 *     request="Dikes",
 *     description="Dikes object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Dikes"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Dikes")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Dikes")
 *     )
 * )
 */