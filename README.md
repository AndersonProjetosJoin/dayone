# Gerenciador de Contatos v 1.0 
By Anderson de Carvalho Fernandes



Este documento tem como objetivo testar habilidades, tempo de execução da tarefa, comprometimento, qualidade, criatividade de um desenvolvedor Full Stack (Back-end e Front-end) e evidenciar funcionalidade da aplicação desenvolvida em PHP.
Dentro do especificado no documento recebido como direcionamento do projeto a ser desenvolvido, veremos as bibliotecas, frameworks e requisição externa para validação exigida para o bom funcionamento desta aplicação.

Ferramentas Utilizadas localmente:

IDE: VS (Visual Studio)
Banco de Dados: MySQL (estrutura do banco de dados desenhada no Workbench)
Servidor Local para rodar o PHP: Usando o Wampserver (pode ser usado também o Lamp, o Xampp).
Bootstrap 5.3.0 alpha.
Photoshop para modelar imagens usadas de logo na aplicação.
Docker (para banco de dados)
GitHub para deploy da aplicação e pipeline de evidências funcional da aplicação


Subindo a Aplicação Localmente:

Pré-requisitos
PHP
WampServer 
mysql 
Docker
IDE de sua preferência

Para uso do Banco de dados no Docker:
1° - Faça o download do Docker em https://www.docker.com/
Opção para download em Windows e Linux.
2° - Instale o Docker em sua máquina e execute o comando abaixo para instalar o mysql no docker 
3° - Execute o mysql no docker
4° - No arquivo conexao.php defina o bloco para uso no docker

Para uso do Banco de dados no PHPMyadmin:
1° - Faça o download do WampServer e, https://www.wampserver.com/ 
Opção para download em Windows e Linux.

2° - Instale o WampServer em sua máquina e execute o banco de dados que está na pasta db do código fonte.
3° - No arquivo conexao.php defina o bloco para uso no mysql
Instalação da aplicação (código fonte)
1 - Git clone: https://github.com/AndersonProjetosJoin/dayone  ou faça download do código fonte direto para uma pasta local do seu computador onde está instalado o wampserver com o nome dayone
Uso
O projeto está localizado em: http://localhost/dayone
Usuário: admin
Senha: 123456
<img src="/imgreadme/1.png">
Autor  Anderson de Carvalho Fernandes
Github: https://github.com/AndersonProjetosJoin



Funções da Aplicação:

Fui pouco além do exigido nesta performance de desenvolvimento, chamei o sistema de gerenciamento de contatos v1.0, que tem por objetivo além de cadastro de contatos, insert de contatos, delete de contatos e edição de contatos. Foi possível com um pouco de criatividade colocar um sistema de login no início da aplicação, dentro da aplicação inserido mais dois itens no menu, totalizando três itens que são: 

Contatos:



Dentro da tela contatos contamos com os item de menu Contato, Tarefas, Eventos, Nome logado, botão Sair, Adição de novo Contato, pesquisa e paginação.
Note que antes do ID no form contém uma estrela, esta permite clicar e deixar nome como favorito.
Nesta mesma tela temos a visualização de dados do contato e paginação como requerida no projeto.




















Editar Contato:




Nesta tela é possível, editar Nome, CPF, E-mail, Telefone, Endereço (uma vez que ao digitar o novo CEP, ele faz a validação e já traz o endereço do CEP digitado através da validação com VIACEP (https://viacep.com.br/), Sexo e data de nascimento, bem como fazer um 



Upload de uma foto do contato.
Excluir contato:

Ao clicar em excluir (botão Lixeira ao lado de editar), ele automaticamente exclui o contato da tela de visualização e do banco de dados.
Nesta mesma tela de Contatos podemos pesquisar por nome o contato.
Novo Contato:



Nesta tela você cadastra um novo contato com dados pertinentes ao mesmo, o mesmo salvará o contato em BD e exibir na tela contatos.





Tela de tarefas:

Acessando a tela de tarefas, teremos um botão para adição de nova tarefa, pesquisa de tarefas, bem como botão para editar a tarefa e excluir a mesma. (Seguindo modelo de paginação como solicitado, onde foi incrementado o total de registro)

Editar Tarefas:
Nesta tela você poderá alterar todo o conteúdo da tarefa do contato como título, descrição data conclusão e hora da conclusão.
Adicionar nova tarefa:
Nesta tela é possível adicionar nova tarefa para o contato com o título, descrição data de conclusão, uma data para lembrete e hora de lembrete ao usuário e recorrência (diariamente, semanalmente, mensalmente ou anualmente).

Tela eventos:
Acessando a tela de tarefas, teremos um botão para adição de nova tarefa, pesquisa de tarefas, bem como botão para editar a tarefa e excluir a mesma. (Seguindo modelo de paginação como solicitado, onde foi incrementado o total de registro)

Adicionar novo evento:
Nesta tela é possível adicionar novo evento para o contato com o título, descrição data de início, data de fim, hora do início e hora do fim.


Dentro deste contexto de desenvolvimento que foi realizado com maior cuidado e atenção aos detalhes, espero ter alcançado as expectativas do time, o qual me incubiu o teste de back e front-end desta aplicação de habilidades na linguagem exigida.
Considerações Finais:
Agradeço a Deus em primeiro lugar, a minha esposa, que sempre me apoia, me incentiva a buscar sempre mais aprendizado e que  é minha QA Tester de homologação e testes das aplicações por mim desenvolvidas.  E a toda equipe da DayOne System em especial ao Adriano que confiou em minha pessoa e meu profissionalismo para poder chegar até aqui.
