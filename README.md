Plates
======

Plates é um sistema de templates nativo para PHP que é rápido, fácil de usar e fácil de estender. Ele é inspirado no excelente mecanismo de templates Twig e busca trazer a funcionalidade de linguagens de templates modernas para templates nativos do PHP. Plates foi projetado para desenvolvedores que preferem usar templates nativos do PHP em vez de linguagens de templates compiladas, como Twig ou Smarty.

### Destaques

- Templates PHP nativos, sem necessidade de aprender nova [sintaxe](https://platesphp.com/templates/syntax/)
- Plates é um sistema de templates, não uma linguagem de templates
- Plates incentiva o uso de funções PHP existentes
- Aumente a reutilização de código com [layouts](https://platesphp.com/templates/layouts/) e [herança](https://platesphp.com/templates/inheritance/)
- [Pastas](https://platesphp.com/engine/folders/) para agrupar templates em namespaces
- Compartilhamento de [dados](https://platesphp.com/templates/data/#preassigned-and-shared-data) entre templates
- Pré-atribuição de [dados](https://platesphp.com/templates/data/#preassigned-and-shared-data) a templates específicos
- Integrado [Escape](https://platesphp.com/templates/escaping/) helpers
- Fácil de estender usando [functions](https://platesphp.com/engine/functions/) e [extensions](https://platesphp.com/engine/extensions/)
- Independente de frameworks, funciona com qualquer projeto
- Design desacoplado facilita o teste de templates
- Compatível com Composer e PSR-2

## Instalação

Requer PHP 8.5 ou superior, dentro da série 8.x, e Composer.

Plates está disponível via Composer:

```
composer require market-media/plates
```

## Documentação

Para mais detalhes sobre como usar o Data Layer, veja a pasta de exemplo com detalhes no diretório do componente

## Testes

```bash
composer test
```

Execute o Composer com PHP 8.5. O comando de testes usa o mesmo interpretador,
habilita `E_ALL` e falha caso sejam reportados avisos, notices ou depreciações.

## Compatibilidade com PHP 8.5

A migração atualiza o requisito de PHP, as dependências de desenvolvimento e o
autoload dos testes para o namespace `MarketMedia\Plates`. A configuração XML do
PHPUnit também foi corrigida. O exemplo usa caminhos relativos ao próprio arquivo.

Na revisão de `src`, `tests` e `example`, não foram encontrados casts obsoletos
como `(integer)`, uso do operador de crases, métodos `__sleep()`/`__wakeup()` ou
chamadas às funções de extensões depreciadas no PHP 8.5. Os parâmetros tipados
que aceitam `null` já usam tipos explicitamente anuláveis. A biblioteca usa buffers
de saída sem callbacks e não faz rebinding de closures. As chamadas de
`array_key_exists()` na extensão URI são protegidas por verificações de entrada.

A suíte foi validada com PHP 8.5.4, incluindo regressões para escape de valores
nulos e limpeza de buffers aninhados após um `TypeError`. Essa validação cobre a
biblioteca e seus exemplos; templates e extensões de aplicações consumidoras
precisam ser validados no respectivo projeto.

Referências: [depreciações do PHP 8.5](https://www.php.net/manual/en/migration85.deprecated.php),
[incompatibilidades do PHP 8.5](https://www.php.net/manual/en/migration85.incompatible.php) e
[parâmetros anuláveis no PHP 8.4](https://www.php.net/manual/en/migration84.deprecated.php).

## License

The MIT License (MIT). Please see [License File](https://github.com/thephpleague/plates/blob/master/LICENSE) for more information.
