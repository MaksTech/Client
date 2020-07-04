<?php

namespace Gitlab\Exception;

use Exception;

/**
 * MissingArgumentException.
 *
 * @author Joseph Bielawski <stloyd@gmail.com>
 *
 * @derpecated since version 9.18 and will be removed in 10.0.
 */
class MissingArgumentException extends ErrorException implements ExceptionInterface
{
    /**
     * @param string|array   $required
     * @param int            $code
     * @param Exception|null $previous
     *
     * @return void
     */
    public function __construct($required, $code = 0, $previous = null)
    {
        if (is_string($required)) {
            $required = [$required];
        }

        parent::__construct(sprintf('One or more of required ("%s") parameters is missing!', implode('", "', $required)), $code, 1, __FILE__, __LINE__, $previous);
    }
}
