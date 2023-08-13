# Dependency Inversion Principle

Princípio da Inversão de Dependência — Dependa de abstrações e não de implementações.

## Sobre o projeto

Neste projeto foi implementado um mensageiro que envia tanto SMS ou Email. <br>
Para atender a demanda, a classe Messenger depende de uma abstração IMessageToken, uma interface que possui a assinatura do método: send. <br>
As classes Email e SMS implementam essa interface e se preocupam somente em definir este método.<br>

Este projeto apesar de pequeno, respeita todos os princípios do SOLID.
