<?php

namespace Kitano\ConnectionBundle\Manager;

use Kitano\ConnectionBundle\Exception\InvalidFilterException;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\Type;
use Symfony\Component\Validator\Constraints\Collection;
use Symfony\Component\Validator\Validator\LegacyValidator;

class FilterValidator
{
    protected $validator;

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

    public function setValidator(LegacyValidator $validator)
    {
        $this->validator = $validator;
    }

    public function getValidator()
    {
        return $this->validator;
    }
}
