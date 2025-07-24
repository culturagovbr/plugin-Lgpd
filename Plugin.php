<?php

namespace Lgpd;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{
    protected static $instance;

    public function __construct($config = [])
    {
        $config += [
            'module.LGPD' => [
                'termsOfUsage' => [
                    'title' => 'Termos e Condições de Uso',
                    'text' => file_get_contents(__DIR__ . '/config/lgpd-terms/terms-of-usage.html'),
                    'buttonText' => 'Aceito os termos e condiçoes de uso'
                ],
                'privacyPolicy' => [
                    'title' =>  'Política de Privacidade',
                    'text' => file_get_contents(__DIR__ . '/config/lgpd-terms/privacy-policy.html'),
                    'buttonText' => 'Aceito a política de privacidade'
                ],
                'termsUse' => [
                    'title' =>  'Autorização de Uso de Imagem',
                    'text' => file_get_contents(__DIR__ . '/config/lgpd-terms/images-use.html'),
                    'buttonText' => 'Autorizo o uso de imagem'
                ],
            ]
        ];

        parent::__construct($config);

        // Aplica a configuração do plugin ao $app->config
        $app = App::i();
        if (isset($config['module.LGPD'])) {
            $app->config['module.LGPD'] = $config['module.LGPD'];
        }

        self::$instance = $this;
    }

    public function _init() {}

    public function register() {}
}
