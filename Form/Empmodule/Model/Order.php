<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Form\Empmodule\Model;


class Order extends \Magento\Sales\Model\Order
{
    public function canCancel()
    {
        return "overrided function in order!!!!!";
    }

   
}
