# Morsecode

package created for the folks that want use or learn morse code, here you can pass a string and method that you want for the constructor, see an example in bellow.

## Encode example
````php
    require_once __DIR__."vendor/autoload.php";
    use elevenstack\src\morsecode;
    
    $morse = new morsecode('string', 'encode');
    /* 
    *    code returned:    
    *    ... - .-. .. -. --.
    */
````

## Decodig example
````php
    require_once __DIR__."vendor/autoload.php";
    use elevenstack\src\morsecode;
    
    $morse = new morsecode('... - .-. .. -. --.', 'decode');
    /* 
    *    code returned:    
    *    string
    */
````

## Installation using composer
in cmg: 
````
    $ composer elevenstack/morsecode
````
compsoer.json file: 
````json
    {
        "require":{
            "elevanstack/morsecode": "^1.0"
        }
    }
````
## Requirements
The package is suported by this versions:
- PHP >= 7.0 

## Author
This pakcage was created and is maintained by [Guilherme-j10](https://github.com/Guilherme-j10). if you have any questions can contact me by my e-mail guilherme123.campos12@gmail.com.

## License
MIT License

Copyright (c) 2019 Johnny Mast

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.