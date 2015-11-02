<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "disable_beuser"
 *
 * Auto generated by Extension Builder 2015-09-02
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Disable BeUser Task',
    'description' => 'Scheduler task to disable inactive User',
    'category' => 'plugin',
    'author' => 'Sven Juergens',
    'author_email' => 't3@blue-side.de',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.1.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-7.6.99',
            'php' => '5.5.0-5.999.999',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
