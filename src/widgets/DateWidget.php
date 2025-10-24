<?php

namespace XOzymandias\Yii2Postal\widgets;

use kartik\date\DatePicker as BaseDateWidget;
use XOzymandias\Yii2Postal\Module;

class DateWidget extends BaseDateWidget {
	public function init(): void
	{
		$this->pluginOptions = array_merge([
			'autoclose' => true,
			'format' => 'yyyy-mm-dd',
			'todayHighlight' => true,
		], $this->pluginOptions ?? []);

		$this->options = array_merge([
			'placeholder' => Module::t('common', 'YYYY-MM-DD'),
		], $this->options ?? []);

		parent::init();
	}
}