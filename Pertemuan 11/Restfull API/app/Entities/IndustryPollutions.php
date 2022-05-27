<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class IndustryPollutions
* @OA\Schema(
*     title="IndustryPollutions",
*     description="IndustryPollutions"
* )
*
* @OA\Tag(
*     name="IndustryPollutions",
*     description="Everything about your IndustryPollutions" 
* )
*/ 
class IndustryPollutions extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="industry_pollution_id",
	 *     title="industry_pollution_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $industry_pollution_id;
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
	 *     description="industry_pollution_title",
	 *     title="industry_pollution_title",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=70,
	 * )
	 *		 
	 */
	private $industry_pollution_title;
	/**
	 * @OA\Property(		 		 		 
	 *     description="industry_pollution_description",
	 *     title="industry_pollution_description",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $industry_pollution_description;
	/**
	 * @OA\Property(		 		 		 
	 *     description="industry_pollution_longitude",
	 *     title="industry_pollution_longitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $industry_pollution_longitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="industry_pollution_lattitude",
	 *     title="industry_pollution_lattitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $industry_pollution_lattitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="industry_pollution_type",
	 *     title="industry_pollution_type",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $industry_pollution_type;
	/**
	 * @OA\Property(		 		 		 
	 *     description="industry_pollution_img",
	 *     title="industry_pollution_img",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $industry_pollution_img;
	/**
	 * @OA\Property(		 		 		 
	 *     description="industry_pollution_status",
	 *     title="industry_pollution_status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $industry_pollution_status;
	/**
	 * @OA\Property(		 		 		 
	 *     description="industry_pollution_action",
	 *     title="industry_pollution_action",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $industry_pollution_action;
	/**
	 * @OA\Property(		 		 		 
	 *     description="industry_pollution_action_img",
	 *     title="industry_pollution_action_img",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $industry_pollution_action_img;
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
 *     request="IndustryPollutions",
 *     description="IndustryPollutions object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/IndustryPollutions"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/IndustryPollutions")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/IndustryPollutions")
 *     )
 * )
 */