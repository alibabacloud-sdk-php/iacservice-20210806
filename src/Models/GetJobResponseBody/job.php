<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponseBody;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetJobResponseBody\job\config;
use AlibabaCloud\SDK\IaCService\V20210806\Models\JobStatusDetailValue;
use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @var config
     */
    public $config;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $runtimeType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var JobStatusDetailValue[]
     */
    public $statusDetail;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'config'       => 'config',
        'createTime'   => 'createTime',
        'description'  => 'description',
        'jobId'        => 'jobId',
        'output'       => 'output',
        'parameters'   => 'parameters',
        'runtimeType'  => 'runtimeType',
        'status'       => 'status',
        'statusDetail' => 'statusDetail',
        'taskId'       => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->jobId) {
            $res['jobId'] = $this->jobId;
        }
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->runtimeType) {
            $res['runtimeType'] = $this->runtimeType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->statusDetail) {
            $res['statusDetail'] = [];
            if (null !== $this->statusDetail && \is_array($this->statusDetail)) {
                foreach ($this->statusDetail as $key => $val) {
                    $res['statusDetail'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = config::fromMap($map['config']);
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['jobId'])) {
            $model->jobId = $map['jobId'];
        }
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['runtimeType'])) {
            $model->runtimeType = $map['runtimeType'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['statusDetail'])) {
            $model->statusDetail = $map['statusDetail'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
