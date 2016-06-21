/*
 * Author: David Lopes
 * Date: 21/06/2016
 *
 * Generates a custom salt based on x and y
 * It will serve for the 3rd encryption level
 *
 * If it fails, please, stare at this dude for a while
               ,---.
            ,.'-.   \
           ( ( ,'"""""-.
           `,X          `.
           /` `           `._
          (            ,   ,_\
          |          ,---.,'o `.
          |         / o   \     )
           \ ,.    (      .____,
            \| \    \____,'     \
          '`'\  \        _,____,'
          \  ,--      ,-'     \
            ( C     ,'         \
             `--'  .'           |
               |   |         .O |
             __|    \        ,-'_
            / `L     `._  _,'  ' `.
           /    `--.._  `',.   _\  `
           `-.       /\  | `. ( ,\  \
          _/  `-._  /  \ |--'  (     \
         '  `-.   `'    \/\`.   `.    )
               \  -hrr-    \ `.  |    |

 * Right..
 * Have fun!
 */

#include <iostream>
#include <cstdlib>
#include <string>

//constants
const short _LEN = 18;
const int _PI = 314;

std::string computes(long long, std::string);

using namespace std;

int main(int argc, char * argv[])
{
    //recebe um ID do condominio
    if(argc != 2)
    {
        cout << "ERROR";
        return 1;
    }
    string salt = "";
    long long ID = atoi(argv[1]);
    cout << computes(ID, salt);
}

string computes(long long ID, string salt)
{
    for(int i = 0; i < _LEN; i++)
    {
        char ch =(char)(((ID + _PI) % 26) + 97);
        salt += ch;
        ID = ID + (_PI * _PI);
        ID += 420;
    }
    return salt;
}
