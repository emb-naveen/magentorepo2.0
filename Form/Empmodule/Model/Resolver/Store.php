<?php

namespace Form\Empmodule\Model\Resolver;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;


class Store implements ResolverInterface
{
  
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
      $stores=[[
        'fistname'=>'Naveen',
        'lastname'=>'Naik',
        'email'=>'udupi',
        'telephone'=>'7022499723',
        'city'=>'udupi',
        'state'=>'karnataka',
        'country'=>'574108'
            ],
      [
        'fistname'=>'Nishith',
        'lastname'=>'salian',
        'email'=>'udupi',
        'telephone'=>'8022499723',
        'city'=>'udupi',
        'state'=>'karnataka',
        'country'=>'574108'
      ]];

        return [
            'total_count'=>count($stores),
            'Data'=>$stores
        ];
    }
}