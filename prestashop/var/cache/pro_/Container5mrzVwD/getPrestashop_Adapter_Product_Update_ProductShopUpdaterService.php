<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.update.product_shop_updater' shared service.

return $this->services['prestashop.adapter.product.update.product_shop_updater'] = new \PrestaShop\PrestaShop\Adapter\Product\Update\ProductShopUpdater(($this->services['prestashop.adapter.product.repository.product_multi_shop_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductMultiShopRepositoryService.php')), ($this->services['prestashop.adapter.product.stock.repository.stock_available_multi_shop_repository'] ?? $this->load('getPrestashop_Adapter_Product_Stock_Repository_StockAvailableMultiShopRepositoryService.php')), ($this->services['prestashop.adapter.shop.repository.shop_repository'] ?? ($this->services['prestashop.adapter.shop.repository.shop_repository'] = new \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository())));
