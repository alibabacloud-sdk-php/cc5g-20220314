<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListDiagnoseInfoForSingleCardResponseBody\diagnoseInfo;
use AlibabaCloud\Tea\Model;

class ListDiagnoseInfoForSingleCardResponseBody extends Model
{
    /**
     * @var diagnoseInfo[]
     */
    public $diagnoseInfo;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example E1E237B1-EED7-55D5-AE5F-671E642DB3B5
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 50
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'diagnoseInfo' => 'DiagnoseInfo',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnoseInfo) {
            $res['DiagnoseInfo'] = [];
            if (null !== $this->diagnoseInfo && \is_array($this->diagnoseInfo)) {
                $n = 0;
                foreach ($this->diagnoseInfo as $item) {
                    $res['DiagnoseInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDiagnoseInfoForSingleCardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnoseInfo'])) {
            if (!empty($map['DiagnoseInfo'])) {
                $model->diagnoseInfo = [];
                $n                   = 0;
                foreach ($map['DiagnoseInfo'] as $item) {
                    $model->diagnoseInfo[$n++] = null !== $item ? diagnoseInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
