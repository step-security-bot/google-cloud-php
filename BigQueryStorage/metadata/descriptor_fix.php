<?php
# This file is to prevent the following error from being thrown in this library when
# the native PHP protobuf library is used:
#   "proto not added: google.protobuf.DescriptorProto for google.cloud.bigquery.storage.v1.ProtoSchema"

namespace GPBMetadata\Google\Protobuf;

# skip for now
class DescriptorFix
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }

        $pool->addMessage('google.protobuf.DescriptorProto', \Google\Protobuf\Internal\DescriptorProto::class)->finalizeToPool();
        static::$is_initialized = true;
    }
}

DescriptorFix::initOnce();

