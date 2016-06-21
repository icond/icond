/*
 * Author: David Alexandre Lopes
 * Date: 10/06/2016
 *
 * What is it supposed to do?
 * It generates a 18 length string according to 2 given numbers
 *
 */
#include <iostream>
#include <string>
#include <cstdlib>

//tamanho da string por defeito
const short _SALTLEN = 18;

int main(int argc, char * argv[])
{
    if(argc != 3)
    {
        std::cout << "ERROR";
        return 1;
    }
    std::string salt = "";
    long long foo = (long long)atoi(argv[1]);
    long long bar = (long long)atoi(argv[2]);

    //roda duas vezes com dois padrões diferentes
    for(int i = 0; i < _SALTLEN; i++)
    {
        char ch = (foo * bar) % 26;
        ch += 97;
        salt += ch;
        foo += bar;
    }
    for(int i = 0; i < _SALTLEN; i++)
    {
        char ch = (foo + bar) % 26;
        ch += 97;
        salt[i] = (char)ch;
        bar += foo;
    }
    std::cout << salt;
    return 0;
}
