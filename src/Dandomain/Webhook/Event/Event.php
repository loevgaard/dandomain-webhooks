<?php
namespace Dandomain\Webhook\Event;

class Event implements EventInterface {
    protected $data;

    public function __construct($eventData) {
        $this->data = $eventData;
    }

    public function getPropertiesChanged()
    {
        return $this->data['PropertiesChanged'];
    }

    public function getOldValues()
    {
        return $this->data['OldValues'];
    }

    public function getNewValues()
    {
        return $this->data['NewValues'];
    }
}