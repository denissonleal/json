## Model Json

Classe criada em PHP quem tem como objetivo salvar dados como um banco de dados NoSQL em uma simples estrutura de json.

### Onde deve ser usado?

Deve ser usado em locais que não terá uma quantidade muito grande de dados, que será praticamente estático e que vai ou não ser muito utilizado. Exemplos:

+ Lista de cidades, estados, países;
+ Nomes de sócios, empresas e parceiros do seu negócio;

Salvar dados atômicos, evitar criar uma tabela em um banco de dados para colocar um único registro. Exemplo:

+ Seus dados pessoais ou de sua empresa;

Para criar um novo registro basta instanciar o model, atribuir os valores e chamar o método `save`. Como por exemplo:

	$resume = new Resume;
	$resume->name  = "Denisson Leal";
	$resume->email = "denissonleal@email.com";
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

### Informações importantes

É neecssário configurar o path. Abra a classe `Json` e modifique o método `getDir` para o caminho que deve salvar os arquivos json.

Quem está usando: http://sysvale.com