<?php

/**
* MongoDB.
*/

$conf['cache_backends'][] = 'sites/all/modules/contrib/mongodb/mongodb_cache/mongodb_cache_plugin.php';
$conf['cache_class_cache'] = 'DrupalMongoDBCache';
$conf['cache_class_cache_bootstrap'] = 'DrupalMongoDBCache';
$conf['cache_default_class'] = 'DrupalMongoDBCache';

$conf['session_inc'] = 'sites/all/modules/contrib/mongodb/mongodb_session/mongodb_session.inc';
$conf['cache_session'] = 'DrupalMongoDBCache';

$conf['field_storage_default'] = 'mongodb_field_storage';

$conf['queue_default_class'] = 'MongoDBQueue';

$conf['mongodb_connections'] = array(
  'default' => array(
    'host' => '127.0.0.1',
    'db' => 'drupal',
    'connection_options' => array('replicaSet' => 'my_mongodb_0'),
  ),
);
