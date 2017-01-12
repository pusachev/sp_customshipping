<?php

class SP_CustomShipping_Helper_Data
    extends Mage_Core_Helper_Abstract
{
    const ACTIVE_SYSTEM_CONFIG_NODE                 = 'carriers/sp_customshipping/active';
    const SHIPPING_TITLE_SYSTEM_CONFIG_NODE         = 'carriers/sp_customshipping/title';
    const EXPRESS_MAX_WEIGHT_SYSTEM_CONFIG_NODE     = 'carriers/sp_customshipping/express_max_weight';
    const EXPRESS_PRICE_SYSTEM_CONFIG_NODE          = 'carriers/sp_customshipping/express_price';
    const STANDARD_PRICE_SYSTEM_CONFIG_NODE         = 'carriers/sp_customshipping/standard_price';

    /**
     * @return float
     */
    public function getExpressMaxWeight()
    {
        return (float) Mage::getStoreConfig(self::EXPRESS_MAX_WEIGHT_SYSTEM_CONFIG_NODE);
    }

    /**
     * @return float
     */
    public function getExpressPrice()
    {
        return (float) Mage::getStoreConfig(self::EXPRESS_PRICE_SYSTEM_CONFIG_NODE);
    }

    /**
     * @return float
     */
    public function getStandardPrice()
    {
        return (float) Mage::getStoreConfig(self::STANDARD_PRICE_SYSTEM_CONFIG_NODE);
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return (bool) Mage::getStoreConfig(self::ACTIVE_SYSTEM_CONFIG_NODE);
    }

    /**
     * @return string
     */
    public function getShippingTitle()
    {
        return Mage::getStoreConfig(self::SHIPPING_TITLE_SYSTEM_CONFIG_NODE);
    }
}
