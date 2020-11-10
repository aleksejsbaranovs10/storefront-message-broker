<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for ProductShopperInputOption class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class ProductShopperInputOption implements ProductShopperInputOptionInterface
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var int
     */
    private $sortOrder;

    /**
     * @var bool
     */
    private $required;

    /**
     * @var string
     */
    private $renderType;

    /**
     * @var array
     */
    private $price;

    /**
     * @var array
     */
    private $fileExtension;

    /**
     * @var \Magento\CatalogStorefrontApi\Api\Data\ValueRangeInterface
     */
    private $range;

    /**
     * @var int
     */
    private $imageSizeX;

    /**
     * @var int
     */
    private $imageSizeY;
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getId(): string
    {
        return (string) $this->id;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setId(string $value): void
    {
        $this->id = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getLabel(): string
    {
        return (string) $this->label;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setLabel(string $value): void
    {
        $this->label = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return (int) $this->sortOrder;
    }
    
    /**
     * @inheritdoc
     *
     * @param int $value
     * @return void
     */
    public function setSortOrder(int $value): void
    {
        $this->sortOrder = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return bool
     */
    public function getRequired(): bool
    {
        return (bool) $this->required;
    }
    
    /**
     * @inheritdoc
     *
     * @param bool $value
     * @return void
     */
    public function setRequired(bool $value): void
    {
        $this->required = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getRenderType(): string
    {
        return (string) $this->renderType;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setRenderType(string $value): void
    {
        $this->renderType = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\PriceInterface[]
     */
    public function getPrice(): array
    {
        return (array) $this->price;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\PriceInterface[] $value
     * @return void
     */
    public function setPrice(array $value): void
    {
        $this->price = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string[]
     */
    public function getFileExtension(): array
    {
        return (array) $this->fileExtension;
    }
    
    /**
     * @inheritdoc
     *
     * @param string[] $value
     * @return void
     */
    public function setFileExtension(array $value): void
    {
        $this->fileExtension = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\ValueRangeInterface|null
     */
    public function getRange(): ?\Magento\CatalogStorefrontApi\Api\Data\ValueRangeInterface
    {
        return $this->range;
    }
    
    /**
     * @inheritdoc
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\ValueRangeInterface $value
     * @return void
     */
    public function setRange(\Magento\CatalogStorefrontApi\Api\Data\ValueRangeInterface $value): void
    {
        $this->range = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return int
     */
    public function getImageSizeX(): int
    {
        return (int) $this->imageSizeX;
    }
    
    /**
     * @inheritdoc
     *
     * @param int $value
     * @return void
     */
    public function setImageSizeX(int $value): void
    {
        $this->imageSizeX = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return int
     */
    public function getImageSizeY(): int
    {
        return (int) $this->imageSizeY;
    }
    
    /**
     * @inheritdoc
     *
     * @param int $value
     * @return void
     */
    public function setImageSizeY(int $value): void
    {
        $this->imageSizeY = $value;
    }
}
