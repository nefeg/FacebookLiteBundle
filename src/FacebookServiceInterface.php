<?php
/**
 * Created by PhpStorm.
 * User: omni
 * Date: 16.07.2018
 * Time: 16:34
 */

namespace App\FacebookLiteBundle;


/**
 * Interface FacebookServiceInterface
 *
 * @package App\FacebookLiteBundle
 */
Interface FacebookServiceInterface
{

	/**
	 * @param string $token
	 * @return \App\FacebookLiteBundle\FacebookUserInterface
	 */
	public function getByAccessToken(string $token) :?FacebookUserInterface;

	/**
	 * @param string $code
	 * @param string $redirectUri
	 * @return \App\FacebookLiteBundle\FacebookUserInterface
	 */
	public function getByCode(string $code, string $redirectUri)  :?FacebookUserInterface;

	/**
	 * @param string $rawSignedRequest
	 * @return \App\FacebookLiteBundle\FacebookUserInterface
	 */
	public function getBySignedRequest(string $rawSignedRequest)  :?FacebookUserInterface;
}