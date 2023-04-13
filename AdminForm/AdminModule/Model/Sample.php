<?php

namespace AdminForm\AdminModule\Model;

use Magento\Framework\Model\AbstractModel;

class Sample extends AbstractModel
{

    /**
    * Initialise resource model
    *@codingStandardsignoreStart
    */
        protected function __construct()
        {
        // @codingStandardslgnoreEnd
        
            $this->_init(\AdminForm\AdminModule\Model\ResourceModel\Sample::class);
        }
}