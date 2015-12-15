<?php

class Module_EditorProduct_Block_Adminhtml_Products extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    
    public function __construct()
    {
        $this->_controller = 'adminhtml_products'; 
        $this->_blockGroup = 'module_editorproduct'; 
        $this->_headerText = Mage::helper('module_editorproduct')->__('Products');
     //   $this->_addButtonLabel = Mage::helper('module_editorproduct')->__('Add New Product'); 

        parent::__construct(); 
    }
   
    public function getHeaderCssClass()
    {
        return 'icon-head head-cms-page';
    }
}