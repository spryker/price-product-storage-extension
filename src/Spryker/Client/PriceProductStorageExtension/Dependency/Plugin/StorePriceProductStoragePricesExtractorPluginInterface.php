<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\PriceProductStorageExtension\Dependency\Plugin;

interface StorePriceProductStoragePricesExtractorPluginInterface
{
    /**
     * Specification:
     * - Extracts additional product prices from price product data for product concrete for a specific store.
     *
     * @api
     *
     * @param int $idProductConcrete
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     * @param string $storeName
     *
     * @return array<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    public function extractProductPricesForProductConcreteForStore(
        int $idProductConcrete,
        array $priceProductTransfers,
        string $storeName
    ): array;
}
