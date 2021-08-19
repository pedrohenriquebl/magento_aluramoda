<?php
namespace Pedruhbl\Dog\Block;
class Dog extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function getDogName(){

        return "didi";
    }
}
