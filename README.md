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

run ```composer require vivaweb/lgpd -n```

for update use ```composer update -n```

**NOTE: add your deployment key into repository settings**

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
