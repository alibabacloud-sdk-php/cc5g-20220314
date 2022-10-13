<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\GetWirelessCloudConnectorResponseBody\netLinks;
use AlibabaCloud\Tea\Model;

class GetWirelessCloudConnectorResponseBody extends Model
{
    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $cardCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataPackageId;

    /**
     * @var string
     */
    public $dataPackageType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $features;

    /**
     * @var string
     */
    public $name;

    /**
     * @var netLinks[]
     */
    public $netLinks;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $useCase;

    /**
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
        'features'                 => 'Features',
        'name'                     => 'Name',
        'netLinks'                 => 'NetLinks',
        'regionId'                 => 'RegionId',
        'requestId'                => 'RequestId',
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
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netLinks) {
            $res['NetLinks'] = [];
            if (null !== $this->netLinks && \is_array($this->netLinks)) {
                $n = 0;
                foreach ($this->netLinks as $item) {
                    $res['NetLinks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetWirelessCloudConnectorResponseBody
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
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = $map['Features'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetLinks'])) {
            if (!empty($map['NetLinks'])) {
                $model->netLinks = [];
                $n               = 0;
                foreach ($map['NetLinks'] as $item) {
                    $model->netLinks[$n++] = null !== $item ? netLinks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
