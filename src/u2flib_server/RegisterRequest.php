<?php

namespace u2flib_server;

/**
 * Class for building a registration request.
 *
 * @package u2flib_server
 */
class RegisterRequest
{
    /** @var string Protocol version */
    public $version = U2F_VERSION;

    /** @var string Registration challenge */
    public $challenge;

    /** @var string Application id */
    public $appId;

    /**
     * @param string $challenge
     * @param string $appId
     * @internal
     */
    public function __construct($challenge, $appId)
    {
        $this->challenge = $challenge;
        $this->appId = $appId;
    }
}
