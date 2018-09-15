# Solid

Single Responsibility:
Príncipio da responsabilidade única. Um objeto jamais deve ter mas de um fim ou propósito.
Exemplo: Um objeto não deve armezenar registros e imprimir o resultado ou salvar estes dados. Outro exemplo, no repositório cada Tag HTML é representada por uma classe diferente que é responsável por retornar apenas aquela Tag.

Open Closed Principle:
Aberto para expansão, fechado para modificação. Ou seja, devemos programar de forma que permita expandir as funcionalidades porém, para isso, as classes já feitas não devem precisar serem alteradas; devemos apenas fazer implementações não alterações.
Exemplo: No repositório para alterar uma nova tag HTML não precisamos alterar a classe HTML, basta criar uma nova classe implementando a Tag.

Liskov Substituition:
Subtipos devem ser sustituídos pelos seus tipos base. Uma subclasse deve sobrescrever os métodos da superclasse de forma que a funcionalidade do ponto de vista do cliente continue a mesma.
Isso quer dizer que ao criarmos classes com heranças, devemos nos manter atentos se as classes filhas não estão, programaticamente falando, fugindo da implementação estabelecida pela classe pai e ocasionando dados incorretos.
Como por exemplo, na geometria um quadrado é um tipo de retângulo, porém, como todos os lados do quadrado são iguais, precisaríamos de apenas um método para informar a medida que seria a mesma para todos seus lados. Por outra lado, no caso do retângulo, precisaríamos definir a altura e largura específica. Portanto, se fizessemos uma classe base Retangulo e uma subclasse Quadrado, e fizessemos um método numa classe "Cliente" que recebesse um Retangulo e efetuasse cálculos, jamais poderiamos passar um Quadrado para essa classe, pois a implementação teria que ser diferente. Violando o príncio de Substituíção de Liskov.
Exemplos: 
    http://dtidigital.com.br/blog/principios-solid-o-principio-da-substituicao-de-liskov/
    https://code.tutsplus.com/pt/tutorials/solid-part-3-liskov-substitution-interface-segregation-principles--net-36710

Dependency Inversion:
Módulos de alto nível não deveriam depender de módulos de baixo nível. Ambos deveriam depender de abstrações (interfaces ou abstract).
Abstrações não deveriam depender de detalhes. Detalhes devem depender de abstrações.
Ou seja, devemos criar classes que sejam dependentes de abstrações, não de outras classes diretamente. Quando fazemos um método e instanciamos um objeto diretamente dentro dele, ou mesmo injetamos por parâmetro, estamos criando uma forte acoplação entre nosso método e essa classe. O correto é que quando tenhamos uma classe X que utiliza uma classe Y em sua execução, abstraíamos essa classe Y em uma Interface e indiquemos-a na classe X. Dessa forma, não deixamos as classes diretamente acopladas e poderemos facilmente injetar novos comportamentos caso necessário.
Exemplo: http://dtidigital.com.br/blog/principios-solid-o-principio-de-inversao-de-dependencia/