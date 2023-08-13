# Open-Closed Principle

Princípio Aberto-Fechado — Objetos ou entidades devem estar abertos para extensão, mas fechados para modificação, ou seja, quando novos comportamentos e recursos precisam ser adicionados no software, devemos estender e não alterar o código fonte original.

## Sobre o projeto

Neste projeto foi feito um leitor de arquivo. Se chama ETL pois se trata do processo de Extrair, Transformar e Carregar.<br>
Além do projeto respeitar o SRP, o projeto também respeita o OCP.

A classe Reader recebe em seu construtor o diretório e o nome do arquivo. <br>
De acordo com o arquivo, o método readFile instancia a classe específica para lidar com o arquivo enviado (Aqui entra o OCP) <br>
A classe Txt e Csv extendem a classe File, responsável por tratar os dados dos arquivos. <br>

Com isso, sempre que eu tiver um novo tipo de arquivo, basta eu criar uma classe para lidar com este arquivo.
