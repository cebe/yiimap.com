<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LeafletAsset extends AssetBundle
{
	public $sourcePath = '@app/assets/leaflet';
	public $css = array(
		'leaflet.css',
//		'leaflet.ie.css', // TODO IE style has to be wrapped in  <!--[if lte IE 8]>  <![endif]-->
	);
	public $js = array(
	);
	public $depends = array(
		'app\assets\AppAsset',
	);

	public function init()
	{
		if (YII_DEBUG) {
			$this->js[] = 'leaflet-src.js';
		} else {
			$this->js[] = 'leaflet.js';
		}
		// TODO this is a workaround for https://github.com/yiisoft/yii2/issues/721, remove, when issue is fixed
		$this->sourcePath = \Yii::getAlias($this->sourcePath);
	}
}
