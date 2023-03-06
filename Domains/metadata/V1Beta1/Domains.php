<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1beta1/domains.proto

namespace GPBMetadata\Google\Cloud\Domains\V1Beta1;

class Domains
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Money::initOnce();
        \GPBMetadata\Google\Type\PostalAddress::initOnce();
        $pool->internalAddGeneratedFile(
            '
�^
*google/cloud/domains/v1beta1/domains.protogoogle.cloud.domains.v1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/type/money.proto google/type/postal_address.proto"�	
Registration
name (	B�A
domain_name (	B�A�A4
create_time (2.google.protobuf.TimestampB�A4
expire_time (2.google.protobuf.TimestampB�AD
state (20.google.cloud.domains.v1beta1.Registration.StateB�AE
issues (20.google.cloud.domains.v1beta1.Registration.IssueB�AF
labels	 (26.google.cloud.domains.v1beta1.Registration.LabelsEntryM
management_settings
 (20.google.cloud.domains.v1beta1.ManagementSettings?
dns_settings (2).google.cloud.domains.v1beta1.DnsSettingsL
contact_settings (2-.google.cloud.domains.v1beta1.ContactSettingsB�AT
pending_contact_settings (2-.google.cloud.domains.v1beta1.ContactSettingsB�AL
supported_privacy (2,.google.cloud.domains.v1beta1.ContactPrivacyB�A-
LabelsEntry
key (	
value (	:8"�
State
STATE_UNSPECIFIED 
REGISTRATION_PENDING
REGISTRATION_FAILED
TRANSFER_PENDING
TRANSFER_FAILED

ACTIVE
	SUSPENDED
EXPORTED"I
Issue
ISSUE_UNSPECIFIED 
CONTACT_SUPPORT
UNVERIFIED_EMAIL:n�Ak
#domains.googleapis.com/RegistrationDprojects/{project}/locations/{location}/registrations/{registration}"�
ManagementSettings[
renewal_method (2>.google.cloud.domains.v1beta1.ManagementSettings.RenewalMethodB�AL
transfer_lock_state (2/.google.cloud.domains.v1beta1.TransferLockState"Z
RenewalMethod
RENEWAL_METHOD_UNSPECIFIED 
AUTOMATIC_RENEWAL
MANUAL_RENEWAL"�

DnsSettingsI

custom_dns (23.google.cloud.domains.v1beta1.DnsSettings.CustomDnsH X
google_domains_dns (2:.google.cloud.domains.v1beta1.DnsSettings.GoogleDomainsDnsH J
glue_records (24.google.cloud.domains.v1beta1.DnsSettings.GlueRecordn
	CustomDns
name_servers (	B�AF

ds_records (22.google.cloud.domains.v1beta1.DnsSettings.DsRecord�
GoogleDomainsDns
name_servers (	B�AH
ds_state (21.google.cloud.domains.v1beta1.DnsSettings.DsStateB�AK

ds_records (22.google.cloud.domains.v1beta1.DnsSettings.DsRecordB�A�
DsRecord
key_tag (O
	algorithm (2<.google.cloud.domains.v1beta1.DnsSettings.DsRecord.AlgorithmR
digest_type (2=.google.cloud.domains.v1beta1.DnsSettings.DsRecord.DigestType
digest (	"�
	Algorithm
ALGORITHM_UNSPECIFIED 

RSAMD5
DH
DSA
ECC
RSASHA1
DSANSEC3SHA1
RSASHA1NSEC3SHA1
	RSASHA256
	RSASHA512

ECCGOST
ECDSAP256SHA256
ECDSAP384SHA384
ED25519	
ED448
INDIRECT�

PRIVATEDNS�

PRIVATEOID�"Y

DigestType
DIGEST_TYPE_UNSPECIFIED 
SHA1

SHA256
GOST3411

SHA384T

GlueRecord
	host_name (	B�A
ipv4_addresses (	
ipv6_addresses (	"Y
DsState
DS_STATE_UNSPECIFIED 
DS_RECORDS_UNPUBLISHED
DS_RECORDS_PUBLISHEDB
dns_provider"�
ContactSettingsB
privacy (2,.google.cloud.domains.v1beta1.ContactPrivacyB�AV
registrant_contact (25.google.cloud.domains.v1beta1.ContactSettings.ContactB�AQ
admin_contact (25.google.cloud.domains.v1beta1.ContactSettings.ContactB�AU
technical_contact (25.google.cloud.domains.v1beta1.ContactSettings.ContactB�A�
Contact7
postal_address (2.google.type.PostalAddressB�A
email (	B�A
phone_number (	B�A

fax_number (	"g
SearchDomainsRequest
query (	B�A;
location (	B)�A�A#
!locations.googleapis.com/Location"f
SearchDomainsResponseM
register_parameters (20.google.cloud.domains.v1beta1.RegisterParameters"z
!RetrieveRegisterParametersRequest
domain_name (	B�A;
location (	B)�A�A#
!locations.googleapis.com/Location"s
"RetrieveRegisterParametersResponseM
register_parameters (20.google.cloud.domains.v1beta1.RegisterParameters"�
RegisterDomainRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationE
registration (2*.google.cloud.domains.v1beta1.RegistrationB�AB
domain_notices (2*.google.cloud.domains.v1beta1.DomainNoticeD
contact_notices (2+.google.cloud.domains.v1beta1.ContactNotice-
yearly_price (2.google.type.MoneyB�A
validate_only ("z
!RetrieveTransferParametersRequest
domain_name (	B�A;
location (	B)�A�A#
!locations.googleapis.com/Location"s
"RetrieveTransferParametersResponseM
transfer_parameters (20.google.cloud.domains.v1beta1.TransferParameters"�
TransferDomainRequest9
parent (	B)�A�A#
!locations.googleapis.com/LocationE
registration (2*.google.cloud.domains.v1beta1.RegistrationB�AD
contact_notices (2+.google.cloud.domains.v1beta1.ContactNotice-
yearly_price (2.google.type.MoneyB�AK
authorization_code (2/.google.cloud.domains.v1beta1.AuthorizationCode
validate_only ("�
ListRegistrationsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	"w
ListRegistrationsResponseA
registrations (2*.google.cloud.domains.v1beta1.Registration
next_page_token (	"S
GetRegistrationRequest9
name (	B+�A�A%
#domains.googleapis.com/Registration"�
UpdateRegistrationRequest@
registration (2*.google.cloud.domains.v1beta1.Registration4
update_mask (2.google.protobuf.FieldMaskB�A"�
"ConfigureManagementSettingsRequestA
registration (	B+�A�A%
#domains.googleapis.com/RegistrationM
management_settings (20.google.cloud.domains.v1beta1.ManagementSettings4
update_mask (2.google.protobuf.FieldMaskB�A"�
ConfigureDnsSettingsRequestA
registration (	B+�A�A%
#domains.googleapis.com/Registration?
dns_settings (2).google.cloud.domains.v1beta1.DnsSettings4
update_mask (2.google.protobuf.FieldMaskB�A
validate_only ("�
ConfigureContactSettingsRequestA
registration (	B+�A�A%
#domains.googleapis.com/RegistrationG
contact_settings (2-.google.cloud.domains.v1beta1.ContactSettings4
update_mask (2.google.protobuf.FieldMaskB�AD
contact_notices (2+.google.cloud.domains.v1beta1.ContactNotice
validate_only ("V
ExportRegistrationRequest9
name (	B+�A�A%
#domains.googleapis.com/Registration"V
DeleteRegistrationRequest9
name (	B+�A�A%
#domains.googleapis.com/Registration"e
 RetrieveAuthorizationCodeRequestA
registration (	B+�A�A%
#domains.googleapis.com/Registration"b
ResetAuthorizationCodeRequestA
registration (	B+�A�A%
#domains.googleapis.com/Registration"�
RegisterParameters
domain_name (	S
availability (2=.google.cloud.domains.v1beta1.RegisterParameters.AvailabilityG
supported_privacy (2,.google.cloud.domains.v1beta1.ContactPrivacyB
domain_notices (2*.google.cloud.domains.v1beta1.DomainNotice(
yearly_price (2.google.type.Money"j
Availability
AVAILABILITY_UNSPECIFIED 
	AVAILABLE
UNAVAILABLE
UNSUPPORTED
UNKNOWN"�
TransferParameters
domain_name (	
current_registrar (	
name_servers (	L
transfer_lock_state (2/.google.cloud.domains.v1beta1.TransferLockStateG
supported_privacy (2,.google.cloud.domains.v1beta1.ContactPrivacy(
yearly_price (2.google.type.Money"!
AuthorizationCode
code (	"�
OperationMetadata/
create_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
target (	
verb (	
status_detail (	
api_version (	*
ContactPrivacy
CONTACT_PRIVACY_UNSPECIFIED 
PUBLIC_CONTACT_DATA
PRIVATE_CONTACT_DATA
REDACTED_CONTACT_DATA*A
DomainNotice
DOMAIN_NOTICE_UNSPECIFIED 
HSTS_PRELOADED*X
ContactNotice
CONTACT_NOTICE_UNSPECIFIED \'
#PUBLIC_CONTACT_DATA_ACKNOWLEDGEMENT*R
TransferLockState#
TRANSFER_LOCK_STATE_UNSPECIFIED 
UNLOCKED

LOCKED2�
Domains�
SearchDomains2.google.cloud.domains.v1beta1.SearchDomainsRequest3.google.cloud.domains.v1beta1.SearchDomainsResponse"_���HF/v1beta1/{location=projects/*/locations/*}/registrations:searchDomains�Alocation,query�
RetrieveRegisterParameters?.google.cloud.domains.v1beta1.RetrieveRegisterParametersRequest@.google.cloud.domains.v1beta1.RetrieveRegisterParametersResponse"r���US/v1beta1/{location=projects/*/locations/*}/registrations:retrieveRegisterParameters�Alocation,domain_name�
RegisterDomain3.google.cloud.domains.v1beta1.RegisterDomainRequest.google.longrunning.Operation"����D"?/v1beta1/{parent=projects/*/locations/*}/registrations:register:*�A parent,registration,yearly_price�A!
RegistrationOperationMetadata�
RetrieveTransferParameters?.google.cloud.domains.v1beta1.RetrieveTransferParametersRequest@.google.cloud.domains.v1beta1.RetrieveTransferParametersResponse"r���US/v1beta1/{location=projects/*/locations/*}/registrations:retrieveTransferParameters�Alocation,domain_name�
TransferDomain3.google.cloud.domains.v1beta1.TransferDomainRequest.google.longrunning.Operation"����D"?/v1beta1/{parent=projects/*/locations/*}/registrations:transfer:*�A3parent,registration,yearly_price,authorization_code�A!
RegistrationOperationMetadata�
ListRegistrations6.google.cloud.domains.v1beta1.ListRegistrationsRequest7.google.cloud.domains.v1beta1.ListRegistrationsResponse"G���86/v1beta1/{parent=projects/*/locations/*}/registrations�Aparent�
GetRegistration4.google.cloud.domains.v1beta1.GetRegistrationRequest*.google.cloud.domains.v1beta1.Registration"E���86/v1beta1/{name=projects/*/locations/*/registrations/*}�Aname�
UpdateRegistration7.google.cloud.domains.v1beta1.UpdateRegistrationRequest.google.longrunning.Operation"����S2C/v1beta1/{registration.name=projects/*/locations/*/registrations/*}:registration�Aregistration,update_mask�A!
RegistrationOperationMetadata�
ConfigureManagementSettings@.google.cloud.domains.v1beta1.ConfigureManagementSettingsRequest.google.longrunning.Operation"����_"Z/v1beta1/{registration=projects/*/locations/*/registrations/*}:configureManagementSettings:*�A,registration,management_settings,update_mask�A!
RegistrationOperationMetadata�
ConfigureDnsSettings9.google.cloud.domains.v1beta1.ConfigureDnsSettingsRequest.google.longrunning.Operation"����X"S/v1beta1/{registration=projects/*/locations/*/registrations/*}:configureDnsSettings:*�A%registration,dns_settings,update_mask�A!
RegistrationOperationMetadata�
ConfigureContactSettings=.google.cloud.domains.v1beta1.ConfigureContactSettingsRequest.google.longrunning.Operation"����\\"W/v1beta1/{registration=projects/*/locations/*/registrations/*}:configureContactSettings:*�A)registration,contact_settings,update_mask�A!
RegistrationOperationMetadata�
ExportRegistration7.google.cloud.domains.v1beta1.ExportRegistrationRequest.google.longrunning.Operation"s���B"=/v1beta1/{name=projects/*/locations/*/registrations/*}:export:*�Aname�A!
RegistrationOperationMetadata�
DeleteRegistration7.google.cloud.domains.v1beta1.DeleteRegistrationRequest.google.longrunning.Operation"r���8*6/v1beta1/{name=projects/*/locations/*/registrations/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
RetrieveAuthorizationCode>.google.cloud.domains.v1beta1.RetrieveAuthorizationCodeRequest/.google.cloud.domains.v1beta1.AuthorizationCode"o���ZX/v1beta1/{registration=projects/*/locations/*/registrations/*}:retrieveAuthorizationCode�Aregistration�
ResetAuthorizationCode;.google.cloud.domains.v1beta1.ResetAuthorizationCodeRequest/.google.cloud.domains.v1beta1.AuthorizationCode"o���Z"U/v1beta1/{registration=projects/*/locations/*/registrations/*}:resetAuthorizationCode:*�AregistrationJ�Adomains.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBn
 com.google.cloud.domains.v1beta1BDomainsProtoPZ:cloud.google.com/go/domains/apiv1beta1/domainspb;domainspbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

