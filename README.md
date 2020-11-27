# LGPD

Um componente para PHP que dispõe de classes que geram mensagens de aceitação da política de privacidade e consentimento do usuário.

## Usage

composer.json
```
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:vivaweb/lgpd.git"
        }
    ],
```

Para devs:

run ```composer require vivaweb/lgpd```
for update use ```composer update```

### Usando Deploy Keys em Homolog ou Production

- **LEMBRE-SE: NÃO É RECOMENDADO EM HIPÓTESE ALGUM USAR SEU TOKEN EM SERVIDORES DE HOMOLOGAÇÃO OU PRODUÇÃO.
- **USE SEU TOKEN APENAS EM SEU AMBIENTE DE DESENVOLVIMENTO**

O GitHub (e recentemente o Bitbucket também) possui uma limitação de apenas uma chave por repositório e por isso, o usuário da homolog ou da production que já
foi adicionado anteriormente para fazer o clone do projeto principal não vai funcionar no repositório vivaweb/lgpd.

run ```composer require vivaweb/lgpd -n```
for update use ```composer update -n```

Por isso, será necessário criar uma chave para o repositório e configurar o usuário de maneira até simples

```bash
ssh-keygen -f ~/.ssh/vivaweb_lgpd -t rsa -b 4096
```

Depois edite seu arquivo ```vim ~/.ssh/config``` adicionando as seguintes linhas:

```
Host lgpd.github.com.vwi.com.br
HostName github.com
IdentityFile ~/.ssh/vivaweb_lgpd
```

Logo em seguida, poderá executar o require ou o update novamente, lembrando que o parâmetro -n precisa ser utilizado para funcionar

### Confirm
- Este layout exibe um ícone (svg), uma mensagem e um botão de ciência.
- Ao clicar no botão, um cookie é salvo e uma vez salvo a mensagem não é exibida novamente.
- A mensagem fica fixada no rodapé e persite até que o usuário aceite.

![Layout Confirm Padrão](https://image.prntscr.com/image/UgglVqwDQRaDBVkE5Xo0uw.png)

## TODOS
- Enviar dado para uma API em relação ao aceite do usuário
- Parametrizar configurações de layout tornando o componente mais customizável
- Testes! Testes! Testes!
- Melhorar Estilos CSS deixando a mensagem mais bonita
