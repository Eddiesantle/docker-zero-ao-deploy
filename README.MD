# Docker do Zero ao Deploy

## Diferença de containers vs máquinas virtuais (VMs)

A principal diferença entre containers Docker e máquinas virtuais (VMs). Ambos os métodos são utilizados para empacotar e executar aplicativos, mas o fazem de maneiras distintas.

<img src="./assets/containers_vs_virtualization.png">

#### Containers Docker:

- Leves: Os containers Docker são mais leves que as VMs, pois não emulam um sistema operacional completo. Em vez disso, eles compartilham o kernel do sistema operacional host e empacotam apenas os componentes específicos necessários para executar o aplicativo.
  Portáteis: A portabilidade é uma das principais vantagens dos containers Docker. Eles podem ser executados em qualquer ambiente que tenha o Docker Engine instalado, independentemente do sistema operacional subjacente.
- Isoláveis: Cada container Docker é executado em um ambiente isolado, o que significa que não interfere em outros containers ou no sistema operacional host. Isso torna os containers Docker ideais para ambientes multi-inquilino e para testar aplicativos em diferentes ambientes.
- Eficientes: Os containers Docker são mais eficientes que as VMs em termos de uso de recursos. Eles exigem menos CPU, memória e armazenamento, o que os torna ideais para ambientes com recursos limitados.

#### Máquinas Virtuais (VMs):

- Isolamento completo: As VMs fornecem um isolamento completo do sistema operacional, o que significa que cada VM tem seu próprio kernel, bibliotecas e aplicativos. Isso pode ser útil para executar aplicativos que exigem um ambiente específico ou para isolar aplicativos sensíveis.
- Flexibilidade: As VMs oferecem mais flexibilidade do que os containers Docker, pois podem ser configuradas com diferentes sistemas operacionais e softwares. Isso pode ser útil para executar aplicativos que não são compatíveis com o Docker ou para ambientes que exigem configurações específicas.
- Desempenho: As VMs geralmente têm melhor desempenho do que os containers Docker, pois possuem seus próprios recursos dedicados. Isso pode ser importante para aplicativos que exigem alto desempenho.

##### Qual tecnologia usar:

A melhor tecnologia para você dependerá de suas necessidades específicas. Se você precisa de uma solução leve, portátil e eficiente, os containers Docker são uma boa opção. Se você precisa de isolamento completo, flexibilidade ou melhor desempenho, as VMs podem ser uma opção melhor.

##### Foco na Imagem:

A imagem destaca os seguintes pontos importantes sobre o Docker:

- Os containers Docker são executados em um ambiente isolado, representado pelas caixas separadas na imagem.
- Os containers Docker compartilham o kernel do sistema operacional host, representado pela base comum na imagem.
- Os containers Docker são mais leves que as VMs, pois não emulam um sistema operacional completo.
- Os containers Docker são portáteis e podem ser executados em qualquer ambiente que tenha o Docker Engine instalado.

## OBJETIVO PRÁTICO

Implementar uma aplicação do workpress com mysql com docker

#### wordpress - php

Escolher versão da Imagem do wordpress
https://hub.docker.com/_/wordpress/tags

Executando container isolado possui seu próprio sistema de arquivos, sua própria rede e sua própria árvore de processos isolada, separada do host(isolado da minha maquina)

```
docker run [OPTIONS] IMAGE[:TAG|@DIGEST] [COMMAND] [ARG...]
```

Referência da imagem é o nome e a versão da imagem wordpress

```
docker run wordpress:php8.3-fpm-alpine
```

Mostrar contêineres em execução e parados (-a, --all)

```
docker ps -a
```

##### Container - efemero: Efêmero é um termo de origem grega (em que "ephémeros" significa "apenas por um dia") usado para designar uma situação que dura muito pouco tempo.

Parar contêiner docker

```
docker stop my_container
```

Mapeamento de portas
Para realizar o mapeamento de portas basta saber qual porta será mapeada no host e qual deve receber essa conexão dentro do container.

- -p 8080:80 mapeia a porta 80 do container para a porta 8080 do host

```
docker run -p "<host>:<container>"
```

Não foi possivel acessar a porta com a versão "php8.3-fpm-alpine", alteramos para a versão "6.5.4-php8.3-apache"

```
docker run -p 8080:80 wordpress:6.5.4-php8.3-apache
```

Possivel acessar conteiner http://localhost:8080/

<img src="assets/doker-run-wordpress.png">

Para informar os detalhes de conexão do banco de dados. Vamos rodar container do banco de dados em mysql para concluir a configuração do wordpress

#### Banco de dados - mysql
