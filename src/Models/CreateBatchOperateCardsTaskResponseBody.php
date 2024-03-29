<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class CreateBatchOperateCardsTaskResponseBody extends Model
{
    /**
     * @example boct-xxxx
     *
     * @var string
     */
    public $batchOperateCardsTaskId;

    /**
     * @example https://examplebucket.oss-eu-central-1.aliyuncs.com/***
     *
     * @var string
     */
    public $operateResultOssFilePath;

    /**
     * @example 1651FBB6-4FBF-49FF-A9F5-DF5D696C7EC6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'batchOperateCardsTaskId'  => 'BatchOperateCardsTaskId',
        'operateResultOssFilePath' => 'OperateResultOssFilePath',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchOperateCardsTaskId) {
            $res['BatchOperateCardsTaskId'] = $this->batchOperateCardsTaskId;
        }
        if (null !== $this->operateResultOssFilePath) {
            $res['OperateResultOssFilePath'] = $this->operateResultOssFilePath;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBatchOperateCardsTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchOperateCardsTaskId'])) {
            $model->batchOperateCardsTaskId = $map['BatchOperateCardsTaskId'];
        }
        if (isset($map['OperateResultOssFilePath'])) {
            $model->operateResultOssFilePath = $map['OperateResultOssFilePath'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
