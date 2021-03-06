<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\ReviewsStorefrontApi\Api;

use \Magento\ReviewsStorefrontApi\Api\Data\ImportReviewsRequestInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\ImportReviewsResponseInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\DeleteReviewsRequestInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\DeleteReviewsResponseInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewRequestInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewResponseInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\CustomerProductReviewRequestInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewCountRequestInterface;
use \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewCountResponseInterface;
use \Magento\ReviewsStorefrontApi\Proto\ImportReviewsRequest;
use \Magento\ReviewsStorefrontApi\Proto\ImportReviewsResponse;
use \Magento\ReviewsStorefrontApi\Proto\DeleteReviewsRequest;
use \Magento\ReviewsStorefrontApi\Proto\DeleteReviewsResponse;
use \Magento\ReviewsStorefrontApi\Proto\ProductReviewRequest;
use \Magento\ReviewsStorefrontApi\Proto\ProductReviewResponse;
use \Magento\ReviewsStorefrontApi\Proto\CustomerProductReviewRequest;
use \Magento\ReviewsStorefrontApi\Proto\ProductReviewCountRequest;
use \Magento\ReviewsStorefrontApi\Proto\ProductReviewCountResponse;
use \Magento\ReviewsStorefrontApi\Proto\ProductReviewsClient;

/**
 * Autogenerated description for ProductReviews class
 *
 * @SuppressWarnings(PHPMD)
 */
class ProductReviews implements ProductReviewsInterface
{
    /**
     * @var ProductReviewsClient
     */
    private $protoClient;

    /**
     * @param string $hostname
     * @param array $options
     * @param string|null $channel
     */
    public function __construct(
        string $hostname,
        array $options,
        ?string $channel = null
    ) {
        $this->protoClient = new ProductReviewsClient($hostname, $options, $channel);
    }

    /**
     * @inheritdoc
     *
     * @param ImportReviewsRequestInterface $request
     * @return ImportReviewsResponseInterface
     * @throws \Throwable
     */
    public function importProductReviews(ImportReviewsRequestInterface $request): ImportReviewsResponseInterface
    {
        $protoRequest = $this->importProductReviewsToProto($request);
        [$protoResult, $status] = $this->protoClient->importProductReviews($protoRequest)->wait();
        if ($status->code !== 0) {
            throw new \RuntimeException($status->details, $status->code);
        }
        return $this->importProductReviewsFromProto($protoResult);
    }

    /**
     * Autogenerated description for importProductReviews method
     *
     * @param ImportReviewsRequestInterface $value
     * @return ImportReviewsRequest
     */
    private function importProductReviewsToProto(ImportReviewsRequestInterface $value): ImportReviewsRequest
    {
        // convert data from \Magento\ReviewsStorefrontApi\Api\Data\ImportReviewsRequest
        // to \Magento\ReviewsStorefrontApi\Proto\ImportReviewsRequest
        /** @var \Magento\ReviewsStorefrontApi\Api\Data\ImportReviewsRequest $value **/
        $p = function () use ($value) {
            $r = new \Magento\ReviewsStorefrontApi\Proto\ImportReviewsRequest();
            $res = [];
            foreach ($value->getReviews() as $item1) {
                // convert data from \Magento\ReviewsStorefrontApi\Api\Data\ImportReview
                // to \Magento\ReviewsStorefrontApi\Proto\ImportReview
                /** @var \Magento\ReviewsStorefrontApi\Api\Data\ImportReview $item1 **/
                $p = function () use ($item1) {
                    $r = new \Magento\ReviewsStorefrontApi\Proto\ImportReview();
                    $r->setId($item1->getId());
                    $r->setProductId($item1->getProductId());
                    $r->setTitle($item1->getTitle());
                    $r->setNickname($item1->getNickname());
                    $r->setText($item1->getText());
                    $r->setCustomerId($item1->getCustomerId());
                    $values = [];
                    foreach ($item1->getVisibility() as $newValue) {
                        $values[] = $newValue;
                    }
                    $r->setVisibility($values);
                    $res = [];
                    foreach ($item1->getRatings() as $item9) {
                        // convert data from \Magento\ReviewsStorefrontApi\Api\Data\Rating
                        // to \Magento\ReviewsStorefrontApi\Proto\Rating
                        /** @var \Magento\ReviewsStorefrontApi\Api\Data\Rating $item9 **/
                        $p = function () use ($item9) {
                            $r = new \Magento\ReviewsStorefrontApi\Proto\Rating();
                            $r->setRatingId($item9->getRatingId());
                            $r->setValue($item9->getValue());
                            return $r;
                        };
                        $proto = $p();
                        $res[] = $proto;
                    }
                    $r->setRatings($res);
                    return $r;
                };
                $proto = $p();
                $res[] = $proto;
            }
            $r->setReviews($res);
            $r->setStore($value->getStore());
            return $r;
        };
        $proto = $p();

        return $proto;
    }

    /**
     * Autogenerated description for importProductReviews method
     *
     * @param ImportReviewsResponse $value
     * @return ImportReviewsResponseInterface
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function importProductReviewsFromProto(ImportReviewsResponse $value): ImportReviewsResponseInterface
    {
        // convert data from \Magento\ReviewsStorefrontApi\Proto\ImportReviewsResponse
        // to \Magento\ReviewsStorefrontApi\Api\Data\ImportReviewsResponse
        /** @var \Magento\ReviewsStorefrontApi\Proto\ImportReviewsResponse $value **/
        $p = function () use ($value) {
            $r = new \Magento\ReviewsStorefrontApi\Api\Data\ImportReviewsResponse();
            $r->setStatus($value->getStatus());
            $r->setMessage($value->getMessage());
            return $r;
        };
        $out = $p();

        return $out;
    }

    /**
     * @inheritdoc
     *
     * @param DeleteReviewsRequestInterface $request
     * @return DeleteReviewsResponseInterface
     * @throws \Throwable
     */
    public function deleteProductReviews(DeleteReviewsRequestInterface $request): DeleteReviewsResponseInterface
    {
        $protoRequest = $this->deleteProductReviewsToProto($request);
        [$protoResult, $status] = $this->protoClient->deleteProductReviews($protoRequest)->wait();
        if ($status->code !== 0) {
            throw new \RuntimeException($status->details, $status->code);
        }
        return $this->deleteProductReviewsFromProto($protoResult);
    }

    /**
     * Autogenerated description for deleteProductReviews method
     *
     * @param DeleteReviewsRequestInterface $value
     * @return DeleteReviewsRequest
     */
    private function deleteProductReviewsToProto(DeleteReviewsRequestInterface $value): DeleteReviewsRequest
    {
        // convert data from \Magento\ReviewsStorefrontApi\Api\Data\DeleteReviewsRequest
        // to \Magento\ReviewsStorefrontApi\Proto\DeleteReviewsRequest
        /** @var \Magento\ReviewsStorefrontApi\Api\Data\DeleteReviewsRequest $value **/
        $p = function () use ($value) {
            $r = new \Magento\ReviewsStorefrontApi\Proto\DeleteReviewsRequest();
            $values = [];
            foreach ($value->getReviewIds() as $newValue) {
                $values[] = $newValue;
            }
            $r->setReviewIds($values);
            $r->setStore($value->getStore());
            return $r;
        };
        $proto = $p();

        return $proto;
    }

    /**
     * Autogenerated description for deleteProductReviews method
     *
     * @param DeleteReviewsResponse $value
     * @return DeleteReviewsResponseInterface
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function deleteProductReviewsFromProto(DeleteReviewsResponse $value): DeleteReviewsResponseInterface
    {
        // convert data from \Magento\ReviewsStorefrontApi\Proto\DeleteReviewsResponse
        // to \Magento\ReviewsStorefrontApi\Api\Data\DeleteReviewsResponse
        /** @var \Magento\ReviewsStorefrontApi\Proto\DeleteReviewsResponse $value **/
        $p = function () use ($value) {
            $r = new \Magento\ReviewsStorefrontApi\Api\Data\DeleteReviewsResponse();
            $r->setStatus($value->getStatus());
            $r->setMessage($value->getMessage());
            return $r;
        };
        $out = $p();

        return $out;
    }

    /**
     * @inheritdoc
     *
     * @param ProductReviewRequestInterface $request
     * @return ProductReviewResponseInterface
     * @throws \Throwable
     */
    public function getProductReviews(ProductReviewRequestInterface $request): ProductReviewResponseInterface
    {
        $protoRequest = $this->getProductReviewsToProto($request);
        [$protoResult, $status] = $this->protoClient->getProductReviews($protoRequest)->wait();
        if ($status->code !== 0) {
            throw new \RuntimeException($status->details, $status->code);
        }
        return $this->getProductReviewsFromProto($protoResult);
    }

    /**
     * Autogenerated description for getProductReviews method
     *
     * @param ProductReviewRequestInterface $value
     * @return ProductReviewRequest
     */
    private function getProductReviewsToProto(ProductReviewRequestInterface $value): ProductReviewRequest
    {
        // convert data from \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewRequest
        // to \Magento\ReviewsStorefrontApi\Proto\ProductReviewRequest
        /** @var \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewRequest $value **/
        $p = function () use ($value) {
            $r = new \Magento\ReviewsStorefrontApi\Proto\ProductReviewRequest();
            $r->setProductId($value->getProductId());
            $r->setStore($value->getStore());
            $prop3 = $value->getPagination();
            if ($prop3 !== null) {
                // convert data from \Magento\ReviewsStorefrontApi\Api\Data\PaginationRequest
                // to \Magento\ReviewsStorefrontApi\Proto\PaginationRequest
                /** @var \Magento\ReviewsStorefrontApi\Api\Data\PaginationRequest $prop3 **/
                $p = function () use ($prop3) {
                    $r = new \Magento\ReviewsStorefrontApi\Proto\PaginationRequest();
                    $r->setSize($prop3->getSize());
                    $r->setCursor($prop3->getCursor());
                    return $r;
                };
                $proto = $p();
                $r->setPagination($proto);
            }
            return $r;
        };
        $proto = $p();

        return $proto;
    }

    /**
     * Autogenerated description for getProductReviews method
     *
     * @param ProductReviewResponse $value
     * @return ProductReviewResponseInterface
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function getProductReviewsFromProto(ProductReviewResponse $value): ProductReviewResponseInterface
    {
        // convert data from \Magento\ReviewsStorefrontApi\Proto\ProductReviewResponse
        // to \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewResponse
        /** @var \Magento\ReviewsStorefrontApi\Proto\ProductReviewResponse $value **/
        $p = function () use ($value) {
            $r = new \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewResponse();
            $res = [];
            foreach ($value->getItems() as $item1) {
                // convert data from \Magento\ReviewsStorefrontApi\Proto\ReadReview
                // to \Magento\ReviewsStorefrontApi\Api\Data\ReadReview
                /** @var \Magento\ReviewsStorefrontApi\Proto\ReadReview $item1 **/
                $p = function () use ($item1) {
                    $r = new \Magento\ReviewsStorefrontApi\Api\Data\ReadReview();
                    $r->setId($item1->getId());
                    $r->setProductId($item1->getProductId());
                    $r->setTitle($item1->getTitle());
                    $r->setNickname($item1->getNickname());
                    $r->setText($item1->getText());
                    $res = [];
                    foreach ($item1->getRatings() as $item7) {
                        // convert data from \Magento\ReviewsStorefrontApi\Proto\Rating
                        // to \Magento\ReviewsStorefrontApi\Api\Data\Rating
                        /** @var \Magento\ReviewsStorefrontApi\Proto\Rating $item7 **/
                        $p = function () use ($item7) {
                            $r = new \Magento\ReviewsStorefrontApi\Api\Data\Rating();
                            $r->setRatingId($item7->getRatingId());
                            $r->setValue($item7->getValue());
                            return $r;
                        };
                        $out = $p();
                        $res[] = $out;
                    }
                    $r->setRatings($res);
                    return $r;
                };
                $out = $p();
                $res[] = $out;
            }
            $r->setItems($res);
            $prop2 = $value->getPagination();
            if ($prop2 !== null) {
                // convert data from \Magento\ReviewsStorefrontApi\Proto\PaginationResponse
                // to \Magento\ReviewsStorefrontApi\Api\Data\PaginationResponse
                /** @var \Magento\ReviewsStorefrontApi\Proto\PaginationResponse $prop2 **/
                $p = function () use ($prop2) {
                    $r = new \Magento\ReviewsStorefrontApi\Api\Data\PaginationResponse();
                    $r->setPageSize($prop2->getPageSize());
                    $r->setCursor($prop2->getCursor());
                    return $r;
                };
                $out = $p();
                $r->setPagination($out);
            }
            return $r;
        };
        $out = $p();

        return $out;
    }

    /**
     * @inheritdoc
     *
     * @param CustomerProductReviewRequestInterface $request
     * @return ProductReviewResponseInterface
     * @throws \Throwable
     */
    public function getCustomerProductReviews(CustomerProductReviewRequestInterface $request): ProductReviewResponseInterface
    {
        $protoRequest = $this->getCustomerProductReviewsToProto($request);
        [$protoResult, $status] = $this->protoClient->getCustomerProductReviews($protoRequest)->wait();
        if ($status->code !== 0) {
            throw new \RuntimeException($status->details, $status->code);
        }
        return $this->getCustomerProductReviewsFromProto($protoResult);
    }

    /**
     * Autogenerated description for getCustomerProductReviews method
     *
     * @param CustomerProductReviewRequestInterface $value
     * @return CustomerProductReviewRequest
     */
    private function getCustomerProductReviewsToProto(CustomerProductReviewRequestInterface $value): CustomerProductReviewRequest
    {
        // convert data from \Magento\ReviewsStorefrontApi\Api\Data\CustomerProductReviewRequest
        // to \Magento\ReviewsStorefrontApi\Proto\CustomerProductReviewRequest
        /** @var \Magento\ReviewsStorefrontApi\Api\Data\CustomerProductReviewRequest $value **/
        $p = function () use ($value) {
            $r = new \Magento\ReviewsStorefrontApi\Proto\CustomerProductReviewRequest();
            $r->setCustomerId($value->getCustomerId());
            $r->setStore($value->getStore());
            $prop3 = $value->getPagination();
            if ($prop3 !== null) {
                // convert data from \Magento\ReviewsStorefrontApi\Api\Data\PaginationRequest
                // to \Magento\ReviewsStorefrontApi\Proto\PaginationRequest
                /** @var \Magento\ReviewsStorefrontApi\Api\Data\PaginationRequest $prop3 **/
                $p = function () use ($prop3) {
                    $r = new \Magento\ReviewsStorefrontApi\Proto\PaginationRequest();
                    $r->setSize($prop3->getSize());
                    $r->setCursor($prop3->getCursor());
                    return $r;
                };
                $proto = $p();
                $r->setPagination($proto);
            }
            return $r;
        };
        $proto = $p();

        return $proto;
    }

    /**
     * Autogenerated description for getCustomerProductReviews method
     *
     * @param ProductReviewResponse $value
     * @return ProductReviewResponseInterface
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function getCustomerProductReviewsFromProto(ProductReviewResponse $value): ProductReviewResponseInterface
    {
        // convert data from \Magento\ReviewsStorefrontApi\Proto\ProductReviewResponse
        // to \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewResponse
        /** @var \Magento\ReviewsStorefrontApi\Proto\ProductReviewResponse $value **/
        $p = function () use ($value) {
            $r = new \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewResponse();
            $res = [];
            foreach ($value->getItems() as $item1) {
                // convert data from \Magento\ReviewsStorefrontApi\Proto\ReadReview
                // to \Magento\ReviewsStorefrontApi\Api\Data\ReadReview
                /** @var \Magento\ReviewsStorefrontApi\Proto\ReadReview $item1 **/
                $p = function () use ($item1) {
                    $r = new \Magento\ReviewsStorefrontApi\Api\Data\ReadReview();
                    $r->setId($item1->getId());
                    $r->setProductId($item1->getProductId());
                    $r->setTitle($item1->getTitle());
                    $r->setNickname($item1->getNickname());
                    $r->setText($item1->getText());
                    $res = [];
                    foreach ($item1->getRatings() as $item7) {
                        // convert data from \Magento\ReviewsStorefrontApi\Proto\Rating
                        // to \Magento\ReviewsStorefrontApi\Api\Data\Rating
                        /** @var \Magento\ReviewsStorefrontApi\Proto\Rating $item7 **/
                        $p = function () use ($item7) {
                            $r = new \Magento\ReviewsStorefrontApi\Api\Data\Rating();
                            $r->setRatingId($item7->getRatingId());
                            $r->setValue($item7->getValue());
                            return $r;
                        };
                        $out = $p();
                        $res[] = $out;
                    }
                    $r->setRatings($res);
                    return $r;
                };
                $out = $p();
                $res[] = $out;
            }
            $r->setItems($res);
            $prop2 = $value->getPagination();
            if ($prop2 !== null) {
                // convert data from \Magento\ReviewsStorefrontApi\Proto\PaginationResponse
                // to \Magento\ReviewsStorefrontApi\Api\Data\PaginationResponse
                /** @var \Magento\ReviewsStorefrontApi\Proto\PaginationResponse $prop2 **/
                $p = function () use ($prop2) {
                    $r = new \Magento\ReviewsStorefrontApi\Api\Data\PaginationResponse();
                    $r->setPageSize($prop2->getPageSize());
                    $r->setCursor($prop2->getCursor());
                    return $r;
                };
                $out = $p();
                $r->setPagination($out);
            }
            return $r;
        };
        $out = $p();

        return $out;
    }

    /**
     * @inheritdoc
     *
     * @param ProductReviewCountRequestInterface $request
     * @return ProductReviewCountResponseInterface
     * @throws \Throwable
     */
    public function getProductReviewCount(ProductReviewCountRequestInterface $request): ProductReviewCountResponseInterface
    {
        $protoRequest = $this->getProductReviewCountToProto($request);
        [$protoResult, $status] = $this->protoClient->getProductReviewCount($protoRequest)->wait();
        if ($status->code !== 0) {
            throw new \RuntimeException($status->details, $status->code);
        }
        return $this->getProductReviewCountFromProto($protoResult);
    }

    /**
     * Autogenerated description for getProductReviewCount method
     *
     * @param ProductReviewCountRequestInterface $value
     * @return ProductReviewCountRequest
     */
    private function getProductReviewCountToProto(ProductReviewCountRequestInterface $value): ProductReviewCountRequest
    {
        // convert data from \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewCountRequest
        // to \Magento\ReviewsStorefrontApi\Proto\ProductReviewCountRequest
        /** @var \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewCountRequest $value **/
        $p = function () use ($value) {
            $r = new \Magento\ReviewsStorefrontApi\Proto\ProductReviewCountRequest();
            $r->setProductId($value->getProductId());
            $r->setStore($value->getStore());
            return $r;
        };
        $proto = $p();

        return $proto;
    }

    /**
     * Autogenerated description for getProductReviewCount method
     *
     * @param ProductReviewCountResponse $value
     * @return ProductReviewCountResponseInterface
     * phpcs:disable Generic.Metrics.NestingLevel.TooHigh
     */
    private function getProductReviewCountFromProto(ProductReviewCountResponse $value): ProductReviewCountResponseInterface
    {
        // convert data from \Magento\ReviewsStorefrontApi\Proto\ProductReviewCountResponse
        // to \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewCountResponse
        /** @var \Magento\ReviewsStorefrontApi\Proto\ProductReviewCountResponse $value **/
        $p = function () use ($value) {
            $r = new \Magento\ReviewsStorefrontApi\Api\Data\ProductReviewCountResponse();
            $r->setReviewCount($value->getReviewCount());
            return $r;
        };
        $out = $p();

        return $out;
    }
}
