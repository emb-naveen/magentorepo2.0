<?php
    namespace Form\Empmodule\Api;

   /**
    * for maneging demo api
    * @api
    */

    interface PostInterface
    {
        /**
         * @param string[] $post1
         * 
         * @return array
         */

          public function getCustomList($post1);
       


    }