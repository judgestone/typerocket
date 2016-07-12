<?php
/*
|--------------------------------------------------------------------------
| Enabled Plugins
|--------------------------------------------------------------------------
|
| The folder names of the TypeRocket plugins you wish to enable separated
| by pipes: seo|dev|theme-options|builder
|
| Plugins are located at: https://github.com/TypeRocket/plugins
|
*/
define('TR_PLUGINS', '');

/*
|--------------------------------------------------------------------------
| Debug
|--------------------------------------------------------------------------
|
| Turn on Debugging for TypeRocket. Set to false to disable.
|
*/
define('TR_DEBUG', true);

/*
|--------------------------------------------------------------------------
| TypeRocket Assets
|--------------------------------------------------------------------------
|
| The folder where you wish to locate typerocket core assets.
|
*/
define('TR_ASSETS_URL', get_stylesheet_directory_uri() . '/typerocket/assets');

/*
|--------------------------------------------------------------------------
| Components Folder
|--------------------------------------------------------------------------
|
| The folder where you wish to locate your matrix and builder groups. This
| should be set to a location outside of TypeRocket. For example, directly
| in your current theme.
|
*/
define('TR_COMPONENTS_FOLDER_PATH', __DIR__ . '/../components');
define('TR_COMPONENTS_THUMBNAIL_FOLDER_PATH', TR_COMPONENTS_FOLDER_PATH );
define('TR_COMPONENTS_THUMBNAIL_URL', get_stylesheet_directory_uri() . '/components');

/*
|--------------------------------------------------------------------------
| Application Folder
|--------------------------------------------------------------------------
|
| The folder where you wish to locate your application code. This could 
| be set to a location outside of TypeRocket. For example, directly in 
| your current theme.
|
*/
define('TR_APP_NAMESPACE', 'App');
define('TR_APP_FOLDER_PATH', __DIR__ . '/../app');

/*
|--------------------------------------------------------------------------
| Plugins Folder
|--------------------------------------------------------------------------
|
| The folder where you wish to locate your plugins. This should be set
| to a location outside of TypeRocket. For example, directly in your
| current theme.
|
*/
define('TR_PLUGINS_FOLDER_PATH', __DIR__ . '/../plugins');
define('TR_PLUGINS_URL', get_stylesheet_directory_uri() . '/plugins');

/*
|--------------------------------------------------------------------------
| Seed
|--------------------------------------------------------------------------
|
| A 'random' string of text to help with security from time to time.
|
*/
define('TR_SEED', NONCE_KEY);

/*
|--------------------------------------------------------------------------
| Icons
|--------------------------------------------------------------------------
|
| Set the class responsible for icons
|
*/
define('TR_ICONS', "\\TypeRocket\\Icons");