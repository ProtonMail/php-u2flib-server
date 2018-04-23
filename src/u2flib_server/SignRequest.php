<?php

namespace u2flib_server;

/**
 * Class for building up an authentication request.
 *
 * @package u2flib_server
 */
class SignRequest
{
    /** @var string Protocol version. */
    public $version = U2F_VERSION;

    /** @var string Authentication challenge. */
    public $challenge = '';

    /** @var string Key handle of a registered authenticator */
    public $keyHandle = '';

    /** @var string Application id */
    public $appId = '';
}
