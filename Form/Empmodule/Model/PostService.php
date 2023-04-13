<?php

namespace Form\Empmodule\Model;

use Magento\Framework\App\Action\Context;
use \Vendor\Module\Api\getCustomInterface;
use Magento\Customer\Model\GroupFactory;


class PostService implements \Form\Empmodule\Api\PostInterface
 {

    protected $_group;

    public function __construct(
        GroupFactory $group)
    {
        $this->_group = $group;
    }

   /**
     * set Data
     * 
     * @param string[] $post1
     * @return array
     */
    

   public function getCustomList($post1){

 
try{
    $data=[
        'customer_group_code'=>$post1['groupName'],
        'tax_class_id'=>3
    ];

    $group=$this->_group->create();
    $group->setData($data);
    $group->save();


    $data_info=[
        'group_id'=>$group->getCustomerGroupId(),
        'group_name'=>$group->getCustomerGroupCode()
    ];

    return $post1['groupName'];
    
    //return "hii";
}
    catch (\Throwable $th)
    {
        $th->getmessage();
    }      
       

}
}
