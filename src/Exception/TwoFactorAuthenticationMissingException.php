<?php

/*
 * This file is part of the Connect Holland Secure JWT package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\SecureJWT\Exception;

use Symfony\Component\Security\Core\Exception\AuthenticationException;

class TwoFactorAuthenticationMissingException extends AuthenticationException
{
}