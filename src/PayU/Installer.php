<?php

/**
 * Pimcore
 *
 * This source file is available under following license:
 * - Pimcore Enterprise License (PEL)
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     PEL
 */
namespace Pimcore\Bundle\EcommerceFrameworkBundle\PayU;

use Pimcore\Bundle\EcommerceFrameworkBundle\Tools\PaymentProviderInstaller;

class Installer extends PaymentProviderInstaller
{
    protected $bricksPath = __DIR__ . '/../../install/objectbrick_sources/';

    protected $bricksToInstall = [
        'PaymentProviderPayU' => 'objectbrick_PaymentProviderPayU_export.json'
    ];
}
