<?php
namespace Form\Empmodule\Cron;

class CronInstance
{
     public function execute()
     {

    $current_date=date("YMd_his");

    $name_of_file='customer'.$current_date.'.csv';

    $header_data=array('firstname','lastname','email','telephone');

    $header_data=array_combine($header_data,$header_data);

    $data=[];

    $data[]=$header_data;
    $data[]=[
        'firstname' => 'Naveen',
        'lastname' => 'naik',
        'email' => 'emb-nai@gmail.com',
        'telephone' => '7022499723'
    ];
    $data[]=[
        'firstname' => 'Naveen',
        'lastname' => 'naik',
        'email' => 'emb-nai@gmail.com',
        'telephone' => '574123694'
    ];
    $data[]=[
        'firstname' => 'Naveen',
        'lastname' => 'naik',
        'email' => 'emb-nai@gmail.com',
        'telephone' => '87561236954'
    ];

    $fc = fopen('/var/www/html/magento2/var/export/'.$name_of_file,'w');

    foreach ($data as $fields) {
        fputcsv($fc,$fields);
    }
     
    }
}