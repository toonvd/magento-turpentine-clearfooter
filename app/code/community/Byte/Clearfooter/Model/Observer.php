<?php

class Byte_Clearfooter_Model_Observer
{
    public function addIsFooterBlockFLag($observer)
    {
        $block = $observer->getBlock();
        if($block instanceof Mage_Adminhtml_Block_Cms_Block_Edit_Form){
            $model = Mage::registry('cms_block');
            $form = $block->getForm();
            $fieldset = $form->addFieldset('byte_content_fieldset',
                array('legend'=>Mage::helper('cms')->__('Byte Clearfooter'),'class'=>'fieldset-wide'));

            $fieldset->addField('is_footer_block', 'select', array(
                'name'      => 'is_footer_block',
                'label'     => Mage::helper('cms')->__('Is footer?'),
                'title'     => Mage::helper('cms')->__('Is footer?'),
                'disabled'  => false,
                'options'   => array('0' => 'no', '1' => 'yes'),
                'value'     => $model->getIsFooterBlock()
            ));

            $block->setForm($form);
        }
    }
}
