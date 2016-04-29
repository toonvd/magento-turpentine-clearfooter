<?php

class Byte_Clearfooter_Model_Observer
{
    public function addIsFooterBlockFLag($observer)
    {
        $model = Mage::registry('cms_block');
        $form = $observer->getForm();

        $fieldset = $form->addFieldset('byte_content_fieldset', array('legend'=>Mage::helper('cms')->__('Byte Clearfooter'),'class'=>'fieldset-wide'));

        $fieldset->addField('is_footer_block', 'bool', array(
            'name'      => 'is_footer_block',
            'label'     => Mage::helper('cms')->__('Is footer?'),
            'title'     => Mage::helper('cms')->__('Is footer?'),
            'disabled'  => false,
            'value'     => $model->getIsFooterBlock()
        ));

    }
}
