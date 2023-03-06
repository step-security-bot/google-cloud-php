<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/ekm_service.proto

namespace GPBMetadata\Google\Cloud\Kms\V1;

class EkmService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/cloud/kms/v1/ekm_service.protogoogle.cloud.kms.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
ListEkmConnectionsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"�
ListEkmConnectionsResponse;
ekm_connections (2".google.cloud.kms.v1.EkmConnection
next_page_token (	

total_size ("V
GetEkmConnectionRequest;
name (	B-�A�A\'
%cloudkms.googleapis.com/EkmConnection"�
CreateEkmConnectionRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
ekm_connection_id (	B�A?
ekm_connection (2".google.cloud.kms.v1.EkmConnectionB�A"�
UpdateEkmConnectionRequest?
ekm_connection (2".google.cloud.kms.v1.EkmConnectionB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
Certificate
raw_der (B�A
parsed (B�A
issuer (	B�A
subject (	B�A*
subject_alternative_dns_names (	B�A8
not_before_time (2.google.protobuf.TimestampB�A7
not_after_time (2.google.protobuf.TimestampB�A
serial_number (	B�A
sha256_fingerprint	 (	B�A"�
EkmConnection
name (	B�A4
create_time (2.google.protobuf.TimestampB�AM
service_resolvers (22.google.cloud.kms.v1.EkmConnection.ServiceResolver
etag (	B�A�
ServiceResolverR
service_directory_service (	B/�A�A)
\'servicedirectory.googleapis.com/Service
endpoint_filter (	B�A
hostname (	B�AB
server_certificates (2 .google.cloud.kms.v1.CertificateB�A:s�Ap
%cloudkms.googleapis.com/EkmConnectionGprojects/{project}/locations/{location}/ekmConnections/{ekm_connection}2�

EkmService�
ListEkmConnections..google.cloud.kms.v1.ListEkmConnectionsRequest/.google.cloud.kms.v1.ListEkmConnectionsResponse"C���42/v1/{parent=projects/*/locations/*}/ekmConnections�Aparent�
GetEkmConnection,.google.cloud.kms.v1.GetEkmConnectionRequest".google.cloud.kms.v1.EkmConnection"A���42/v1/{name=projects/*/locations/*/ekmConnections/*}�Aname�
CreateEkmConnection/.google.cloud.kms.v1.CreateEkmConnectionRequest".google.cloud.kms.v1.EkmConnection"t���D"2/v1/{parent=projects/*/locations/*}/ekmConnections:ekm_connection�A\'parent,ekm_connection_id,ekm_connection�
UpdateEkmConnection/.google.cloud.kms.v1.UpdateEkmConnectionRequest".google.cloud.kms.v1.EkmConnection"v���S2A/v1/{ekm_connection.name=projects/*/locations/*/ekmConnections/*}:ekm_connection�Aekm_connection,update_maskt�Acloudkms.googleapis.com�AWhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloudkmsB�
com.google.cloud.kms.v1BEkmServiceProtoPZ)cloud.google.com/go/kms/apiv1/kmspb;kmspb��Google.Cloud.Kms.V1�Google\\Cloud\\Kms\\V1�A|
\'servicedirectory.googleapis.com/ServiceQprojects/{project}/locations/{location}/namespaces/{namespace}/services/{service}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

