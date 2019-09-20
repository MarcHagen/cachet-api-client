<?php

namespace Devoralive\Result\Metric;

use Devoralive\Result\EnvelopeCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * Class MetricsEnvelope
 * @package Devoralive\Result\Metric
 */
class MetricsEnvelope extends EnvelopeCollection
{

    /**
     * @var array
     * @JMS\Type("array<Devoralive\Entity\Metric>")
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