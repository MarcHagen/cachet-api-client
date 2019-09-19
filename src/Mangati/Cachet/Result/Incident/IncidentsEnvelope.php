<?php

namespace Mangati\Cachet\Result\Incident;

use Mangati\Cachet\Result\EnvelopeCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * Class IncidentsEnvelope
 * @package Mangati\Cachet\Result\Incident
 */
class IncidentsEnvelope extends EnvelopeCollection
{
    /**
     * @var array
     * @JMS\Type("array<Mangati\Cachet\Entity\Incident>")
     */
    private $data;

    /**
     * Get the value of Data
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of Data
     *
     * @param mixed data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}
