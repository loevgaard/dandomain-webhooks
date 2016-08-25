<?php
namespace Dandomain\Webhook\Event;

interface EventInterface {
    public function getType();
    public function getPropertiesChanged();
    public function getOldValues();
    public function getNewValues();
}