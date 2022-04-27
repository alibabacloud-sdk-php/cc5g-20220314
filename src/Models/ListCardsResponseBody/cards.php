<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardsResponseBody;

use AlibabaCloud\Tea\Model;

class cards extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $APN;

    /**
     * @var string
     */
    public $activatedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ISP;

    /**
     * @description 资源一级ID
     *
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $imei;

    /**
     * @var string
     */
    public $imsi;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var bool
     */
    public $lock;

    /**
     * @var string
     */
    public $name;

    /**
     * @description 资源名称
     *
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $usageDataMonth;
    protected $_name = [
        'APN'            => 'APN',
        'activatedTime'  => 'ActivatedTime',
        'description'    => 'Description',
        'ISP'            => 'ISP',
        'iccid'          => 'Iccid',
        'imei'           => 'Imei',
        'imsi'           => 'Imsi',
        'ipAddress'      => 'IpAddress',
        'lock'           => 'Lock',
        'name'           => 'Name',
        'netType'        => 'NetType',
        'orderId'        => 'OrderId',
        'spec'           => 'Spec',
        'status'         => 'Status',
        'usageDataMonth' => 'UsageDataMonth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->APN) {
            $res['APN'] = $this->APN;
        }
        if (null !== $this->activatedTime) {
            $res['ActivatedTime'] = $this->activatedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->imei) {
            $res['Imei'] = $this->imei;
        }
        if (null !== $this->imsi) {
            $res['Imsi'] = $this->imsi;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->lock) {
            $res['Lock'] = $this->lock;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->usageDataMonth) {
            $res['UsageDataMonth'] = $this->usageDataMonth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APN'])) {
            $model->APN = $map['APN'];
        }
        if (isset($map['ActivatedTime'])) {
            $model->activatedTime = $map['ActivatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['Imei'])) {
            $model->imei = $map['Imei'];
        }
        if (isset($map['Imsi'])) {
            $model->imsi = $map['Imsi'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Lock'])) {
            $model->lock = $map['Lock'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UsageDataMonth'])) {
            $model->usageDataMonth = $map['UsageDataMonth'];
        }

        return $model;
    }
}
