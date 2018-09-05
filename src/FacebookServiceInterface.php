<?php
/**
 * Created by PhpStorm.
 * User: omni
 * Date: 16.07.2018
 * Time: 16:34
 */

namespace Umbrella\FacebookLiteBundle;


/**
 * Interface FacebookServiceInterface
 *
 * @package Umbrella\FacebookLiteBundle
 */
Interface FacebookServiceInterface
{

	/**
	 * @param string $token
	 * @return \Umbrella\FacebookLiteBundle\FacebookUserInterface
	 */
	public function getByAccessToken(string $token) :?FacebookUserInterface;

	/**
	 * @param string $code
	 * @param string $redirectUri
	 * @return \Umbrella\FacebookLiteBundle\FacebookUserInterface
	 */
	public function getByCode(string $code, string $redirectUri)  :?FacebookUserInterface;

	/**
	 * @param string $rawSignedRequest
	 * @return \Umbrella\FacebookLiteBundle\FacebookUserInterface
	 */
	public function getBySignedRequest(string $rawSignedRequest)  :?FacebookUserInterface;
}