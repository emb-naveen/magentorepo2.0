<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '5G');
error_reporting (E_ALL);


use \Magento\Framework\App\Bootstrap;

require 'app/bootstrap.php';

$bootstrp=Bootstrap::create(BP,$_SERVER);
$objectManager=$bootstrp->getObjectManager();



try {
    $sku='dumbles';
    $product= $objectManager->create('\Magento\Catalog\Model\ProductRepository')->get($sku);

    $data=[
        'id'    =>$product->getId(),
        'sku'   =>$product->getSku(),
        'name'  =>$product->getName(),
        'desc'  =>$product->getDescription(),
    ];
        echo "Fetch sucess";
        echo '<br>';
        print_r ($data);


    } catch (Exception $e) {
        echo $e->getMessage()."\n";
    }
