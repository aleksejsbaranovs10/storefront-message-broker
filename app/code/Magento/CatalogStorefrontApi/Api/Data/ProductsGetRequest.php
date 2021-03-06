<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for ProductsGetRequest class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class ProductsGetRequest implements ProductsGetRequestInterface
{

    /**
     * @var array
     */
    private $ids;

    /**
     * @var string
     */
    private $store;

    /**
     * @var array
     */
    private $attributeCodes;
    
    /**
     * @inheritdoc
     *
     * @return string[]
     */
    public function getIds(): array
    {
        return (array) $this->ids;
    }
    
    /**
     * @inheritdoc
     *
     * @param string[] $value
     * @return void
     */
    public function setIds(array $value): void
    {
        $this->ids = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getStore(): string
    {
        return (string) $this->store;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setStore(string $value): void
    {
        $this->store = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string[]
     */
    public function getAttributeCodes(): array
    {
        return (array) $this->attributeCodes;
    }
    
    /**
     * @inheritdoc
     *
     * @param string[] $value
     * @return void
     */
    public function setAttributeCodes(array $value): void
    {
        $this->attributeCodes = $value;
    }
}
