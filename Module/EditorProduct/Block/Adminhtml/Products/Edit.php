<?php

class Module_EditorProduct_Block_Adminhtml_Products_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    
    public function __construct()
    {
        parent::__construct(); 

        $this->_objectId = 'id';
        $this->_controller = 'adminhtml_products';
        $this->_blockGroup = 'module_editorproduct'; 
        $this->_updateButton('save', 'label', Mage::helper('module_editorproduct')->__('Save'));
        $this->_updateButton('delete', 'label', Mage::helper('module_editorproduct')->__('Delete')); 
       
        $this->_addButton(
            'save_and_edit_button',
            array(
                'label'     => Mage::helper('module_editorproduct')->__('Save and Continue Edit'),
                'onclick'   => 'saveAndContinueEdit()',
                'class'     => 'save'
            ),
            100
        );
    }

   
    public function getHeaderText()
    {
        
        if (Mage::registry('products_data') && Mage::registry('products_data')->getId() ) {
            return Mage::helper('module_editorproduct')->__("Edit");
        } else {
            return Mage::helper('module_editorproduct')->__('Add');
        }
    }

   
    public function getHeaderCssClass()
    {
        return 'icon-head head-cms-page';
    }
}
