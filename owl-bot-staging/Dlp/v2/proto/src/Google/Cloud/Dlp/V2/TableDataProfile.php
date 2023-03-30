<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The profile for a scanned table.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.TableDataProfile</code>
 */
class TableDataProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the profile.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The resource name to the project data profile for this table.
     *
     * Generated from protobuf field <code>string project_data_profile = 2;</code>
     */
    protected $project_data_profile = '';
    /**
     * The GCP project ID that owns the BigQuery dataset.
     *
     * Generated from protobuf field <code>string dataset_project_id = 24;</code>
     */
    protected $dataset_project_id = '';
    /**
     * The BigQuery location where the dataset's data is stored.
     * See https://cloud.google.com/bigquery/docs/locations for supported
     * locations.
     *
     * Generated from protobuf field <code>string dataset_location = 29;</code>
     */
    protected $dataset_location = '';
    /**
     * The BigQuery dataset ID.
     *
     * Generated from protobuf field <code>string dataset_id = 25;</code>
     */
    protected $dataset_id = '';
    /**
     * The BigQuery table ID.
     *
     * Generated from protobuf field <code>string table_id = 26;</code>
     */
    protected $table_id = '';
    /**
     * The resource name of the table.
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string full_resource = 3;</code>
     */
    protected $full_resource = '';
    /**
     * Success or error status from the most recent profile generation attempt.
     * May be empty if the profile is still being generated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ProfileStatus profile_status = 21;</code>
     */
    protected $profile_status = null;
    /**
     * State of a profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableDataProfile.State state = 22;</code>
     */
    protected $state = 0;
    /**
     * The sensitivity score of this table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 5;</code>
     */
    protected $sensitivity_score = null;
    /**
     * The data risk level of this table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel data_risk_level = 6;</code>
     */
    protected $data_risk_level = null;
    /**
     * The infoTypes predicted from this table's data.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeSummary predicted_info_types = 27;</code>
     */
    private $predicted_info_types;
    /**
     * Other infoTypes found in this table's data.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.OtherInfoTypeSummary other_info_types = 28;</code>
     */
    private $other_info_types;
    /**
     * The snapshot of the configurations used to generate the profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileConfigSnapshot config_snapshot = 7;</code>
     */
    protected $config_snapshot = null;
    /**
     * The time when this table was last modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_time = 8;</code>
     */
    protected $last_modified_time = null;
    /**
     * Optional. The time when this table expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 9;</code>
     */
    protected $expiration_time = null;
    /**
     * The number of columns profiled in the table.
     *
     * Generated from protobuf field <code>int64 scanned_column_count = 10;</code>
     */
    protected $scanned_column_count = 0;
    /**
     * The number of columns skipped in the table because of an error.
     *
     * Generated from protobuf field <code>int64 failed_column_count = 11;</code>
     */
    protected $failed_column_count = 0;
    /**
     * The size of the table when the profile was generated.
     *
     * Generated from protobuf field <code>int64 table_size_bytes = 12;</code>
     */
    protected $table_size_bytes = 0;
    /**
     * Number of rows in the table when the profile was generated.
     * This will not be populated for BigLake tables.
     *
     * Generated from protobuf field <code>int64 row_count = 13;</code>
     */
    protected $row_count = 0;
    /**
     * How the table is encrypted.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.EncryptionStatus encryption_status = 14;</code>
     */
    protected $encryption_status = 0;
    /**
     * How broadly a resource has been shared.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ResourceVisibility resource_visibility = 15;</code>
     */
    protected $resource_visibility = 0;
    /**
     * The last time the profile was generated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp profile_last_generated = 16;</code>
     */
    protected $profile_last_generated = null;
    /**
     * The labels applied to the resource at the time the profile was generated.
     *
     * Generated from protobuf field <code>map<string, string> resource_labels = 17;</code>
     */
    private $resource_labels;
    /**
     * The time at which the table was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 23;</code>
     */
    protected $create_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the profile.
     *     @type string $project_data_profile
     *           The resource name to the project data profile for this table.
     *     @type string $dataset_project_id
     *           The GCP project ID that owns the BigQuery dataset.
     *     @type string $dataset_location
     *           The BigQuery location where the dataset's data is stored.
     *           See https://cloud.google.com/bigquery/docs/locations for supported
     *           locations.
     *     @type string $dataset_id
     *           The BigQuery dataset ID.
     *     @type string $table_id
     *           The BigQuery table ID.
     *     @type string $full_resource
     *           The resource name of the table.
     *           https://cloud.google.com/apis/design/resource_names#full_resource_name
     *     @type \Google\Cloud\Dlp\V2\ProfileStatus $profile_status
     *           Success or error status from the most recent profile generation attempt.
     *           May be empty if the profile is still being generated.
     *     @type int $state
     *           State of a profile.
     *     @type \Google\Cloud\Dlp\V2\SensitivityScore $sensitivity_score
     *           The sensitivity score of this table.
     *     @type \Google\Cloud\Dlp\V2\DataRiskLevel $data_risk_level
     *           The data risk level of this table.
     *     @type array<\Google\Cloud\Dlp\V2\InfoTypeSummary>|\Google\Protobuf\Internal\RepeatedField $predicted_info_types
     *           The infoTypes predicted from this table's data.
     *     @type array<\Google\Cloud\Dlp\V2\OtherInfoTypeSummary>|\Google\Protobuf\Internal\RepeatedField $other_info_types
     *           Other infoTypes found in this table's data.
     *     @type \Google\Cloud\Dlp\V2\DataProfileConfigSnapshot $config_snapshot
     *           The snapshot of the configurations used to generate the profile.
     *     @type \Google\Protobuf\Timestamp $last_modified_time
     *           The time when this table was last modified
     *     @type \Google\Protobuf\Timestamp $expiration_time
     *           Optional. The time when this table expires.
     *     @type int|string $scanned_column_count
     *           The number of columns profiled in the table.
     *     @type int|string $failed_column_count
     *           The number of columns skipped in the table because of an error.
     *     @type int|string $table_size_bytes
     *           The size of the table when the profile was generated.
     *     @type int|string $row_count
     *           Number of rows in the table when the profile was generated.
     *           This will not be populated for BigLake tables.
     *     @type int $encryption_status
     *           How the table is encrypted.
     *     @type int $resource_visibility
     *           How broadly a resource has been shared.
     *     @type \Google\Protobuf\Timestamp $profile_last_generated
     *           The last time the profile was generated.
     *     @type array|\Google\Protobuf\Internal\MapField $resource_labels
     *           The labels applied to the resource at the time the profile was generated.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The time at which the table was created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the profile.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the profile.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The resource name to the project data profile for this table.
     *
     * Generated from protobuf field <code>string project_data_profile = 2;</code>
     * @return string
     */
    public function getProjectDataProfile()
    {
        return $this->project_data_profile;
    }

    /**
     * The resource name to the project data profile for this table.
     *
     * Generated from protobuf field <code>string project_data_profile = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectDataProfile($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_data_profile = $var;

        return $this;
    }

    /**
     * The GCP project ID that owns the BigQuery dataset.
     *
     * Generated from protobuf field <code>string dataset_project_id = 24;</code>
     * @return string
     */
    public function getDatasetProjectId()
    {
        return $this->dataset_project_id;
    }

    /**
     * The GCP project ID that owns the BigQuery dataset.
     *
     * Generated from protobuf field <code>string dataset_project_id = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_project_id = $var;

        return $this;
    }

    /**
     * The BigQuery location where the dataset's data is stored.
     * See https://cloud.google.com/bigquery/docs/locations for supported
     * locations.
     *
     * Generated from protobuf field <code>string dataset_location = 29;</code>
     * @return string
     */
    public function getDatasetLocation()
    {
        return $this->dataset_location;
    }

    /**
     * The BigQuery location where the dataset's data is stored.
     * See https://cloud.google.com/bigquery/docs/locations for supported
     * locations.
     *
     * Generated from protobuf field <code>string dataset_location = 29;</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_location = $var;

        return $this;
    }

    /**
     * The BigQuery dataset ID.
     *
     * Generated from protobuf field <code>string dataset_id = 25;</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * The BigQuery dataset ID.
     *
     * Generated from protobuf field <code>string dataset_id = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * The BigQuery table ID.
     *
     * Generated from protobuf field <code>string table_id = 26;</code>
     * @return string
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * The BigQuery table ID.
     *
     * Generated from protobuf field <code>string table_id = 26;</code>
     * @param string $var
     * @return $this
     */
    public function setTableId($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_id = $var;

        return $this;
    }

    /**
     * The resource name of the table.
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string full_resource = 3;</code>
     * @return string
     */
    public function getFullResource()
    {
        return $this->full_resource;
    }

    /**
     * The resource name of the table.
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string full_resource = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFullResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_resource = $var;

        return $this;
    }

    /**
     * Success or error status from the most recent profile generation attempt.
     * May be empty if the profile is still being generated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ProfileStatus profile_status = 21;</code>
     * @return \Google\Cloud\Dlp\V2\ProfileStatus|null
     */
    public function getProfileStatus()
    {
        return $this->profile_status;
    }

    public function hasProfileStatus()
    {
        return isset($this->profile_status);
    }

    public function clearProfileStatus()
    {
        unset($this->profile_status);
    }

    /**
     * Success or error status from the most recent profile generation attempt.
     * May be empty if the profile is still being generated.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ProfileStatus profile_status = 21;</code>
     * @param \Google\Cloud\Dlp\V2\ProfileStatus $var
     * @return $this
     */
    public function setProfileStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ProfileStatus::class);
        $this->profile_status = $var;

        return $this;
    }

    /**
     * State of a profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableDataProfile.State state = 22;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * State of a profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.TableDataProfile.State state = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\TableDataProfile\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The sensitivity score of this table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 5;</code>
     * @return \Google\Cloud\Dlp\V2\SensitivityScore|null
     */
    public function getSensitivityScore()
    {
        return $this->sensitivity_score;
    }

    public function hasSensitivityScore()
    {
        return isset($this->sensitivity_score);
    }

    public function clearSensitivityScore()
    {
        unset($this->sensitivity_score);
    }

    /**
     * The sensitivity score of this table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.SensitivityScore sensitivity_score = 5;</code>
     * @param \Google\Cloud\Dlp\V2\SensitivityScore $var
     * @return $this
     */
    public function setSensitivityScore($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\SensitivityScore::class);
        $this->sensitivity_score = $var;

        return $this;
    }

    /**
     * The data risk level of this table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel data_risk_level = 6;</code>
     * @return \Google\Cloud\Dlp\V2\DataRiskLevel|null
     */
    public function getDataRiskLevel()
    {
        return $this->data_risk_level;
    }

    public function hasDataRiskLevel()
    {
        return isset($this->data_risk_level);
    }

    public function clearDataRiskLevel()
    {
        unset($this->data_risk_level);
    }

    /**
     * The data risk level of this table.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataRiskLevel data_risk_level = 6;</code>
     * @param \Google\Cloud\Dlp\V2\DataRiskLevel $var
     * @return $this
     */
    public function setDataRiskLevel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataRiskLevel::class);
        $this->data_risk_level = $var;

        return $this;
    }

    /**
     * The infoTypes predicted from this table's data.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeSummary predicted_info_types = 27;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPredictedInfoTypes()
    {
        return $this->predicted_info_types;
    }

    /**
     * The infoTypes predicted from this table's data.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.InfoTypeSummary predicted_info_types = 27;</code>
     * @param array<\Google\Cloud\Dlp\V2\InfoTypeSummary>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPredictedInfoTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\InfoTypeSummary::class);
        $this->predicted_info_types = $arr;

        return $this;
    }

    /**
     * Other infoTypes found in this table's data.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.OtherInfoTypeSummary other_info_types = 28;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOtherInfoTypes()
    {
        return $this->other_info_types;
    }

    /**
     * Other infoTypes found in this table's data.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.OtherInfoTypeSummary other_info_types = 28;</code>
     * @param array<\Google\Cloud\Dlp\V2\OtherInfoTypeSummary>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOtherInfoTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\OtherInfoTypeSummary::class);
        $this->other_info_types = $arr;

        return $this;
    }

    /**
     * The snapshot of the configurations used to generate the profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileConfigSnapshot config_snapshot = 7;</code>
     * @return \Google\Cloud\Dlp\V2\DataProfileConfigSnapshot|null
     */
    public function getConfigSnapshot()
    {
        return $this->config_snapshot;
    }

    public function hasConfigSnapshot()
    {
        return isset($this->config_snapshot);
    }

    public function clearConfigSnapshot()
    {
        unset($this->config_snapshot);
    }

    /**
     * The snapshot of the configurations used to generate the profile.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.DataProfileConfigSnapshot config_snapshot = 7;</code>
     * @param \Google\Cloud\Dlp\V2\DataProfileConfigSnapshot $var
     * @return $this
     */
    public function setConfigSnapshot($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\DataProfileConfigSnapshot::class);
        $this->config_snapshot = $var;

        return $this;
    }

    /**
     * The time when this table was last modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastModifiedTime()
    {
        return $this->last_modified_time;
    }

    public function hasLastModifiedTime()
    {
        return isset($this->last_modified_time);
    }

    public function clearLastModifiedTime()
    {
        unset($this->last_modified_time);
    }

    /**
     * The time when this table was last modified
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_modified_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastModifiedTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_modified_time = $var;

        return $this;
    }

    /**
     * Optional. The time when this table expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpirationTime()
    {
        return $this->expiration_time;
    }

    public function hasExpirationTime()
    {
        return isset($this->expiration_time);
    }

    public function clearExpirationTime()
    {
        unset($this->expiration_time);
    }

    /**
     * Optional. The time when this table expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration_time = $var;

        return $this;
    }

    /**
     * The number of columns profiled in the table.
     *
     * Generated from protobuf field <code>int64 scanned_column_count = 10;</code>
     * @return int|string
     */
    public function getScannedColumnCount()
    {
        return $this->scanned_column_count;
    }

    /**
     * The number of columns profiled in the table.
     *
     * Generated from protobuf field <code>int64 scanned_column_count = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setScannedColumnCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->scanned_column_count = $var;

        return $this;
    }

    /**
     * The number of columns skipped in the table because of an error.
     *
     * Generated from protobuf field <code>int64 failed_column_count = 11;</code>
     * @return int|string
     */
    public function getFailedColumnCount()
    {
        return $this->failed_column_count;
    }

    /**
     * The number of columns skipped in the table because of an error.
     *
     * Generated from protobuf field <code>int64 failed_column_count = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFailedColumnCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->failed_column_count = $var;

        return $this;
    }

    /**
     * The size of the table when the profile was generated.
     *
     * Generated from protobuf field <code>int64 table_size_bytes = 12;</code>
     * @return int|string
     */
    public function getTableSizeBytes()
    {
        return $this->table_size_bytes;
    }

    /**
     * The size of the table when the profile was generated.
     *
     * Generated from protobuf field <code>int64 table_size_bytes = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTableSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->table_size_bytes = $var;

        return $this;
    }

    /**
     * Number of rows in the table when the profile was generated.
     * This will not be populated for BigLake tables.
     *
     * Generated from protobuf field <code>int64 row_count = 13;</code>
     * @return int|string
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * Number of rows in the table when the profile was generated.
     * This will not be populated for BigLake tables.
     *
     * Generated from protobuf field <code>int64 row_count = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_count = $var;

        return $this;
    }

    /**
     * How the table is encrypted.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.EncryptionStatus encryption_status = 14;</code>
     * @return int
     */
    public function getEncryptionStatus()
    {
        return $this->encryption_status;
    }

    /**
     * How the table is encrypted.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.EncryptionStatus encryption_status = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setEncryptionStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\EncryptionStatus::class);
        $this->encryption_status = $var;

        return $this;
    }

    /**
     * How broadly a resource has been shared.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ResourceVisibility resource_visibility = 15;</code>
     * @return int
     */
    public function getResourceVisibility()
    {
        return $this->resource_visibility;
    }

    /**
     * How broadly a resource has been shared.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ResourceVisibility resource_visibility = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setResourceVisibility($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\ResourceVisibility::class);
        $this->resource_visibility = $var;

        return $this;
    }

    /**
     * The last time the profile was generated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp profile_last_generated = 16;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getProfileLastGenerated()
    {
        return $this->profile_last_generated;
    }

    public function hasProfileLastGenerated()
    {
        return isset($this->profile_last_generated);
    }

    public function clearProfileLastGenerated()
    {
        unset($this->profile_last_generated);
    }

    /**
     * The last time the profile was generated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp profile_last_generated = 16;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setProfileLastGenerated($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->profile_last_generated = $var;

        return $this;
    }

    /**
     * The labels applied to the resource at the time the profile was generated.
     *
     * Generated from protobuf field <code>map<string, string> resource_labels = 17;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getResourceLabels()
    {
        return $this->resource_labels;
    }

    /**
     * The labels applied to the resource at the time the profile was generated.
     *
     * Generated from protobuf field <code>map<string, string> resource_labels = 17;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setResourceLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_labels = $arr;

        return $this;
    }

    /**
     * The time at which the table was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 23;</code>
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
     * The time at which the table was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 23;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

}

