# Solid

**Resumo:**
- **Single Responsability** - Atores e estruturas de alto nível
- **Open/Close Principle (OCP)** - Projeto de classes e extensão de funcionalidades
- **Liskov Substituition** - Subtipos e herança
- **Interface Segregation** - Lógica de negócios relacionada a comunicação com classes cliente
- **Dependency Inversion** - Dependencias das classes


------------


### Single Responsibility
> Um objeto jamais deve ter mas de um fim ou propósito.

Príncipio da responsabilidade única.
**Exemplo:** Um objeto não deve armezenar registros e imprimir o resultado ou salvar estes dados. Outro exemplo, no repositório cada Tag HTML é representada por uma classe diferente que é responsável por retornar apenas aquela Tag.

------------


### Open Closed Principle (OCP)
> Aberto para expansão, fechado para modificação.

Ou seja, devemos programar de forma que permita expandir as funcionalidades porém, para isso, as classes já feitas não devem precisar serem alteradas; devemos apenas fazer implementações não alterações.

**Exemplo:** No repositório para alterar uma nova tag HTML não precisamos alterar a classe HTML, basta criar uma nova classe implementando a Tag.

------------


### Liskov Substituition
> Subtipos devem ser sustituídos pelos seus tipos base. 

Uma subclasse deve sobrescrever os métodos da superclasse de forma que a funcionalidade do ponto de vista do cliente continue a mesma.

Isso quer dizer que ao criarmos classes com heranças, devemos nos manter atentos se as classes filhas não estão, programaticamente falando, fugindo da implementação estabelecida pela classe pai e ocasionando dados incorretos.

Como por exemplo, na geometria um quadrado é um tipo de retângulo, porém, como todos os lados do quadrado são iguais, precisaríamos de apenas um método para informar a medida que seria a mesma para todos seus lados. Por outra lado, no caso do retângulo, precisaríamos definir a altura e largura específica. Portanto, se fizessemos uma classe base Retangulo e uma subclasse Quadrado, e fizessemos um método numa classe "Cliente" que recebesse um Retangulo e efetuasse cálculos, jamais poderiamos passar um Quadrado para esse método, pois utilizando a mesma implementação do retângulo o resultado estaria incorreto. Violando o príncio de Substituíção de Liskov.

**OBS: O substituition do nome é referente que classes do mesmo tipo devem ser substituíveis entre si.**

**Exemplos:**
- http://dtidigital.com.br/blog/principios-solid-o-principio-da-substituicao-de-liskov/
- https://code.tutsplus.com/pt/tutorials/solid-part-3-liskov-substitution-interface-segregation-principles--net-36710


------------


### Interface Segregation
> Nenhum cliente deve ser forçado a depender de métodos que ele não use.

**Podemos e devemos criar interfaces menores e mais simples, mesmo que com métodos duplicados**. 

Basicamente, não devemos criar interfaces que serão implementadas por classes que não irão de fato implementar todos os métodos do contrato, retornando um erro ou algo como "null" apenas para que a classe se encaixe na interface.

**Exemplo:** Como exemplo de uso **incorreto**, podemos citar uma interface Passaro que possuí os métodos voa e anda. Seria perfeitamente normal implementarmos essa interface numa classe Andorinha, porém, e se tivermos uma classe Pinguim? Embora o pinguim seja um Pássaro, ele não voa! Devido à nossa estrutura, seríamos forçados a implementar o método voa na classe mesmo que ele não faça nada. Uma forma de contornar isso, é criar quebrar interfaces e utilizar de herança para aderir aos contextos. Como por exempo, Passaro, PassaroQueVoa, PassaroQueVoaENada, PassaroQueNada etc..

------------


### Dependency Inversion
> Módulos de alto nível não deveriam depender de módulos de baixo nível. Ambos deveriam depender de abstrações (interfaces ou abstract).

Abstrações não deveriam depender de detalhes. Detalhes devem depender de abstrações.

Ou seja, devemos criar classes que sejam dependentes de abstrações, não de outras classes diretamente. Quando fazemos um método e instanciamos um objeto diretamente dentro dele, ou mesmo injetamos por parâmetro, estamos criando uma forte acoplação entre nosso método e essa classe. O correto é que quando temos uma classe X que utiliza uma classe Y internamente, abstraíamos essa classe Y em uma Interface e indiquemos-a na classe X. Dessa forma, não deixamos as classes diretamente acopladas e poderemos facilmente injetar novos comportamentos caso necessário.

**Exemplo:** http://dtidigital.com.br/blog/principios-solid-o-principio-de-inversao-de-dependencia/