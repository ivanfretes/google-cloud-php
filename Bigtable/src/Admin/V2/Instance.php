<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of Bigtable [Tables][google.bigtable.admin.v2.Table] and
 * the resources that serve them.
 * All tables in an instance are served from all
 * [Clusters][google.bigtable.admin.v2.Cluster] in the instance.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Instance</code>
 */
class Instance extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the instance. Values are of the form
     * `projects/{project}/instances/[a-z][a-z0-9\\-]+[a-z0-9]`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. The descriptive name for this instance as it appears in UIs.
     * Can be changed at any time, but should be kept globally unique
     * to avoid confusion.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * (`OutputOnly`)
     * The current state of the instance.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance.State state = 3;</code>
     */
    private $state = 0;
    /**
     * The type of the instance. Defaults to `PRODUCTION`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance.Type type = 4;</code>
     */
    private $type = 0;
    /**
     * Labels are a flexible and lightweight mechanism for organizing cloud
     * resources into groups that reflect a customer's organizational needs and
     * deployment strategies. They can be used to filter resources and aggregate
     * metrics.
     * * Label keys must be between 1 and 63 characters long and must conform to
     *   the regular expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`.
     * * Label values must be between 0 and 63 characters long and must conform to
     *   the regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`.
     * * No more than 64 labels can be associated with a given resource.
     * * Keys and values must both be under 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique name of the instance. Values are of the form
     *           `projects/{project}/instances/[a-z][a-z0-9\\-]+[a-z0-9]`.
     *     @type string $display_name
     *           Required. The descriptive name for this instance as it appears in UIs.
     *           Can be changed at any time, but should be kept globally unique
     *           to avoid confusion.
     *     @type int $state
     *           (`OutputOnly`)
     *           The current state of the instance.
     *     @type int $type
     *           The type of the instance. Defaults to `PRODUCTION`.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels are a flexible and lightweight mechanism for organizing cloud
     *           resources into groups that reflect a customer's organizational needs and
     *           deployment strategies. They can be used to filter resources and aggregate
     *           metrics.
     *           * Label keys must be between 1 and 63 characters long and must conform to
     *             the regular expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`.
     *           * Label values must be between 0 and 63 characters long and must conform to
     *             the regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`.
     *           * No more than 64 labels can be associated with a given resource.
     *           * Keys and values must both be under 128 bytes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the instance. Values are of the form
     * `projects/{project}/instances/[a-z][a-z0-9\\-]+[a-z0-9]`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of the instance. Values are of the form
     * `projects/{project}/instances/[a-z][a-z0-9\\-]+[a-z0-9]`.
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
     * Required. The descriptive name for this instance as it appears in UIs.
     * Can be changed at any time, but should be kept globally unique
     * to avoid confusion.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The descriptive name for this instance as it appears in UIs.
     * Can be changed at any time, but should be kept globally unique
     * to avoid confusion.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * (`OutputOnly`)
     * The current state of the instance.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance.State state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * (`OutputOnly`)
     * The current state of the instance.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance.State state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\Instance_State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The type of the instance. Defaults to `PRODUCTION`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance.Type type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the instance. Defaults to `PRODUCTION`.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance.Type type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\Instance_Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Labels are a flexible and lightweight mechanism for organizing cloud
     * resources into groups that reflect a customer's organizational needs and
     * deployment strategies. They can be used to filter resources and aggregate
     * metrics.
     * * Label keys must be between 1 and 63 characters long and must conform to
     *   the regular expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`.
     * * Label values must be between 0 and 63 characters long and must conform to
     *   the regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`.
     * * No more than 64 labels can be associated with a given resource.
     * * Keys and values must both be under 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels are a flexible and lightweight mechanism for organizing cloud
     * resources into groups that reflect a customer's organizational needs and
     * deployment strategies. They can be used to filter resources and aggregate
     * metrics.
     * * Label keys must be between 1 and 63 characters long and must conform to
     *   the regular expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`.
     * * Label values must be between 0 and 63 characters long and must conform to
     *   the regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`.
     * * No more than 64 labels can be associated with a given resource.
     * * Keys and values must both be under 128 bytes.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

