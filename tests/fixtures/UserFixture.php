<?php

namespace XOzymandias\Yii2Postal\tests\fixtures;

use XOzymandias\Yii2Postal\ModuleEnsureTrait;
use yii\test\ActiveFixture;

class UserFixture extends ActiveFixture
{
    use ModuleEnsureTrait;

    public function init(): void
    {
        if (empty($this->modelClass)) {
            $this->modelClass = static::ensureModule()->shipmentRelation->userClass;
        }
        parent::init();
    }

}
