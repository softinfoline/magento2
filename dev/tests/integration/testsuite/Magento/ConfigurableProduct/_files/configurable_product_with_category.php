<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

use Magento\Catalog\Api\CategoryLinkManagementInterface;
use Magento\TestFramework\Helper\Bootstrap;

require __DIR__ . '/../../Catalog/_files/category.php';
require __DIR__ . '/product_configurable.php';

$objectManager = Bootstrap::getObjectManager();
/** @var CategoryLinkManagementInterface $categoryLinkManagement */
$categoryLinkManagement = $objectManager->create(CategoryLinkManagementInterface::class);

foreach (['simple_10', 'simple_20', 'configurable'] as $sku) {
    $categoryLinkManagement->assignProductToCategories($sku, [2, 333]);
}
