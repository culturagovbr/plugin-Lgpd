<?php

namespace Lgpd;

use MapasCulturais\App;

class Plugin extends \MapasCulturais\Plugin
{
    public function __construct($config = [])
    {
        $config += [
            'termsOfUsage' => [
                'title' => 'Termos e Condições de Uso',
                'text' => file_get_contents(__DIR__ . '/config/lgpd-terms/terms-of-usage.html'),
                'buttonText' => 'Aceito os termos e condições de uso'
            ],
            'privacyPolicy' => [
                'title' => 'Política de Privacidade',
                'text' => file_get_contents(__DIR__ . '/config/lgpd-terms/privacy-policy.html'),
                'buttonText' => 'Aceito a política de privacidade'
            ],
            'termsUse' => [
                'title' => 'Autorização de Uso de Imagem',
                'text' => file_get_contents(__DIR__ . '/config/lgpd-terms/images-use.html'),
                'buttonText' => 'Autorizo o uso de imagem'
            ],
        ];

        parent::__construct($config);

        App::i()->config['module.LGPD'] = $config;
    }

    public function _init() {}

    public function register() {}
}
