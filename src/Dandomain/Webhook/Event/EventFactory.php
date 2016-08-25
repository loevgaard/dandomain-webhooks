<?php
namespace Dandomain\Webhook\Event;

class EventFactory {
    public static function create($eventData) {
        switch($eventData['ObjectType']) {
            case 'Product':
                return new ProductEvent($eventData);
                break;
        }
        return new Event($eventData);
    }
}