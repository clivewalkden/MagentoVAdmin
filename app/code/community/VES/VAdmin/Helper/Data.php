<?php

class VES_VAdmin_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getVersion()
	{
        return (string) Mage::getConfig()->getNode()->modules->VES_VAdmin->version;
	}
}
