<?php

/**
 * CopeX GmbH https://copex.io
 * Created by PhpStorm.
 * User: roman
 * Date: 11.10.16
 * Time: 10:12
 */
class CopeX_Youtube_Block_Embed extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{


    public function _beforeToHtml()
    {
        $this->setTemplate('youtube/embed.phtml');
        return parent::_beforeToHtml();
    }
}
