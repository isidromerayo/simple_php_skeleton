<?php

namespace Acme;

/**
 * Temperature 
 * 
 * @author isidromerayo <isidro.merayo@gmail.com>
 */
class Temperature
{

    private $_service;

    /**
     * Constructor 
     * @param type $service
     */
    public function __construct($service)
    {
        $this->_service = $service;
    }

    /**
     * Calculate temperature's average
     * @return integer
     */
    public function average()
    {
        $total = 0;
        for ($i = 0; $i < 3; $i++) {
            $total += $this->_service->readTemp();
        }

        return $total / 3;
    }

}

