# Liskov Substitution Principle

Princípio da substituição de Liskov — Uma classe derivada deve ser substituível por sua classe base.

## Sobre o projeto

Neste projeto foi feito um caculador de polígonos. <br>
Para seguir as boas práticas do LSP, foi criada uma classe Polygon que recebe como para a forma da qual estou lidando. <br>
A partir disso, a classe Square, por exemplo, terá sua própria regra de negócio, não sendo necessário a extensão da classe Rectangle, já que um quadrado é um rentângulo.

Com esse projeto, foi possível perceber que o LSP contribui para o OCP.
