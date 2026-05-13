# Plugin LGPD

Plugin para implementação de termos customizados

## Descrição

Este plugin gerencia os termos de uso, política de privacidade e autorização de uso de imagem conforme exigido pela LGPD.

## Funcionalidades

- **Termos de Uso**: Exibe e gerencia aceitação dos termos e condições
- **Política de Privacidade**: Exibe e gerencia aceitação da política de privacidade
- **Autorização de Uso de Imagem**: Exibe e gerencia autorização para uso de imagens

## Estrutura de Arquivos

```
plugins/Lgpd/
├── Plugin.php                    # Classe principal do plugin
├── README.md                     # Este arquivo
└── config/
    └── lgpd-terms/
        ├── terms-of-usage.html   # Termos de uso
        ├── privacy-policy.html   # Política de privacidade
        └── images-use.html       # Autorização de uso de imagem
```

## Configuração

### 1. Ativação do Plugin

O plugin deve estar listado em `docker/common/config.d/plugins.php`:

```php
return [
    'plugins' => [
        // ...
        'Lgpd',
    ]
];
```

### 2. Configuração Padrão

O plugin carrega automaticamente os termos dos arquivos HTML em `config/lgpd-terms/`. A config é setada no constructor e disponibilizada em `$app->config['module.LGPD']`:

```php
$app->config['module.LGPD'] = [
    'termsOfUsage' => [
        'title'      => 'Termos e Condições de Uso',
        'text'       => '...',
        'buttonText' => 'Aceito os termos e condições de uso',
    ],
    'privacyPolicy' => [
        'title'      => 'Política de Privacidade',
        'text'       => '...',
        'buttonText' => 'Aceito a política de privacidade',
    ],
    'termsUse' => [
        'title'      => 'Autorização de Uso de Imagem',
        'text'       => '...',
        'buttonText' => 'Autorizo o uso de imagem',
    ],
];
```

### 3. Personalização dos Termos

Para personalizar os termos, edite os arquivos HTML em `config/lgpd-terms/`:

- `terms-of-usage.html` — Termos e condições de uso
- `privacy-policy.html` — Política de privacidade
- `images-use.html` — Autorização de uso de imagem
