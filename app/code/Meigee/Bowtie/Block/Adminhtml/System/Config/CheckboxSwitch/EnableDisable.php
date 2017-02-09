<?php
namespace Meigee\Bowtie\Block\Adminhtml\System\Config\CheckboxSwitch;

class EnableDisable extends \Meigee\Bowtie\Block\Adminhtml\System\Config\CheckboxSwitch
{
    function getOnLabel()
    {
        return __('Enable');
    }
    function getOffLabel()
    {
        return __('Disable');
    }
}