/*
 * Author: David Lopes
 * Date: 08/06/2016
 * custom salt: "nJBND.yjxaysd2!bxJyilxjybxB"
 *
 * generate letters and replace where x is found
 * generate numbers and replace where y is found
 *
 * at the end this program shouts to the command line the salt generated
 * which the php will retrieve and use
 *
 * If it fails, we shall cry.
 */
#include <iostream>
#include <string>
#include <cstdlib>
//#include <ctype.h>

using namespace std;

//prototypes
string letters(string salt, long long foo, long long bar, int len);
string numbers(string salt, long long foo, long long bar, int len);

int main(int argc, char * argv[])
{
    string salt = "nJBND.yjxaysd2!bxJyilxjybxB";
    if(argc != 3)
    {
        cout << "ERROR";
        return 1;
    }
    long long ID = (long long)atoi(argv[1]);
    long long condID = (long long)atoi(argv[2]);
    salt = letters(salt, ID, condID, salt.size());
    //salt = numbers(salt, ID, condID, salt.size());
    cout << salt;
    return 0;
}

// down x letters (a -> z) & up x letters (z -> a)
//esta função está a dar Core Dump. Provavelmente é das strings
string letters(string salt, long long foo, long long bar, int len)
{
    //starts here (up -> down approach)
    for(int i = 0; i < len; i++)
    {
        if(salt[i] != 'x')
            continue;
        else
        {
            //roda letra
            char ch = (foo + bar) % 26;
            ch += 65;
            salt[i] = (char)ch;
            //rodar letra à esquerda
            ch = (foo * bar) % 26;
            ch += 65;
            salt[i - 1] = (char)ch;
            //rodar letra à direita
            ch = (foo / bar) % 26;
            ch += 65;
            salt[i + 1] = (char)ch;
            foo+=2;
            bar+=4;
        }
    }
    return salt;
}

//generate numbers to salt
// vou ter de arranjar uma maneira de encaixar um long long numa string
//caguei para isto ._.
string numbers(string salt, long long foo, long long bar, int len)
{
    /*char aux = 0;
    for(int i = 0; i < len; i++)
    {
        if(salt[i] != 'y')
            continue;
        else
        {
            if(aux == 0)
            {
                salt[i] = to_string((foo + bar));
                aux = 1;
            }
        }
    }
    */
    return salt;
}
