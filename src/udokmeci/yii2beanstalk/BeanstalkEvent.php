<?php

namespace udokmeci\yii2beanstalk;

use yii\base\Event;

class BeanstalkEvent extends Event
{
    public $job;
}
