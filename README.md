# Ordenação Externa de Arquivos

Você deve escrever um script PHP que seja capaz de ordenar grandes conjuntos de dados contidos em arquivos externos. O desafio consiste em criar um algoritmo de ordenação externa eficiente que possa lidar com arquivos de entrada de tamanho arbitrário, garantindo que o processo de ordenação seja eficiente em termos de uso de memória e tempo de execução.

## Requisitos:

- O script deve ser capaz de lidar com arquivos de entrada de tamanho arbitrário, potencialmente maiores do que a memória disponível no servidor.
- O algoritmo de ordenação deve ser eficiente em termos de tempo de execução e uso de recursos.
- O script deve ser capaz de ordenar os dados em ordem ascendente ou descendente, conforme especificado.
- O script deve ser bem documentado e fácil de entender para outros desenvolvedores.

## Dicas:

Considere usar uma abordagem de ordenação externa, como a ordenação por mistura (merge sort), que é eficiente em termos de uso de memória e tempo de execução.
Divida o conjunto de dados em blocos menores que possam ser manipulados em memória e, em seguida, ordene esses blocos antes de mesclá-los.
Use manipulação eficiente de arquivos para minimizar a sobrecarga de I/O durante o processo de ordenação.
Teste:

- Crie um arquivo de entrada contendo um grande conjunto de números não ordenados.
- Execute o script PHP fornecido para ordenar o arquivo de entrada.
- Verifique se o arquivo de saída está corretamente ordenado.
