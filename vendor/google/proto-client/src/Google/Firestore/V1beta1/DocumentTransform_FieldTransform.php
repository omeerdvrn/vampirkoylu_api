<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/write.proto

namespace Google\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transformation of a field of the document.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.DocumentTransform.FieldTransform</code>
 */
class DocumentTransform_FieldTransform extends \Google\Protobuf\Internal\Message
{
    /**
     * The path of the field. See [Document.fields][google.firestore.v1beta1.Document.fields] for the field path syntax
     * reference.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     */
    private $field_path = '';
    protected $transform_type;

    public function __construct() {
        \GPBMetadata\Google\Firestore\V1Beta1\Write::initOnce();
        parent::__construct();
    }

    /**
     * The path of the field. See [Document.fields][google.firestore.v1beta1.Document.fields] for the field path syntax
     * reference.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     * @return string
     */
    public function getFieldPath()
    {
        return $this->field_path;
    }

    /**
     * The path of the field. See [Document.fields][google.firestore.v1beta1.Document.fields] for the field path syntax
     * reference.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_path = $var;

        return $this;
    }

    /**
     * Sets the field to the given server value.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentTransform.FieldTransform.ServerValue set_to_server_value = 2;</code>
     * @return int
     */
    public function getSetToServerValue()
    {
        return $this->readOneof(2);
    }

    /**
     * Sets the field to the given server value.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.DocumentTransform.FieldTransform.ServerValue set_to_server_value = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSetToServerValue($var)
    {
        GPBUtil::checkEnum($var, \Google\Firestore\V1beta1\DocumentTransform_FieldTransform_ServerValue::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTransformType()
    {
        return $this->whichOneof("transform_type");
    }

}
