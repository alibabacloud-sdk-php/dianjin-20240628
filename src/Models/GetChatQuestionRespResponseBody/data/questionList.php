<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetChatQuestionRespResponseBody\data;

use AlibabaCloud\Tea\Model;

class questionList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 2024-11-17 10:05:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $reply;

    /**
     * @example 1732846760323001
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example PRODUCT_QA
     *
     * @var string
     */
    public $type;

    /**
     * @example 39847834568436
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'content'   => 'content',
        'gmtCreate' => 'gmtCreate',
        'reply'     => 'reply',
        'sessionId' => 'sessionId',
        'type'      => 'type',
        'userId'    => 'userId',
        'userName'  => 'userName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->reply) {
            $res['reply'] = $this->reply;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return questionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['reply'])) {
            $model->reply = $map['reply'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        return $model;
    }
}