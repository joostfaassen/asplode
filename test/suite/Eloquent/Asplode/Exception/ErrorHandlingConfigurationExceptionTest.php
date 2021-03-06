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
use PHPUnit_Framework_TestCase;

/**
 * @covers Eloquent\Asplode\Exception\ErrorHandlingConfigurationException
 * @covers Eloquent\Asplode\Exception\LogicException
 */
class ErrorHandlingConfigurationExceptionTest extends PHPUnit_Framework_TestCase
{
    public function testException()
    {
        $previous = new NativeException;
        $exception = new ErrorHandlingConfigurationException($previous);

        $this->assertSame(
            'Error handling is incorrectly configured.',
            $exception->getMessage()
        );
        $this->assertSame(0, $exception->getCode());
        $this->assertSame($previous, $exception->getPrevious());
    }
}
