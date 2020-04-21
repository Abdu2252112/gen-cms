<?php

namespace Engine\service;

abstract class AbstractProvider {

    /**
     * @var DI;
     */
    protected $di;

    /**
     * AbstractProvider constructor.
     * @param DI $di
     */
    public function __construct(\Engine\DI\DI $di) {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();

}