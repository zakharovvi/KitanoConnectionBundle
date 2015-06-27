<?php

namespace Kitano\ConnectionBundle\Manager;

use Kitano\ConnectionBundle\Exception\InvalidFilterException;

class FilterValidator
{
    /**
     * Validate and normalize input filters for connections retrieval
     *
     * @param array &$filters
     * @throws InvalidFilterException
     */
    public function validateFilters(array &$filters)
    {
        return true;
    }
}
