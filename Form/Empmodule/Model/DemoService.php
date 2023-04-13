<?php

namespace Form\Empmodule\Model;

/**
 * for maneging demo api
 * @api
 */
class DemoService implements \Form\Empmodule\Api\DemoInterface
 {
     /**
      * Get name
      * 
      * @return string 
      */

      public function getProfile()
      {
        return[[

            'firstname' => 'naveen',
            'lastname' =>'naik',
            'email' =>'emb-navenai@embitel.com',
            'telephone'=>'7022499723',
            'city' =>'udupi',
            'state' =>'Karnataka',
            'Country'=>'India',
        ],[
            'firstname' => 'NIKIN',
            'lastname' =>'hegde',
            'email' =>'nikinhegde@embitel.com',
            'telephone'=>'7022499723',
            'city' =>'udupi',
            'state' =>'Karnataka',
            'Country'=>'India',
        ],[


            'firstname' => 'nirangen',
            'lastname' =>'nayak',
            'email' =>'nirangennayak@embitel.com',
            'telephone'=>'7022499723',
            'city' =>'udupi',
            'state' =>'Karnataka',
            'Country'=>'India',

        ]];
      }



      public function getCustomList()
      
        {
            return 'test wassp';
          }
    
      

 }