<?php

class Module_EditorProduct_Block_Adminhtml_Products_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    
    protected function _prepareForm()
    {
        
        $form = new Varien_Data_Form(
            array(
                'id'      => 'edit_form',
                'action'  => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('id'))),
                'method'  => 'post',
                'enctype' => 'multipart/form-data'
            )
        );
        $form->setUseContainer(true);
        $this->setForm($form);

       
        $form->addField(
            'fake_note',
            'note',
            array(
                'text' => '<ul class="messages"><li class="notice-msg"><ul><li>'
                        .  Mage::helper('module_editorproduct')->__('This form is fake, so the data in the grid '
                                      . 'you just clicked on won\'t be here, do not be alarmed, this is normal')
                        . '</li></ul></li></ul>',
            )
        );

        
        $fieldset = $form->addFieldset(
            'base_fieldset',
            array(
                'legend' => Mage::helper('module_editorproduct')->__('General Information'),
            )
        );
       
        $fieldset->addField(
            'name', # the input id
            'text', # the type
            array(
                'label'    => Mage::helper('module_editorproduct')->__('Name'),
                'class'    => 'required-entry',
                'required' => true,
                'name'     => 'name',
            )
        );
        $fieldset->addField(
            'short_description',
            'textarea',
            array(
                'label' => Mage::helper('module_editorproduct')->__('Short Description'),
                'name'  => 'short_description',
            )
        );
        $fieldset->addField(
            'long_description',
            'textarea',
            array(
                'label' => Mage::helper('module_editorproduct')->__('Long Description'),
                'name'  => 'long_description',
                'note'  => 'The long description didn\'t appear in the grid',
            )
        );

      
        $fieldset = $form->addFieldset(
            'stock_fieldset',
            array(
                'legend' => Mage::helper('module_editorproduct')->__('Stock'),
            )
        );
        $fieldset->addField(
            'stock_note',
            'note',
            array(
                'text' => Mage::helper('module_editorproduct')->__('A note field can be used to inform users of '
                                      . 'something, they look a bit naff though. You can add any HTML you fancy to '
                                      . 'make them look better, such as the note at the top of this form does'),
            )
        );
        $fieldset->addField(
            'quantity',
            'text',
            array(
                'label'    => Mage::helper('module_editorproduct')->__('Quantity'),
                'class'    => 'required-entry',
                'required' => true,
                'name'     => 'quantity',
            )
        );
        
        return parent::_prepareForm();
    }
}
