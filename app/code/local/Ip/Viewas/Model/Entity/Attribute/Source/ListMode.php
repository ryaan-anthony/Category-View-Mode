<?php
class Ip_Viewas_Model_Entity_Attribute_Source_ListMode extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    public function getAllOptions()
    {
        if (is_null($this->_options)) {
            $this->_options = array(
                array('value'=>'', 'label'=>Mage::helper('adminhtml')->__('Use Default')),
                array('value'=>'grid', 'label'=>Mage::helper('adminhtml')->__('Grid Only')),
                array('value'=>'list', 'label'=>Mage::helper('adminhtml')->__('List Only')),
                array('value'=>'grid-list', 'label'=>Mage::helper('adminhtml')->__('Grid (default) / List')),
                array('value'=>'list-grid', 'label'=>Mage::helper('adminhtml')->__('List (default) / Grid')),
            );
        }
        return $this->_options;
    }
}
