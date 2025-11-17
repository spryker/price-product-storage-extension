<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\PriceProductStorageExtension\Dependency\Plugin;

interface StorePriceProductStoragePriceDimensionPluginInterface
{
    /**
     * Specification:
     *  - Returns prices data from Storage for concrete product for a specific store.
     *
     * @api
     *
     * @param int $idProductConcrete
     * @param string $storeName
     *
     * @return array<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    public function findProductConcretePricesForStore(int $idProductConcrete, string $storeName): array;
}
