<?php

class Module_EditorProduct_Adminhtml_Module_Editorproduct_ProductsController extends Mage_Adminhtml_Controller_Action
{
    
    public function indexAction()
    {
       

        $this->loadLayout();
        $this->_setActiveMenu('module_editorproduct/item');
        $this->renderLayout();
    }

    
    public function editAction()
    {
        $this->loadLayout();
        $this->_setActiveMenu('module_editorproduct/item');
        $this->renderLayout();
    }
}
