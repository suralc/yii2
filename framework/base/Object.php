<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\base;


/**
 * Class Object
 *
 * @since 2.0
 * @deprecated 2.1 The class was deprecated to ensure forward compatibility for php 7.x which might reserve `object` as
 *     a typehint
 */
class Object extends BaseObject
{
    /**
     *
     */
    public function __construct($config = [])
    {
		parent::__construct($config);
        trigger_error(sprintf('"%s" or one of its parents extend yii\\base\\Object. Use yii\\base\\BaseObject to ensure forward compatibility with php 7.x.',
            get_class($this)), E_USER_DEPRECATED);
    }
}