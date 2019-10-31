<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'slim/slim';
    public const VERSIONS          = array (
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'illuminate/container' => 'v5.7.28@8c3a75e464d59509ae88db152cab61a3f115b9ec',
  'illuminate/contracts' => 'v5.7.28@b63324d349a8ae2156fbc2697c1ccc85879b3803',
  'illuminate/database' => '5.7.19@8df1a4ca7f66e9ae9462978aa6de77e1c4cc839f',
  'illuminate/support' => 'v5.7.28@3e2810145f37eb89fa11759781ee88ee1c1a5262',
  'kylekatarnls/update-helper' => '1.2.0@5786fa188e0361b9adf9e8199d7280d1b2db165e',
  'nesbot/carbon' => '1.39.1@4be0c005164249208ce1b5ca633cd57bdd42ff33',
  'nikic/fast-route' => 'v1.3.0@181d480e08d9476e61381e04a71b34dc0432e812',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/http-server-middleware' => '1.0.1@2296f45510945530b9dceb8bcedb5cb84d40c5f5',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'symfony/polyfill-mbstring' => 'v1.12.0@b42a2f66e8f1b15ccf25652c3424265923eb4f17',
  'symfony/translation' => 'v4.3.5@fe6193b066c457c144333c06aaa869a2d42a167f',
  'symfony/translation-contracts' => 'v1.1.7@364518c132c95642e530d9b2d217acbc2ccac3e6',
  'composer/xdebug-handler' => '1.3.3@46867cbf8ca9fb8d60c506895449eb799db1184f',
  'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a',
  'fig/http-message-util' => '1.1.3@35b19404371b31b3a43823c755398c48c9966db4',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'myclabs/deep-copy' => '1.9.3@007c053ae6f31bba39dfa19a7726f56e9763bbea',
  'nette/bootstrap' => 'v3.0.1@b45a1e33b6a44beb307756522396551e5a9ff249',
  'nette/di' => 'v3.0.1@4aff517a1c6bb5c36fa09733d4cea089f529de6d',
  'nette/finder' => 'v2.5.1@14164e1ddd69e9c5f627ff82a10874b3f5bba5fe',
  'nette/neon' => 'v3.0.0@cbff32059cbdd8720deccf9e9eace6ee516f02eb',
  'nette/php-generator' => 'v3.2.3@aea6e81437bb238e5f0e5b5ce06337433908e63b',
  'nette/robot-loader' => 'v3.2.0@0712a0e39ae7956d6a94c0ab6ad41aa842544b5c',
  'nette/schema' => 'v1.0.0@6241d8d4da39e825dd6cb5bfbe4242912f4d7e4d',
  'nette/utils' => 'v3.0.2@c133e18c922dcf3ad07673077d92d92cef25a148',
  'nikic/php-parser' => 'v4.2.4@97e59c7a16464196a8b9c77c47df68e4a39a45c4',
  'nyholm/psr7' => '1.2.1@55ff6b76573f5b242554c9775792bd59fb52e11c',
  'nyholm/psr7-server' => '0.3.0@1b71a848fcb066fb805b7a9ab3f41ff65bffcde8',
  'ocramius/package-versions' => '1.4.0@a4d4b60d0e60da2487bd21a2c6ac089f85570dbb',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.2@b83ff7cfcfee7827e1e78b637a5904fe6a96698e',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpspec/prophecy' => '1.9.0@f6811d96d97bdf400077a0cc100ae56aa32b9203',
  'phpstan/phpdoc-parser' => '0.3.5@8c4ef2aefd9788238897b678a985e1d5c8df6db4',
  'phpstan/phpstan' => '0.11.19@63cc502f6957b7f74efbac444b4cf219dcadffd7',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '7.5.16@316afa6888d2562e04aeb67ea7f2017a0eb41661',
  'psr/log' => '1.1.1@bf73deb2b3b896a9d9c75f3f0d88185d2faa27e2',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.2@f2a2c8e1c97c11ace607a7a667d73d47c19fe404',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'slim/http' => '0.7@473a81173018e19e18c78e31d221e51973a6d199',
  'slim/psr7' => '0.3.0@bd3737bc6fe94d4ba30febe3aa7bc25d3f07f6ca',
  'squizlabs/php_codesniffer' => '3.5.1@82cd0f854ceca17731d6d019c7098e3755c45060',
  'symfony/console' => 'v4.3.5@929ddf360d401b958f611d44e726094ab46a7369',
  'symfony/finder' => 'v4.3.5@5e575faa95548d0586f6bedaeabec259714e44d1',
  'symfony/polyfill-ctype' => 'v1.12.0@550ebaac289296ce228a706d0867afc34687e3f4',
  'symfony/polyfill-php73' => 'v1.12.0@2ceb49eaccb9352bff54d22570276bb75ba4a188',
  'symfony/service-contracts' => 'v1.1.7@ffcde9615dc5bb4825b9f6aed07716f1f57faae0',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.5.0@88e6d84706d09a236046d686bbea96f07b3a34f4',
  'zendframework/zend-diactoros' => '2.1.5@6dcf9e760a6b476f3e9d80abbc9ce9c4aa921f9c',
  'slim/slim' => 'dev-master@77a531eb81f70871bc1403eddaf8465e3e52281b',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}
