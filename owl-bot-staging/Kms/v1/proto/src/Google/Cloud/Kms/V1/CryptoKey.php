<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [CryptoKey][google.cloud.kms.v1.CryptoKey] represents a logical key that
 * can be used for cryptographic operations.
 * A [CryptoKey][google.cloud.kms.v1.CryptoKey] is made up of zero or more
 * [versions][google.cloud.kms.v1.CryptoKeyVersion], which represent the actual
 * key material used in cryptographic operations.
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.CryptoKey</code>
 */
class CryptoKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. A copy of the "primary"
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] that will be used
     * by [Encrypt][google.cloud.kms.v1.KeyManagementService.Encrypt] when this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] is given in
     * [EncryptRequest.name][google.cloud.kms.v1.EncryptRequest.name].
     * The [CryptoKey][google.cloud.kms.v1.CryptoKey]'s primary version can be
     * updated via
     * [UpdateCryptoKeyPrimaryVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyPrimaryVersion].
     * Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     * [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     * may have a primary. For other keys, this field will be omitted.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion primary = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $primary = null;
    /**
     * Immutable. The immutable purpose of this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose purpose = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $purpose = 0;
    /**
     * Output only. The time at which this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * At [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time],
     * the Key Management Service will automatically:
     * 1. Create a new version of this [CryptoKey][google.cloud.kms.v1.CryptoKey].
     * 2. Mark the new version as primary.
     * Key rotations performed manually via
     * [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion]
     * and
     * [UpdateCryptoKeyPrimaryVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyPrimaryVersion]
     * do not affect
     * [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time].
     * Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     * [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     * support automatic rotation. For other keys, this field must be omitted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp next_rotation_time = 7;</code>
     */
    protected $next_rotation_time = null;
    /**
     * A template describing settings for new
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] instances. The
     * properties of new [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     * instances created by either
     * [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion]
     * or auto-rotation are controlled by this template.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersionTemplate version_template = 11;</code>
     */
    protected $version_template = null;
    /**
     * Labels with user-defined metadata. For more information, see
     * [Labeling Keys](https://cloud.google.com/kms/docs/labeling-keys).
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     */
    private $labels;
    /**
     * Immutable. Whether this key may contain imported versions only.
     *
     * Generated from protobuf field <code>bool import_only = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $import_only = false;
    /**
     * Immutable. The period of time that versions of this key spend in the
     * [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED]
     * state before transitioning to
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     * If not specified at creation time, the default duration is 24 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration destroy_scheduled_duration = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $destroy_scheduled_duration = null;
    /**
     * Immutable. The resource name of the backend environment where the key
     * material for all [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion]
     * associated with this [CryptoKey][google.cloud.kms.v1.CryptoKey] reside and
     * where all related cryptographic operations are performed. Only applicable
     * if [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion] have a
     * [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of
     * [EXTERNAL_VPC][CryptoKeyVersion.ProtectionLevel.EXTERNAL_VPC], with the
     * resource name in the format `projects/&#42;&#47;locations/&#42;&#47;ekmConnections/&#42;`.
     * Note, this list is non-exhaustive and may apply to additional
     * [ProtectionLevels][google.cloud.kms.v1.ProtectionLevel] in the future.
     *
     * Generated from protobuf field <code>string crypto_key_backend = 15 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $crypto_key_backend = '';
    protected $rotation_schedule;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for this
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey] in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *     @type \Google\Cloud\Kms\V1\CryptoKeyVersion $primary
     *           Output only. A copy of the "primary"
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] that will be used
     *           by [Encrypt][google.cloud.kms.v1.KeyManagementService.Encrypt] when this
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey] is given in
     *           [EncryptRequest.name][google.cloud.kms.v1.EncryptRequest.name].
     *           The [CryptoKey][google.cloud.kms.v1.CryptoKey]'s primary version can be
     *           updated via
     *           [UpdateCryptoKeyPrimaryVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyPrimaryVersion].
     *           Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     *           [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     *           may have a primary. For other keys, this field will be omitted.
     *     @type int $purpose
     *           Immutable. The immutable purpose of this
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey].
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which this
     *           [CryptoKey][google.cloud.kms.v1.CryptoKey] was created.
     *     @type \Google\Protobuf\Timestamp $next_rotation_time
     *           At [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time],
     *           the Key Management Service will automatically:
     *           1. Create a new version of this [CryptoKey][google.cloud.kms.v1.CryptoKey].
     *           2. Mark the new version as primary.
     *           Key rotations performed manually via
     *           [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion]
     *           and
     *           [UpdateCryptoKeyPrimaryVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyPrimaryVersion]
     *           do not affect
     *           [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time].
     *           Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     *           [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     *           support automatic rotation. For other keys, this field must be omitted.
     *     @type \Google\Protobuf\Duration $rotation_period
     *           [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time]
     *           will be advanced by this period when the service automatically rotates a
     *           key. Must be at least 24 hours and at most 876,000 hours.
     *           If [rotation_period][google.cloud.kms.v1.CryptoKey.rotation_period] is
     *           set,
     *           [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time]
     *           must also be set.
     *           Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     *           [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     *           support automatic rotation. For other keys, this field must be omitted.
     *     @type \Google\Cloud\Kms\V1\CryptoKeyVersionTemplate $version_template
     *           A template describing settings for new
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] instances. The
     *           properties of new [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     *           instances created by either
     *           [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion]
     *           or auto-rotation are controlled by this template.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels with user-defined metadata. For more information, see
     *           [Labeling Keys](https://cloud.google.com/kms/docs/labeling-keys).
     *     @type bool $import_only
     *           Immutable. Whether this key may contain imported versions only.
     *     @type \Google\Protobuf\Duration $destroy_scheduled_duration
     *           Immutable. The period of time that versions of this key spend in the
     *           [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED]
     *           state before transitioning to
     *           [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     *           If not specified at creation time, the default duration is 24 hours.
     *     @type string $crypto_key_backend
     *           Immutable. The resource name of the backend environment where the key
     *           material for all [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion]
     *           associated with this [CryptoKey][google.cloud.kms.v1.CryptoKey] reside and
     *           where all related cryptographic operations are performed. Only applicable
     *           if [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion] have a
     *           [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of
     *           [EXTERNAL_VPC][CryptoKeyVersion.ProtectionLevel.EXTERNAL_VPC], with the
     *           resource name in the format `projects/&#42;&#47;locations/&#42;&#47;ekmConnections/&#42;`.
     *           Note, this list is non-exhaustive and may apply to additional
     *           [ProtectionLevels][google.cloud.kms.v1.ProtectionLevel] in the future.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name for this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name for this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] in the format
     * `projects/&#42;&#47;locations/&#42;&#47;keyRings/&#42;&#47;cryptoKeys/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. A copy of the "primary"
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] that will be used
     * by [Encrypt][google.cloud.kms.v1.KeyManagementService.Encrypt] when this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] is given in
     * [EncryptRequest.name][google.cloud.kms.v1.EncryptRequest.name].
     * The [CryptoKey][google.cloud.kms.v1.CryptoKey]'s primary version can be
     * updated via
     * [UpdateCryptoKeyPrimaryVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyPrimaryVersion].
     * Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     * [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     * may have a primary. For other keys, this field will be omitted.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion primary = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Kms\V1\CryptoKeyVersion|null
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    public function hasPrimary()
    {
        return isset($this->primary);
    }

    public function clearPrimary()
    {
        unset($this->primary);
    }

    /**
     * Output only. A copy of the "primary"
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] that will be used
     * by [Encrypt][google.cloud.kms.v1.KeyManagementService.Encrypt] when this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] is given in
     * [EncryptRequest.name][google.cloud.kms.v1.EncryptRequest.name].
     * The [CryptoKey][google.cloud.kms.v1.CryptoKey]'s primary version can be
     * updated via
     * [UpdateCryptoKeyPrimaryVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyPrimaryVersion].
     * Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     * [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     * may have a primary. For other keys, this field will be omitted.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersion primary = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Kms\V1\CryptoKeyVersion $var
     * @return $this
     */
    public function setPrimary($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\CryptoKeyVersion::class);
        $this->primary = $var;

        return $this;
    }

    /**
     * Immutable. The immutable purpose of this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose purpose = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Immutable. The immutable purpose of this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey].
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose purpose = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setPurpose($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Kms\V1\CryptoKey\CryptoKeyPurpose::class);
        $this->purpose = $var;

        return $this;
    }

    /**
     * Output only. The time at which this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which this
     * [CryptoKey][google.cloud.kms.v1.CryptoKey] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * At [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time],
     * the Key Management Service will automatically:
     * 1. Create a new version of this [CryptoKey][google.cloud.kms.v1.CryptoKey].
     * 2. Mark the new version as primary.
     * Key rotations performed manually via
     * [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion]
     * and
     * [UpdateCryptoKeyPrimaryVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyPrimaryVersion]
     * do not affect
     * [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time].
     * Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     * [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     * support automatic rotation. For other keys, this field must be omitted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp next_rotation_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getNextRotationTime()
    {
        return $this->next_rotation_time;
    }

    public function hasNextRotationTime()
    {
        return isset($this->next_rotation_time);
    }

    public function clearNextRotationTime()
    {
        unset($this->next_rotation_time);
    }

    /**
     * At [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time],
     * the Key Management Service will automatically:
     * 1. Create a new version of this [CryptoKey][google.cloud.kms.v1.CryptoKey].
     * 2. Mark the new version as primary.
     * Key rotations performed manually via
     * [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion]
     * and
     * [UpdateCryptoKeyPrimaryVersion][google.cloud.kms.v1.KeyManagementService.UpdateCryptoKeyPrimaryVersion]
     * do not affect
     * [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time].
     * Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     * [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     * support automatic rotation. For other keys, this field must be omitted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp next_rotation_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setNextRotationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->next_rotation_time = $var;

        return $this;
    }

    /**
     * [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time]
     * will be advanced by this period when the service automatically rotates a
     * key. Must be at least 24 hours and at most 876,000 hours.
     * If [rotation_period][google.cloud.kms.v1.CryptoKey.rotation_period] is
     * set,
     * [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time]
     * must also be set.
     * Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     * [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     * support automatic rotation. For other keys, this field must be omitted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration rotation_period = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getRotationPeriod()
    {
        return $this->readOneof(8);
    }

    public function hasRotationPeriod()
    {
        return $this->hasOneof(8);
    }

    /**
     * [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time]
     * will be advanced by this period when the service automatically rotates a
     * key. Must be at least 24 hours and at most 876,000 hours.
     * If [rotation_period][google.cloud.kms.v1.CryptoKey.rotation_period] is
     * set,
     * [next_rotation_time][google.cloud.kms.v1.CryptoKey.next_rotation_time]
     * must also be set.
     * Keys with [purpose][google.cloud.kms.v1.CryptoKey.purpose]
     * [ENCRYPT_DECRYPT][google.cloud.kms.v1.CryptoKey.CryptoKeyPurpose.ENCRYPT_DECRYPT]
     * support automatic rotation. For other keys, this field must be omitted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration rotation_period = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setRotationPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A template describing settings for new
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] instances. The
     * properties of new [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     * instances created by either
     * [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion]
     * or auto-rotation are controlled by this template.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersionTemplate version_template = 11;</code>
     * @return \Google\Cloud\Kms\V1\CryptoKeyVersionTemplate|null
     */
    public function getVersionTemplate()
    {
        return $this->version_template;
    }

    public function hasVersionTemplate()
    {
        return isset($this->version_template);
    }

    public function clearVersionTemplate()
    {
        unset($this->version_template);
    }

    /**
     * A template describing settings for new
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] instances. The
     * properties of new [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion]
     * instances created by either
     * [CreateCryptoKeyVersion][google.cloud.kms.v1.KeyManagementService.CreateCryptoKeyVersion]
     * or auto-rotation are controlled by this template.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.CryptoKeyVersionTemplate version_template = 11;</code>
     * @param \Google\Cloud\Kms\V1\CryptoKeyVersionTemplate $var
     * @return $this
     */
    public function setVersionTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\CryptoKeyVersionTemplate::class);
        $this->version_template = $var;

        return $this;
    }

    /**
     * Labels with user-defined metadata. For more information, see
     * [Labeling Keys](https://cloud.google.com/kms/docs/labeling-keys).
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels with user-defined metadata. For more information, see
     * [Labeling Keys](https://cloud.google.com/kms/docs/labeling-keys).
     *
     * Generated from protobuf field <code>map<string, string> labels = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Immutable. Whether this key may contain imported versions only.
     *
     * Generated from protobuf field <code>bool import_only = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool
     */
    public function getImportOnly()
    {
        return $this->import_only;
    }

    /**
     * Immutable. Whether this key may contain imported versions only.
     *
     * Generated from protobuf field <code>bool import_only = 13 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool $var
     * @return $this
     */
    public function setImportOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->import_only = $var;

        return $this;
    }

    /**
     * Immutable. The period of time that versions of this key spend in the
     * [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED]
     * state before transitioning to
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     * If not specified at creation time, the default duration is 24 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration destroy_scheduled_duration = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDestroyScheduledDuration()
    {
        return $this->destroy_scheduled_duration;
    }

    public function hasDestroyScheduledDuration()
    {
        return isset($this->destroy_scheduled_duration);
    }

    public function clearDestroyScheduledDuration()
    {
        unset($this->destroy_scheduled_duration);
    }

    /**
     * Immutable. The period of time that versions of this key spend in the
     * [DESTROY_SCHEDULED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROY_SCHEDULED]
     * state before transitioning to
     * [DESTROYED][google.cloud.kms.v1.CryptoKeyVersion.CryptoKeyVersionState.DESTROYED].
     * If not specified at creation time, the default duration is 24 hours.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration destroy_scheduled_duration = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDestroyScheduledDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->destroy_scheduled_duration = $var;

        return $this;
    }

    /**
     * Immutable. The resource name of the backend environment where the key
     * material for all [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion]
     * associated with this [CryptoKey][google.cloud.kms.v1.CryptoKey] reside and
     * where all related cryptographic operations are performed. Only applicable
     * if [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion] have a
     * [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of
     * [EXTERNAL_VPC][CryptoKeyVersion.ProtectionLevel.EXTERNAL_VPC], with the
     * resource name in the format `projects/&#42;&#47;locations/&#42;&#47;ekmConnections/&#42;`.
     * Note, this list is non-exhaustive and may apply to additional
     * [ProtectionLevels][google.cloud.kms.v1.ProtectionLevel] in the future.
     *
     * Generated from protobuf field <code>string crypto_key_backend = 15 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCryptoKeyBackend()
    {
        return $this->crypto_key_backend;
    }

    /**
     * Immutable. The resource name of the backend environment where the key
     * material for all [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion]
     * associated with this [CryptoKey][google.cloud.kms.v1.CryptoKey] reside and
     * where all related cryptographic operations are performed. Only applicable
     * if [CryptoKeyVersions][google.cloud.kms.v1.CryptoKeyVersion] have a
     * [ProtectionLevel][google.cloud.kms.v1.ProtectionLevel] of
     * [EXTERNAL_VPC][CryptoKeyVersion.ProtectionLevel.EXTERNAL_VPC], with the
     * resource name in the format `projects/&#42;&#47;locations/&#42;&#47;ekmConnections/&#42;`.
     * Note, this list is non-exhaustive and may apply to additional
     * [ProtectionLevels][google.cloud.kms.v1.ProtectionLevel] in the future.
     *
     * Generated from protobuf field <code>string crypto_key_backend = 15 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCryptoKeyBackend($var)
    {
        GPBUtil::checkString($var, True);
        $this->crypto_key_backend = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getRotationSchedule()
    {
        return $this->whichOneof("rotation_schedule");
    }

}

