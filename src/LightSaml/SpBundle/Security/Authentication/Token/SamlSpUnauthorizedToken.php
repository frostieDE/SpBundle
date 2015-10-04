<?php

namespace LightSaml\SpBundle\Security\Authentication\Token;

use LightSaml\Model\Protocol\Response;

class SamlSpUnauthorizedToken extends SamlSpToken
{
    /** @var Response */
    private $response;

    public function __construct(Response $response, $providerKey)
    {
        parent::__construct([], $providerKey);

        $this->response = $response;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}