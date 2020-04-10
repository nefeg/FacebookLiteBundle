<?php

namespace FacebookLiteBundle\Service;

use FacebookLiteBundle\FacebookServiceInterface;
use FacebookLiteBundle\FacebookUserInterface;
use Facebook\Facebook;
use Facebook\SignedRequest;

/**
 * Class FacebookManager
 *
 * @package App\v1
 */
class FacebookService implements FacebookServiceInterface
{
	/**
	 * @var \Facebook\Facebook
	 */
	private $Facebook;

	/**
	 * FacebookManager constructor.
	 *
	 * @param \Facebook\Facebook              $Facebook
	 */
	public function __construct(Facebook $Facebook){
        $this->Facebook = $Facebook;
    }

	/**
	 * @param \FacebookLiteBundle\FacebookUserInterface $User
	 * @param string                                        $token
	 * @return \FacebookLiteBundle\FacebookUserInterface
	 * @throws \Facebook\Exceptions\FacebookSDKException
	 */
	public function getByAccessToken(string $token, FacebookUserInterface $User = null) : ?FacebookUserInterface{

		 $GraphUser =  $this->Facebook->get('/me?fields=id,email', $token)->getGraphUser();

		 return $GraphUser->getId() ? new FacebookUser($GraphUser->getId()) : null;
    }

	/**
	 * @param \FacebookLiteBundle\FacebookUserInterface $User
	 * @param string                                        $code
	 * @param string                                        $redirectUri
	 * @return \FacebookLiteBundle\FacebookUserInterface
	 * @throws \Facebook\Exceptions\FacebookSDKException
	 */
	public function getByCode(string $code, string $redirectUri, FacebookUserInterface $User = null)  : ?FacebookUserInterface{

        $client = $this->Facebook->getOAuth2Client();
        $token = $client->getAccessTokenFromCode($code, $redirectUri);

		$GraphUser = $this->Facebook->get('/me?fields=id,email', $token->getValue())->getGraphUser();

		return $GraphUser->getId() ? new FacebookUser($GraphUser->getId()) : null;
    }

	/**
	 * @param \FacebookLiteBundle\FacebookUserInterface $User
	 * @param string                                        $rawSignedRequest
	 * @return \FacebookLiteBundle\FacebookUserInterface|null
	 * @throws \Facebook\Exceptions\FacebookSDKException
	 */
	public function getBySignedRequest(string $rawSignedRequest, FacebookUserInterface $User = null)  : ?FacebookUserInterface{

        $signedRequest = new SignedRequest($this->Facebook->getApp(), $rawSignedRequest);
        $payload = $signedRequest->getPayload();

        $token = null;
        if(isset($payload['oauth_token'])){
            $token = $payload['oauth_token'];
        } else if (isset($payload['code'])) {
            $client = $this->Facebook->getOAuth2Client();
            $token = $client->getAccessTokenFromCode($payload['code']);
        }

		$GraphUser = $this->Facebook->get('/me?fields=id,email', $token)->getGraphUser();

		return $GraphUser->getId() ? new FacebookUser($GraphUser->getId()) : null;
    }
}