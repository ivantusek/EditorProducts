<?php

class Module_Editor_Block_Adminhtml_Widget_Button extends Mage_Adminhtml_Block_Widget_Button
{
   
    private $_product;

   
    protected function _construct()
    {
    //  $this->_product = Mage::registry('catalog_product');
        parent::_construct();
        $this->setData(array(
            'label'     => Mage::helper('catalog')->__('test button'),
            'onclick'   => 'window.open(\''.Mage::getModel('core/url')->getUrl() . $this->_product->getUrlPath() .'\')',
            'disabled'  => !$this->_isVisible(),
            'title' => (!$this->_isVisible())?
              //  Mage::helper('catalog')->__('Product is not visible on frontend'):
               // Mage::helper('catalog')->__('View Product Page')
        ));
    }

   
    private function _isVisible()
    {
        return $this->_product->isVisibleInCatalog() && $this->_product->isVisibleInSiteVisibility();
    }
}
