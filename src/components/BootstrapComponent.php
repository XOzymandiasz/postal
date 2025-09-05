<?php
namespace XOzymandias\Yii2Postal\components;

use RuntimeException;
use XOzymandias\Yii2Postal\Module;
use yii\base\Component;

class BootstrapComponent extends Component
{
    private const NAMESPACES = [
        'yii\\bootstrap5',
        'yii\\bootstrap4',
        'yii\\bootstrap',
    ];

    public static function resolveClassName(string $name): string
    {
        foreach (self::NAMESPACES as $namespace) {
            $className = $namespace . '\\' . $name;
            if (class_exists($className)) {
                return $className;
            }
        }
        throw new RuntimeException(Module::t('postal',"Class not found for Bootstrap: {$name}"));
    }

    public static function widget(string $name, array $config = []): string
    {
        $class = self::resolveClassName($name);

        return $class::widget($config);
    }

    public static function bootstrapVersion(): int
    {
        if (class_exists('yii\\bootstrap5\\BootstrapAsset')) return 5;
        if (class_exists('yii\\bootstrap4\\BootstrapAsset')) return 4;
        if (class_exists('yii\\bootstrap\\BootstrapAsset'))  return 3;
        return 0;
    }

}