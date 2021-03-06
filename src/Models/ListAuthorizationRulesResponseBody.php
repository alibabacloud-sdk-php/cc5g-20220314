<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListAuthorizationRulesResponseBody\authorizationRules;
use AlibabaCloud\Tea\Model;

class ListAuthorizationRulesResponseBody extends Model
{
    /**
     * @description 数组，返回示例目录。
     *
     * @var authorizationRules[]
     */
    public $authorizationRules;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'authorizationRules' => 'AuthorizationRules',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRules) {
            $res['AuthorizationRules'] = [];
            if (null !== $this->authorizationRules && \is_array($this->authorizationRules)) {
                $n = 0;
                foreach ($this->authorizationRules as $item) {
                    $res['AuthorizationRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListAuthorizationRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRules'])) {
            if (!empty($map['AuthorizationRules'])) {
                $model->authorizationRules = [];
                $n                         = 0;
                foreach ($map['AuthorizationRules'] as $item) {
                    $model->authorizationRules[$n++] = null !== $item ? authorizationRules::fromMap($item) : $item;
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
