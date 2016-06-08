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

using namespace std;

//prototypes
string letters(string salt, const long long foo, const long long bar);
string numbers(string salt, const long long foo, const long long bar);

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
    salt = letters(salt, ID, condID);
    //salt = numbers(salt, ID, condID);
    cout << salt;
    return 0;
}

// down x letters (a -> z) & up x letters (z -> a)
//esta função está a dar Core Dump. Provavelmente é das strings
string letters(string salt, const long long foo, const long long bar)
{
    //starts here (up -> down approach)
    for(int i = 0; salt.length(); i++)
    {
        if(salt[i] != 'x')
            continue;
        else
        {
            //roda letra
            char ch = (foo + bar) % 26;
            ch += 96;
            salt[i] = (char)ch;
        }
    }
    //rodar letras
    //ci = (pi + k) % 26
    //char ch = (foo + bar) % 26;
    //ch = ch + 96;
    return salt;
}

//generate numbers to salt
string numbers(string salt, const long long foo, const long long bar)
{
    //TODO
}


