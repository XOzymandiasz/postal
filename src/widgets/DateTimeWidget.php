<?php

namespace XOzymandias\Yii2Postal\widgets;

use kartik\datetime\DateTimePicker as BaseDateTimeWidget;
use XOzymandias\Yii2Postal\Module;

class DateTimeWidget extends BaseDateTimeWidget{
	public function init(): void
	{
		$this->pluginOptions = array_merge([
			'autoclose' => true,
			'format' => 'yyyy-mm-dd hh:ii:ss',
			'todayHighlight' => true,
		], $this->pluginOptions ?? []);

		$this->options = array_merge([
			'placeholder' => Module::t('common', 'YYYY-MM-DD HH:MM:SS'),
		], $this->options ?? []);

		parent::init();
	}
}