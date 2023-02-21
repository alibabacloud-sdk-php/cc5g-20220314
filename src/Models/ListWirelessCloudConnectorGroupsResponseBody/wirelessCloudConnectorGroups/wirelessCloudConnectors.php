<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListWirelessCloudConnectorGroupsResponseBody\wirelessCloudConnectorGroups;

use AlibabaCloud\Tea\Model;

class wirelessCloudConnectors extends Model
{
    /**
     * @example Business
     *
     * @var string
     */
    public $businessType;

    /**
     * @example 115
     *
     * @var string
     */
    public $cardCount;

    /**
     * @example 2022-04-28 17:40:53
     *
     * @var string
     */
    public $createTime;

    /**
     * @example dp-xxxx
     *
     * @var string
     */
    public $dataPackageId;

    /**
     * @example 200
     *
     * @var string
     */
    public $dataPackageType;

    /**
     * @example cc5g-test
     *
     * @var string
     */
    public $description;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @example CC5G
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $useCase;

    /**
     * @example cc5g-62eb02o7lz1w5aurl3
     *
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'businessType'             => 'BusinessType',
        'cardCount'                => 'CardCount',
        'createTime'               => 'CreateTime',
        'dataPackageId'            => 'DataPackageId',
        'dataPackageType'          => 'DataPackageType',
        'description'              => 'Description',
        'name'                     => 'Name',
        'regionId'                 => 'RegionId',
        'serviceType'              => 'ServiceType',
        'status'                   => 'Status',
        'useCase'                  => 'UseCase',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->cardCount) {
            $res['CardCount'] = $this->cardCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataPackageId) {
            $res['DataPackageId'] = $this->dataPackageId;
        }
        if (null !== $this->dataPackageType) {
            $res['DataPackageType'] = $this->dataPackageType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->useCase) {
            $res['UseCase'] = $this->useCase;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return wirelessCloudConnectors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CardCount'])) {
            $model->cardCount = $map['CardCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataPackageId'])) {
            $model->dataPackageId = $map['DataPackageId'];
        }
        if (isset($map['DataPackageType'])) {
            $model->dataPackageType = $map['DataPackageType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UseCase'])) {
            $model->useCase = $map['UseCase'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
