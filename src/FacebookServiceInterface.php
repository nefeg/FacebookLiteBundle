<?php

namespace Aimchat\FacebookLiteBundle;

/**
 * Interface FacebookServiceInterface
 *
 * @package Aimchat\FacebookLiteBundle
 */
Interface FacebookServiceInterface
{
	/**
	 * @param string $token
	 * @return \Aimchat\FacebookLiteBundle\FacebookUserInterface
	 */
	public function getByAccessToken(string $token) :?FacebookUserInterface;

	/**
	 * @param string $code
	 * @param string $redirectUri
	 * @return \Aimchat\FacebookLiteBundle\FacebookUserInterface
	 */
	public function getByCode(string $code, string $redirectUri)  :?FacebookUserInterface;

	/**
	 * @param string $rawSignedRequest
	 * @return \Aimchat\FacebookLiteBundle\FacebookUserInterface
	 */
	public function getBySignedRequest(string $rawSignedRequest)  :?FacebookUserInterface;
}