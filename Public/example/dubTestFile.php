
<?php
//<pre style="background-color: #444;">
/*
    Data Class Use
    1.dane - obiekt
    2.funkcja - klasa
    3.sposób wykorzystania - zbiór danych i funkcji

    objekt jako reprezentacja - warstwa kontrolera
    w ten sposób można stworzyć prostą aplikację, która będzie budowała z obiektów
*/

/*
stworzenie z tablicy plików:
w zależności od typu get


operacje na zbiorach

print
reduce
detect
sortBy
findByName
findByValue

*/

require 'init.php';


class dubSourceFilesystem
{

    public $data;
    function __construct( $data )
    {
        $this->data = $data;
    }

    function make()
    {
        $path = '';
        $content = '';
//        file_put_contents($path, $content);
    }
}


class dubPath
{

    public $data;
    function __construct( $data )
    {
        $this->data = $data;
    }

    function make()
    {

    }
}


class dubFile
{

    public $data;
    function __construct( $data )
    {
        $this->data = $data;
    }

    function make()
    {

    }
}



dubug(
    new dubRenderEmmet( 'html>body>p.content#cos' )
);

die;
// save file
dub(
    new dubSourceFilesystem('',
        new dubFile(
            new dubPath('filename.html'),
            new dubRenderEmmet( 'html>body>p.content' )
        )
    )
//    new dubStreamText('text w')
);

// load file

dub(
    new dubSourceFilesystem('',
        new dubFile(
            new dubHeaderMime('html'),
            new dubPath('filename.html'),
            new dubRenderEmmet( 'html>body>p.content' )
        )
    )
//    new dubStreamText('text w')
);

die;

// $array = json_decode(json_encode($nested_object), true);

/*

dub(
    { 'child' : 'dubSourceFilesystem',
        {
        'data' : '',
        'child' : 'dubPath',
            {
            'data' : 'filename.html',
            'child' : 'dubFile',
                {
                'data' : 'filename.html',
                'child' : 'dubRenderEmmet',
                    {
                    'data' : 'html>body>p.content'
                    }
                }
            }
        }
    }
//    new dubStreamText('text w')
);

*/

//var_dump(  );
die;

class Counter
{
    public $foo;
    protected $bar;
}




//renderHtml('html>body>p.content')
?>

    <html>
    <body>
    <p class="content"></p>
    </body>
    </html>