<?php
namespace AdminForm\AdminModule\Model\ResourceModel;

use  Magento\Framework\Model\ResourceModel\Db\Context;

class Sample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
     /**
     * Define resource model
     * @var \Magento\Framework\Stdlib\DateTime\DateTime
     */
    protected $date;
    /**
     * Article constructer
     * 
     * @param Context $context
     */ 

     public function __construct(
        Context $context,
     ){
        parent::__construct($context);
     }
     /**
      * Resource initialisation
      *@CodingStandersIgnoreStart
      */
    
    protected function _construct()
    {
        $this->_init('sample','entity_id');
       
    }
}