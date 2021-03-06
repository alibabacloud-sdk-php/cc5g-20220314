<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ListCardsRequest extends Model
{
    /**
     * @var string
     */
    public $apn;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string[]
     */
    public $iccids;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var bool
     */
    public $lock;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $netLinkId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string[]
     */
    public $statuses;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'apn'                      => 'Apn',
        'destinationType'          => 'DestinationType',
        'iccids'                   => 'Iccids',
        'ipAddress'                => 'IpAddress',
        'lock'                     => 'Lock',
        'maxResults'               => 'MaxResults',
        'netLinkId'                => 'NetLinkId',
        'nextToken'                => 'NextToken',
        'online'                   => 'Online',
        'statuses'                 => 'Statuses',
        'vpcId'                    => 'VpcId',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apn) {
            $res['Apn'] = $this->apn;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->iccids) {
            $res['Iccids'] = $this->iccids;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->lock) {
            $res['Lock'] = $this->lock;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->netLinkId) {
            $res['NetLinkId'] = $this->netLinkId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCardsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Apn'])) {
            $model->apn = $map['Apn'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['Iccids'])) {
            if (!empty($map['Iccids'])) {
                $model->iccids = $map['Iccids'];
            }
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Lock'])) {
            $model->lock = $map['Lock'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetLinkId'])) {
            $model->netLinkId = $map['NetLinkId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
