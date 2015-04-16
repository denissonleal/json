## Model Json

Classe criada em PHP para o laravel 4(mas pode ser usada em qualquer lugar), quem tem como objetivo salvar dados como um banco de dados NoSQL em uma simples estrutura de json.

### Onde deve ser usado?

Deve ser usando em locais que não terá uma quantidade muito grande de dados, que será praticamente estático e que vai ou não ser muito utilizado. Exemplos:
+ Lista de cidades, estados, países;
+ Nomes de sócios, empresas e parceiros do seu negocio;

Salvar dados atômicos, em que seria uma gafe criar uma tabela em um banco de dados para colocar um único registro. Exemplo:
+ Seus dados pessoais ou de sua empresa;


### Usando no Laravel 4

#### Criando o model

No laravel 4, basta copiar o `Json.php` para a pasta `app/models`e ele estará pronto para ser usado. Então crie um novo aquivo com nome que você colocaria em sua tabela(por exemplo Resume) e faça:

	<?php

	class Resume extends Json {
	}


#### Salvando um nodo registro

Para criar um novo registro basta instanciar o model, atribuir os valores e chamar o método `save`. Como por exemplo:

	$resume = new Resume;
	$resume->name  = "Denisson Leal";
	$resume->email = "denissonleal@gmail.com";
	$resume->file = "file.pdf";
	$resume->save();

#### Consulta um registro

A consulta pode ser feita de duas formas:

+ Buscar todos:

	$resumes = Resume::all();

+ Buscar um índice especifico:

	$resume = Resume::find(1);

#### Editando um registro

Durante qualquer um das buscas anteriores pode ser modificado um campo e gravado com o método `save`. Exemplo:

	$resume = Resume::find(1);
	$resume->file = "novo.pdf";
	$resume->save();

### Usando fora do laravel

Para usar fora do laravel ou em outra versão basta configurar o caminho. Abra a classe `Json` e modifique o método `getDir` para o caminho que deve salvar os arquivos json.


