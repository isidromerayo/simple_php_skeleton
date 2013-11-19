<?php
namespace Acme\Dobles;
/**
 * Description of PointOfSale
 *
 * @author isidromerayo
 */
class PointOfSale {
    
    private $catalog;
    private $screen;
    
    public function __construct($catalog, $screen) {
        $this->catalog = $catalog;
        $this->screen = $screen;
    }
    
    public function onBarcode($code) {
        $this->catalog->search($code);
    }
}
