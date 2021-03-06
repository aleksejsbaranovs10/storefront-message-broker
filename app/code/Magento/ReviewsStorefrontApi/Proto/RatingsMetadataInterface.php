<?php
# Generated by the protocol buffer compiler (spiral/php-grpc). DO NOT EDIT!
# source: reviews/reviews.proto

namespace Magento\ReviewsStorefrontApi\Proto;

use Spiral\GRPC;

interface RatingsMetadataInterface extends GRPC\ServiceInterface
{
    // GRPC specific service name.
    public const NAME = "magento.reviewsStorefrontApi.proto.RatingsMetadata";

    /**
    * @param GRPC\ContextInterface $ctx
    * @param ImportRatingsMetadataRequest $in
    * @return ImportRatingsMetadataResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function importRatingsMetadata(GRPC\ContextInterface $ctx, ImportRatingsMetadataRequest $in): ImportRatingsMetadataResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param DeleteRatingsMetadataRequest $in
    * @return DeleteRatingsMetadataResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function deleteRatingsMetadata(GRPC\ContextInterface $ctx, DeleteRatingsMetadataRequest $in): DeleteRatingsMetadataResponse;

    /**
    * @param GRPC\ContextInterface $ctx
    * @param RatingsMetadataRequest $in
    * @return RatingsMetadataResponse
    *
    * @throws GRPC\Exception\InvokeException
    */
    public function getRatingsMetadata(GRPC\ContextInterface $ctx, RatingsMetadataRequest $in): RatingsMetadataResponse;
}
