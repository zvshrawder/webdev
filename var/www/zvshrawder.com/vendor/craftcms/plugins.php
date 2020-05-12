<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'clubstudioltd/craft-asset-rev' => 
  array (
    'class' => 'club\\assetrev\\AssetRev',
    'basePath' => $vendorDir . '/clubstudioltd/craft-asset-rev/src',
    'handle' => 'assetrev',
    'aliases' => 
    array (
      '@club/assetrev' => $vendorDir . '/clubstudioltd/craft-asset-rev/src',
    ),
    'name' => 'Asset Rev',
    'version' => '6.0.2',
    'description' => 'A plugin to aid cache-busting in Craft 3',
    'developer' => 'Club Studio Ltd',
    'developerUrl' => 'https://clubstudio.co.uk',
    'documentationUrl' => 'https://github.com/clubstudioltd/craft-asset-rev',
    'changelogUrl' => 'https://github.com/clubstudioltd/craft-asset-rev/blob/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/clubstudioltd/craft-asset-rev/archive/v6.zip',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.6.1',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'ether/seo' => 
  array (
    'class' => 'ether\\seo\\Seo',
    'basePath' => $vendorDir . '/ether/seo/src',
    'handle' => 'seo',
    'aliases' => 
    array (
      '@ether/seo' => $vendorDir . '/ether/seo/src',
    ),
    'name' => 'SEO',
    'version' => '3.6.4',
    'description' => 'SEO utilities including a unique field type, sitemap, & redirect manager',
    'developer' => 'Ether Creative',
    'developerUrl' => 'https://ethercreative.co.uk',
    'documentationUrl' => 'https://github.com/ethercreative/seo/blob/v3/README.md',
  ),
  'xpertbot/craft-wheelform' => 
  array (
    'class' => 'wheelform\\Plugin',
    'basePath' => $vendorDir . '/xpertbot/craft-wheelform/src',
    'handle' => 'wheelform',
    'aliases' => 
    array (
      '@wheelform' => $vendorDir . '/xpertbot/craft-wheelform/src',
    ),
    'name' => 'Wheel Form',
    'version' => '2.4.2',
    'description' => 'Craft CMS 3 Form administrator with Database integration',
    'developer' => 'Wheel Interactive',
    'developerUrl' => 'https://wheelinteractive.com',
    'documentationUrl' => 'https://github.com/xpertbot/craft-wheelform/blob/master/README.md',
    'changelogUrl' => 'https://github.com/xpertbot/craft-wheelform/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'mailer' => 'Wheelform\\Mailer',
    ),
  ),
);
