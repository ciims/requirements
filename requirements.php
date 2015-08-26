<?php
/**
 * These are the Yii core requirements for the [[YiiRequirementChecker]] instance.
 * These requirements are mandatory for any Yii application.
 */
/* @var $this YiiRequirementChecker */
return array(
	array(
        'name' => 'PHP version',
        'mandatory' => true,
        'condition' => version_compare(PHP_VERSION, '5.1.0', '>='),
        'memo' => 'PHP 5.1.0 or higher is required.',
        'by' => 'Yii Framework 1'
    ),
    array(
        'name' => 'PHP version',
        'mandatory' => true,
        'condition' => version_compare(PHP_VERSION, '5.5.0', '>='),
        'memo' => 'PHP 5.5.0 or higher is required.',
		'by' => 'CiiMS'
    ),
    array(
        'name' => 'Reflection extension',
        'mandatory' => true,
        'condition' => class_exists('Reflection', false),
        'by' => 'Yii Framework 1'
    ),
    array(
        'name' => 'PCRE extension',
        'mandatory' => true,
        'condition' => extension_loaded('pcre'),
        'by' => 'Yii Framework 1'
    ),
    array(
        'name' => 'SPL extension',
        'mandatory' => true,
        'condition' => extension_loaded('SPL'),
        'by' => 'Yii Framework 1'
    ),
    array(
        'name' => 'Ctype extension',
        'mandatory' => true,
        'condition' => extension_loaded('ctype'),
        'by' => 'Yii Framework 1'
    ),
    array(
        'name' => 'MBString extension',
        'mandatory' => true,
        'condition' => extension_loaded('mbstring'),
        'memo' => 'Required for multibyte encoding string processing.',
        'by' => 'Yii Framework 1'
    ),
    array(
        'name' => 'OpenSSL extension',
        'mandatory' => false,
        'condition' => extension_loaded('openssl'),
        'memo' => 'Required by encrypt and decrypt methods.',
        'by' => 'Yii Framework 1'
    ),
    array(
        'name' => 'PDO Extension',
        'mandatory' => true,
        'condition' => extension_loaded('pdo'),
        'by' => 'Yii Framework 1'
    ),
    array(
        'name' => 'MySQL PDO Extension',
        'mandatory' => true,
        'condition' => extension_loaded('pdo_mysql'),
        'by' => 'Yii Framework 1'
    ),
    array(
        'name' => 'Zend OpCache',
        'mandatory' => false,
        'condition' => extension_loaded('Zend OPCache'),
        'memo' => 'Recommended for performance',
		'by' => 'CiiMS'
    ),
    array(
        'name' => 'PHP Redis',
        'mandatory' => false,
        'condition' => extension_loaded('redis'),
        'memo' => 'Recommended for performance',
		'by' => 'CiiMS'
    ),
    array(
        'name' => 'Fileinfo extension',
        'mandatory' => false,
        'condition' => extension_loaded('fileinfo'),
        'memo' => 'Required for files upload to detect correct file mime-types.',
        'by' => 'Yii Framework 1'
    ),
    array(
        'name' => 'DOM extension',
        'mandatory' => false,
        'condition' => extension_loaded('dom'),
        'memo' => 'Required for REST API to send XML responses via <code>yii\web\XmlResponseFormatter</code>.',
        'by' => 'Yii Framework 1'
    ),
);
