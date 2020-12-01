<?php
use Ubiquity\controllers\Router;
use Ubiquity\security\acl\AclManager;
use Ubiquity\security\acl\persistence\AclCacheProvider;
use Ubiquity\translation\TranslatorManager;

\Ubiquity\cache\CacheManager::startProd ( $config );
\Ubiquity\orm\DAO::start ();
Router::start ();
Router::addRoute ( "_default", "controllers\\IndexController" );
# \Ubiquity\assets\AssetsManager::start($config);
TranslatorManager::start ();
\Ubiquity\security\data\EncryptionManager::start ( $config );
\Ubiquity\security\acl\AclManager::start ();
AclManager::initFromProviders ( [ 
		new AclCacheProvider ()
] );