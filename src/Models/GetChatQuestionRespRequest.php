<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class GetChatQuestionRespRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1869307330227937280
     *
     * @var string
     */
    public $batchId;

    /**
     * @description This parameter is required.
     *
     * @example 237645726354
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'batchId'   => 'batchId',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['batchId'] = $this->batchId;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChatQuestionRespRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['batchId'])) {
            $model->batchId = $map['batchId'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}