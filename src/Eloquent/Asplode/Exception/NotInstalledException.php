<?php

/*
 * This file is part of the Asplode package.
 *
 * Copyright © 2013 Erin Millard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eloquent\Asplode\Exception;

use Exception as NativeException;

/**
 * This Asplode instance has not been installed.
 */
final class NotInstalledException extends LogicException
{
    public function __construct(NativeException $previous = null)
    {
        parent::__construct(
            "This instance of Asplode has not been installed.",
            $previous
        );
    }
}
