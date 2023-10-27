<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.currency.command_handler.create_currency' shared service.

return $this->services['prestashop.adapter.currency.command_handler.create_currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\AddOfficialCurrencyHandler(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()), ($this->services['prestashop.core.admin.lang.repository'] ?? $this->getPrestashop_Core_Admin_Lang_RepositoryService())->findAll(), ($this->services['prestashop.adapter.currency.command_handler.command_validator'] ?? $this->load('getPrestashop_Adapter_Currency_CommandHandler_CommandValidatorService.php')), ($this->services['prestashop.adapter.data_provider.currency'] ?? $this->getPrestashop_Adapter_DataProvider_CurrencyService()), ($this->services['prestashop.core.localization.currency.pattern_transformer'] ?? ($this->services['prestashop.core.localization.currency.pattern_transformer'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\PatternTransformer())));
