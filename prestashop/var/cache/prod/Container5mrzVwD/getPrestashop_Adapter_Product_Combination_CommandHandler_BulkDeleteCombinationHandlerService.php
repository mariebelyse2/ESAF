<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.combination.command_handler.bulk_delete_combination_handler' shared service.

return $this->services['prestashop.adapter.product.combination.command_handler.bulk_delete_combination_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Combination\CommandHandler\BulkDeleteCombinationHandler(($this->services['prestashop.adapter.product.combination.update.combination_deleter'] ?? $this->load('getPrestashop_Adapter_Product_Combination_Update_CombinationDeleterService.php')));
