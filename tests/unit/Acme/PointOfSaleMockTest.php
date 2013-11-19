<?php

namespace Acme;

/**
 * Description of PointOfSaleMockTest
 *
 * @author isidromerayo
 */
class PointOfSaleMockTest  extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function onBarcode_search_catalog()
    {
        $catalog = $this->getMock('\Acme\Dobles\Catalog', array('search'));
        $screen = $this->getMock('\Acme\Dobles\Screen');
        
        $pointOfSale = new \Acme\Dobles\PointOfSale($catalog, $screen);

        // verificar
        $catalog->expects($this->once())->method('search')->with('123');
                
        $pointOfSale->onBarcode('123');
    }
}
