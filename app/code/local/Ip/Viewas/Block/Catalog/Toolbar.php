<?php

class Ip_Viewas_Block_Catalog_Toolbar extends Mage_Catalog_Block_Product_List_Toolbar
{

    function __construct()
    {
        parent::_construct();

        if($mode = $this->getCategoryMode()){
            switch ($mode) {
                case 'grid':
                    $this->_availableMode = array('grid' => $this->__('Grid'));
                    break;

                case 'list':
                    $this->_availableMode = array('list' => $this->__('List'));
                    break;

                case 'grid-list':
                    $this->_availableMode = array('grid' => $this->__('Grid'), 'list' =>  $this->__('List'));
                    break;

                case 'list-grid':
                    $this->_availableMode = array('list' => $this->__('List'), 'grid' => $this->__('Grid'));
                    break;
            }
        }

    }

    protected function getCategoryMode()
    {
        /* @var Mage_Catalog_Model_Layer $layer */
        $layer = Mage::getSingleton('catalog/layer');
        $category = $layer->getCurrentCategory();
        return $category->getViewasMode();
    }

}