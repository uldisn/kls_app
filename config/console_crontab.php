<?php

/**
 * Phundament 3 Console Config File
 * Containes predefined yiic console commands for Phundament.
 * Define composer hooks by the following name schema: <vendor>/<packageName>-<action>

 */

// for testing purposes
$webappCommand = array(
    'yiic',
    'webapp',
    'create',
    realpath(dirname(__FILE__) . '/../../../'),
    'git',
    '--interactive=' . (getenv('PHUNDAMENT_TEST') ? '0' : '1')
);

// gets merged automatically if available
$localConsoleConfigFile = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'console-local.php';

// merge compnents and modules from main config
$mainConfig = require('main.php');

$consoleConfig = array(
    'aliases'    => array(
        'vendor' => $applicationDirectory . '/../../../vendor',
        'webroot' => $applicationDirectory . '/../../../www',
        //'gii-template-collection'              => 'vendor.phundament.gii-template-collection', // TODO
        'audittrail' => 'vendor.dbrisinajumi.audittrail',
    ),
    'basePath'   => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name'       => 'KLS Crontab aplition',
    'components' => CMap::mergeArray(
        $mainConfig['components'],
        array()
    ),
    'modules'    => $mainConfig['modules'],
    'aliases'    => $mainConfig['aliases'],
    'import'    => $mainConfig['import'],
    'commandMap' => array(
        // dev command
        'database'      => array(
            'class' => 'vendor.schmunk42.database-command.EDatabaseCommand',
        ),
        'ReadTerminalPop3' => array(
            'class' => 'vendor.dbrkls.edifactdata.commands.ReadTerminalPop3Command',
        ),
    ),
    'params'     => 
    CMap::mergeArray(
            $mainConfig['params'],
            array())
);

// return merged config, from highest to lowest precedence: console-local, console
if (is_file($localConsoleConfigFile)) {
    return CMap::mergeArray($consoleConfig, require($localConsoleConfigFile));
} else {
    return $consoleConfig;
}