<?php

namespace FacebookLiteBundle;

/**
 * Interface FacebookServiceInterface
 *
 * @package FacebookLiteBundle
 */
Interface FacebookServiceInterface
{
	/**
	 * @param string $token
	 * @return \FacebookLiteBundle\FacebookUserInterface
	 */
	public function getByAccessToken(string $token) :?FacebookUserInterface;

	/**
	 * @param string $code
	 * @param string $redirectUri
	 * @return \FacebookLiteBundle\FacebookUserInterface
	 */
	public function getByCode(string $code, string $redirectUri)  :?FacebookUserInterface;

	/**
	 * @param string $rawSignedRequest
	 * @return \FacebookLiteBundle\FacebookUserInterface
	 */
	public function getBySignedRequest(string $rawSignedRequest)  :?FacebookUserInterface;
}