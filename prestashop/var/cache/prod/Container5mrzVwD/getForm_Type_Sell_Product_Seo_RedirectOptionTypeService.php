<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.seo.redirect_option_type' shared service.

return $this->services['form.type.sell.product.seo.redirect_option_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\SEO\RedirectOptionType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getLanguages(), ($this->services['prestashop.router'] ?? $this->load('getPrestashop_RouterService.php')), ($this->services['form.type.sell.product.data_transformer.redirection_target_transformer'] ?? ($this->services['form.type.sell.product.data_transformer.redirection_target_transformer'] = new \PrestaShopBundle\Form\Admin\Sell\Product\DataTransformer\RedirectionTargetTransformer())), ($this->services['form.type.sell.product.event_listener.redirect_option_listener'] ?? ($this->services['form.type.sell.product.event_listener.redirect_option_listener'] = new \PrestaShopBundle\Form\Admin\Sell\Product\EventListener\RedirectOptionListener())), ($this->services['prestashop.adapter.legacy.context'] ?? $this->getPrestashop_Adapter_Legacy_ContextService())->getEmployeeLanguageIso(), ($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getInt("PS_HOME_CATEGORY"));