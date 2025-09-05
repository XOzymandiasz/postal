<?php

namespace XOzymandias\Yii2Postal\widgets;

use Exception;
use XOzymandias\Yii2Postal\Module;
use yii\base\Widget;

class Nav extends Widget
{
    public array $items = [];
    public array $options = [];
    private string $navClass;

    public function init(): void
    {
        parent::init();

        if (class_exists('\yii\bootstrap5\Nav')) {
            $this->navClass = '\yii\bootstrap5\Nav';
        } elseif (class_exists('\yii\bootstrap4\Nav')) {
            $this->navClass = '\yii\bootstrap4\Nav';
        } elseif (class_exists('\yii\bootstrap\Nav')) {
            $this->navClass = '\yii\bootstrap\Nav';
        } else {
            throw new Exception(Module::t('postal',"There is no package Nav (bootstrap3/4/5)."));
        }
    }

    public function run()
    {
        return $this->navClass::widget([
            'items'   => $this->items,
            'options' => $this->options,
        ]);
    }
}