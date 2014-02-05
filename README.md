![img](http://dubphp.com/img/box/Original_512.png)

http://dubphp.com - libraries for PHP application

librariers:
- services API
- database Model DAO
- converting data
- helpers for views


Przykład
PHP
```
$index = new sourceFile();
$browser = new sourceBrowser();
$content = new mimeDocument('html);
$pattern = new patternEmmet();

$html_content = $pattern->create('html>head+body');
$content->create( $html_content );
$browser->create('html_content'); // wyswietl na ekranie lub ...
$index->create('index.html'); // stwórz plik
```

efekt działania
```
<html>
<head></head>
<body></body>
</html>
```
inaczej tworząc ten sam efekt w pliku, tworząc w oparciu o zapis
pozwalający na generowanie w locie (pobiera wszystkie parametry:
1. metoda
2. wartość
3. kolejny obiekt


```
new sourceFile( 'create', 'index.html'
  new mimeDocument( 'create','html'
    new patternEmmet( 'create', 'html>head+body' ) 
  );
);
```
w powyższym przykładzie, gdy objekt otrzymuje w parametrze obiekt, pobiera z niego dane metodą read();

dzięki czemu w prosty sposób można tworzyć kod, który automatycznie będzie można wykorzystać w innych językach, oparty na prostych wzorcach: CRUD i JS.

Inny sposób na uzysaknie podobnego efektu poprze JS wysyłając ten obiekt do serwera, po zserializowaniu powinien powstać powyższy efekt w postaci zapisanego pliku.
```
{
  sourceFile : {
   'create' : 'index.html',
    mimeDocument : {
     'create' : 'html',
      patternEmmet : {
        'create', 'html>head+body'
      } 
    }
  }
}
```
w taki sposób będzie tworzona treść na frameworku dubPHP, który będzie powiązany z dubJS, 
