<?php
namespace AdminForm\AdminModule\Model\ResourceModel\Sample;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
     protected $_idFieldName='sameple_id';
     /**
      * collection initailization
      */
    protected function __construct()
    {
        $this->_init(
       \AdminForm\AdminModule\Model\Sample::class,
      \AdminForm\AdminModule\Model\ResourceModel\Sample::class
    );
       
    }
}


