<?php

class Module_EditorProduct_Model_Observer
{
   public function addButton($observer)
    {
       $container = $observer->getBlock();
    if(null !== $container && $container->getType() == '') {
        $data = array(
            'label'     => 'Products Editor',
            'class'     => 'some-class',
            'onclick'   => 'setLocation(\'' . $this->getButtonUrl() . '\')',
        );
        $container->addButton('my_button_identifier', $data); 
    }
 
    return $this;
    }


    public function getButtonUrl()
    {
        
        return Mage::getModel('adminhtml/url')->getUrl('*/button/myButton', array(
            '_current'   => true,
            'back'       => 'edit',
           // 'tab'        => '{{tab_id}}',
            'active_tab' => null
        ));
    }

    
}
