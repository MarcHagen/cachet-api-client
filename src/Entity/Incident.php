<?php

namespace DevoraliveCachet\Entity;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Incident
 * @package DevoraliveCachet\Entity
 */
class Incident extends Entity
{

    const STATUS_SCHEDULED     = 0;
    const STATUS_INVESTIGATING = 1;
    const STATUS_IDENTIFIED    = 2;
    const STATUS_WATCHING      = 3;
    const STATUS_FIXED         = 4;

    /**
     * @var string
     * @JMS\Type("string")
     */
    protected $name;

    /**
     * @var int
     * @JMS\Type("string")
     */
    protected $message;

    /**
     * @var int
     * @JMS\Type("int")
     * @JMS\SerializedName("component_id")
     */
    protected $component;

    /**
     * @var int
     * @JMS\Type("int")
     * @JMS\SerializedName("component_status")
     */
    protected $componentStatus;

    /**
     * @var int
     * @JMS\Type("int")
     */
    protected $status;

    /**
     * @var int
     * @JMS\Type("string")
     * @JMS\SerializedName("human_status")
     */
    protected $humanStatus;

    /**
     * @var int
     * @JMS\Type("int")
     */
    protected $visible;

    /**
     * @var DateTime
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("scheduled_at")
     */
    protected $scheduledAt;

    /**
     * Get the value of Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param string name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Message
     *
     * @return int
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of Message
     *
     * @param int message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of Component
     *
     * @return int
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * @return int
     */
    public function getComponentStatus()
    {
        return $this->componentStatus;
    }

    /**
     * Set the value of Component
     *
     * @param int component
     *
     * @return self
     */
    public function setComponent($component)
    {
        $this->component = $component;

        return $this;
    }

    /**
     * @param $status
     *
     * @return self
     */
    public function setComponentStatus($status)
    {
        $this->componentStatus = $status;

        return $this;
    }

    /**
     * Get the value of Status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of Status
     *
     * @param int status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of Human Status
     *
     * @return int
     */
    public function getHumanStatus()
    {
        return $this->humanStatus;
    }

    /**
     * Set the value of Human Status
     *
     * @param int humanStatus
     *
     * @return self
     */
    public function setHumanStatus($humanStatus)
    {
        $this->humanStatus = $humanStatus;

        return $this;
    }

    /**
     * Get the value of Visible
     *
     * @return int
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set the value of Visible
     *
     * @param int visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get the value of Scheduled At
     *
     * @return DateTime
     */
    public function getScheduledAt()
    {
        return $this->scheduledAt;
    }

    /**
     * Set the value of Scheduled At
     *
     * @param DateTime $scheduledAt
     *
     * @return self
     */
    public function setScheduledAt(DateTime $scheduledAt)
    {
        $this->scheduledAt = $scheduledAt;

        return $this;
    }
}
