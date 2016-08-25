<?php
namespace Dandomain\Webhook;

use Dandomain\Webhook\Event\EventFactory;
use Dandomain\Webhook\Event\EventInterface;
use Symfony\Component\HttpFoundation\Request;

class Webhook {
    /**
     * Contains the contents of the http request
     *
     * @var array
     */
    protected $data;

    /** @var Request */
    protected $request;

    public function __construct($request = null) {
        if($request && $request instanceof Request) {
            $this->request = $request;
        } else {
            $request        = Request::createFromGlobals();
            $this->request  = $request;
        }

        $this->data = json_decode($this->request->getContent(), true);
    }

    /**
     * @return EventInterface[]
     */
    public function getEvents() {
        foreach($this->data as $e) {
            yield EventFactory::create($e);
        }
    }
}