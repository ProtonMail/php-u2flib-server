<?php

namespace u2flib_server;

/**
 * Class returned for successful registrations
 *
 * @package u2flib_server
 */
class Registration
{
    /** @var string The key handle of the registered authenticator */
    public $keyHandle = '';

    /** @var string The public key of the registered authenticator */
    public $publicKey = '';

    /** @var string The attestation certificate of the registered authenticator */
    public $certificate = '';

    /** @var int The counter associated with this registration */
    public $counter = -1;
}
