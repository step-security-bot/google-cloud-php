<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/commit_response.proto

namespace Google\Cloud\Spanner\V1\CommitResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional statistics about a commit.
 *
 * Generated from protobuf message <code>google.spanner.v1.CommitResponse.CommitStats</code>
 */
class CommitStats extends \Google\Protobuf\Internal\Message
{
    /**
     * The total number of mutations for the transaction. Knowing the
     * `mutation_count` value can help you maximize the number of mutations
     * in a transaction and minimize the number of API round trips. You can
     * also monitor this value to prevent transactions from exceeding the system
     * [limit](https://cloud.google.com/spanner/quotas#limits_for_creating_reading_updating_and_deleting_data).
     * If the number of mutations exceeds the limit, the server returns
     * [INVALID_ARGUMENT](https://cloud.google.com/spanner/docs/reference/rest/v1/Code#ENUM_VALUES.INVALID_ARGUMENT).
     *
     * Generated from protobuf field <code>int64 mutation_count = 1;</code>
     */
    protected $mutation_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $mutation_count
     *           The total number of mutations for the transaction. Knowing the
     *           `mutation_count` value can help you maximize the number of mutations
     *           in a transaction and minimize the number of API round trips. You can
     *           also monitor this value to prevent transactions from exceeding the system
     *           [limit](https://cloud.google.com/spanner/quotas#limits_for_creating_reading_updating_and_deleting_data).
     *           If the number of mutations exceeds the limit, the server returns
     *           [INVALID_ARGUMENT](https://cloud.google.com/spanner/docs/reference/rest/v1/Code#ENUM_VALUES.INVALID_ARGUMENT).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\CommitResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * The total number of mutations for the transaction. Knowing the
     * `mutation_count` value can help you maximize the number of mutations
     * in a transaction and minimize the number of API round trips. You can
     * also monitor this value to prevent transactions from exceeding the system
     * [limit](https://cloud.google.com/spanner/quotas#limits_for_creating_reading_updating_and_deleting_data).
     * If the number of mutations exceeds the limit, the server returns
     * [INVALID_ARGUMENT](https://cloud.google.com/spanner/docs/reference/rest/v1/Code#ENUM_VALUES.INVALID_ARGUMENT).
     *
     * Generated from protobuf field <code>int64 mutation_count = 1;</code>
     * @return int|string
     */
    public function getMutationCount()
    {
        return $this->mutation_count;
    }

    /**
     * The total number of mutations for the transaction. Knowing the
     * `mutation_count` value can help you maximize the number of mutations
     * in a transaction and minimize the number of API round trips. You can
     * also monitor this value to prevent transactions from exceeding the system
     * [limit](https://cloud.google.com/spanner/quotas#limits_for_creating_reading_updating_and_deleting_data).
     * If the number of mutations exceeds the limit, the server returns
     * [INVALID_ARGUMENT](https://cloud.google.com/spanner/docs/reference/rest/v1/Code#ENUM_VALUES.INVALID_ARGUMENT).
     *
     * Generated from protobuf field <code>int64 mutation_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMutationCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->mutation_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CommitStats::class, \Google\Cloud\Spanner\V1\CommitResponse_CommitStats::class);

