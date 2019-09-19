<?php

namespace Mangati\Cachet\Result\Component;

use Mangati\Cachet\Result\Envelope;
use Mangati\Cachet\Entity\Component;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ComponentEnvelope
 * @package Mangati\Cachet\Result\Component
 */
class ComponentEnvelope implements Envelope
{

    /**
     * @var Component
     * @JMS\Type("Mangati\Cachet\Entity\Component")
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
