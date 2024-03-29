<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\PriceProductStorageExtension\Dependency\Plugin;

interface PriceProductStoragePricesExtractorPluginInterface
{
    /**
     * Specification:
     * - Extracts additional product prices from price product data
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     *
     * @return array<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    public function extractProductPricesForProductAbstract(
        array $priceProductTransfers
    ): array;

    /**
     * Specification:
     * - Extracts additional product prices from price product data for product concrete
     * - Uses id to fetch price from abstract product if needed
     *
     * @api
     *
     * @param int $idProductConcrete
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     *
     * @return array<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    public function extractProductPricesForProductConcrete(
        int $idProductConcrete,
        array $priceProductTransfers
    ): array;
}
