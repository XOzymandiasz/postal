<?php

namespace XOzymandias\Yii2Postal\modules\poczta_polska;

use Yii;
use yii\base\InvalidConfigException;

trait ModuleEnsureTrait
{

    protected const MODULE_ID = 'postal/poczta_polska';

    /**
     * @throws InvalidConfigException
     */
    public static function ensureModule(): Module
    {
        $module = Module::getInstance();
        if ($module === null) {
            $module = Yii::$app->getModule(static::MODULE_ID);
        }
        if ($module === null) {
            throw new InvalidConfigException('Module must be set.');
        }
        return $module;
    }

}
