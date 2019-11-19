<?php
//__________ 1 printf sprintf
print '_________ 1 <br>';

//__________ 2 Galima keisti kintamojo tipa pries reiksme nurodant kintamojo tipa skliaustuose
print '_________ 2 <br>';

$word = 5;
var_dump($word);
$word = (string)$word;
var_dump($word);
$word = (array)$word;
var_dump($word);
$word = (float)$word[0];
var_dump($word);
print '<hr>';

//__________ 3 Rasant $word[] veikia panasiai kaip array ir galima pasiselektinti stringo elementa
print '_________ 3 <br>';

$word = 'zodis';
print "$word[0] <br> $word[1] <br> $word[2] <br> $word[3] <br> $word[4] <br>";
print '<hr>';

//__________ 4 PHP perskaito string ir jei jame yra skaiciai konvertuoja juos i integer ar double
print '_________ 4 <br>';

$var1 = 'labas 6'; // Jei pries skaicius yra tekstas, tai negali konvertuoti ir reiksme patampa 0
$var2 = 5;
$result = $var1 * $var2; // result 0
print $result . '<br>';

$var1 = '6 labas'; // Kai priekyje yra skaicius tai PHP paima ji ir igoruoja kas lieka = 6
$var2 = 5;
$result = $var1 * $var2; // result 30
print $result . '<br>';
print '<hr>';

//___________________________ 5 su & simboliu galima subindinti du kintamuosius. Pakeitus viena is ju kitas taip pat pasikeis
print '_________ 5 <br>';

$word1 = 'labas';
$word1 =& $word2;
$word2 = 'krabas';
print $word1 . '<br>';
print $word2 . '<br>';
$word1 = 'niekas';
print $word1 . '<br>';
print $word2 . '<br>';
print '<hr>';

//___________________________ 6 Norint funkcijoje panaudoti kintamaji is isores reikia ji preideti funkcoijos viduje su global zodziu
print '_________ 6 <br>';

$varable = 10;

function add1()
{
    global $varable;
    $varable++;
}

add1();
print $varable;
print '<hr>';


//___________________________ 7 Kitas sprendimas kaip panaudoti global varable funcijos viduje
print '_________ 7 <br>';


$varGlobal = 5;

function multiply2()
{
    $GLOBALS["varGlobal"] *= 2;
}

multiply2();
print $GLOBALS['varGlobal'];
print '<hr>';


//___________________________ 8 Kaip pamatyti visus global varables
print '_________ 8 <br>';

var_dump('Visi global varables');
var_dump($GLOBALS);
print '<hr>';

//___________________________ 9 jei norim, kad kintamasisi sukurtas funkcijoje islaikytu savo reiksme reikia static pries ji
print '_________ 9 <br>';

function increaseBy1()
{
    static $count = 0;
    $count++;
    print $count . '<br>';
}

increaseBy1();
increaseBy1();
increaseBy1();
increaseBy1();
increaseBy1();

print '<hr>';

//___________________________ 10 SuperGlobalVarables per $_SERVER galima pasiekti server diuomenis, taip pat ir laika IP adress
print '_________ 10 <br>';
var_dump($_SERVER); // server data
print date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']) . '<br>'; // server time
print $_SERVER['REMOTE_ADDR'] . '<br>'; // IP adresas
print '<hr>';

//___________________________ 11 Su dvigubu $$ simbolou kintamojo reiksme patampa kintamuoju su savo reiksme
print '_________ 11 <br>';
$fruit = 'apple';
$$fruit = 'pie';
print "$fruit ${$fruit} <br>";
print "$fruit $apple <br>";
print '<hr>';

//___________________________ 12 Creating constatant komstanta iskviesti nereikia naudoti $ simbolio
print '_________ 12 <br>';
define('xXx', 8008);
print xXx;
print '<hr>';

//___________________________ 13 Galima loginio testo atsakimos sukurti savo po ? rodo jei tiese po : jei melas
print '_________ 13 <br>';

$a = 99;
print ($a >= 25) ? 'tiesa' : 'melas';

print '<hr>';

//___________________________ 14 TEKSTAS yra open ir close tagai. Jie gali buti ber kokie.
print '_________ 14 <br>';
print <<< TEKSTAS
Cia 
galima 
spausdinti 
didziuli teksta
Ir tekstas gali buti pakeistas i bet koki zodi!!!!
TEKSTAS;

print '<hr>';

//___________________________ 15 Switch yra if elseif misinys, nei nera break tai vykdomi visi sekantys veiksmai
print '_________ 15 <br>';

$varable = 'sekme';
switch ($varable) {
    case 'sekme':
        print 'sekmingas';
        break;
    case 'nesekme':
        print 'nesekmingas';
        break;
    default:
        print 'defaultinis';
}
print '<hr>';

//___________________________ 16 goto naudojama persokti is ciklo i jo isoreje esancio kodo dali
print '_________ 16 <br>';

for ($i = 0; $i < 10; $i++) {
    print $i . '<br>';
    if ($i == 5) {
        goto zodis;
    }
}

zodis: {
    print 'labas';
    print ' ate';
}

print '<hr>';

//___________________________ 17 kuriant funkcija kliaustuose pries kintama nurodant & simboli, jo reiksme po funkcijos bus pakeista
print '_________ 17 <br>';

$number = 10;
$x = 2;

print "Before \$number = $number" . '<br>';

function sum(&$var1, $var2)
{
    $var1 += $var2;
}

sum($number, $x);
print "After \$number = $number" . '<br>';

print '<hr>';

//___________________________ 18 List funkcija isdalija masyvo reiksmes ir priskirai prie nurodytu kintamuju
print '_________ 18 <br>';

function returnArray()
{
    $array = [];
    $array [] = 'Viktorija';
    $array [] = 'vik@gmail.com';
    $array [] = 861111111;
    $array [] = 'Vilnius';

    return $array;
}

list($name, $email, $phoneNumber, $city) = returnArray();
print $name . '<br>';
print $email . '<br>';
print $phoneNumber . '<br>';
print $city . '<br>';

print '<hr>';

//___________________________ 19 function library -------- read more -------
print '_________ 19 <br>';

print '<hr>';

//___________________________ 20 instanceof galima patikrinti ar kintamasis yra klases objektas
print '_________ 20 <br>';
print 'if ($x instanceof Random) print \'taip\';';
print '<hr>';

//___________________________ 21 static value yra kaip ir paprastas static kintamasis kuris issaugo savo value. iskvietimas kitoks
print '_________ 21 <br>';
/*
class Visitor
{
    private static $visitors = 0;
    function __construct()
    {
        self::$visitors++;
    }
    static function getVisitors()
    {
        return self::$visitors;
    }
}
*/
print '<hr>';

//___________________________ 22 class alias leidzia sukurti klases pavadinimo sinonimus
print '_________ 22 <br>';
//class_alias(originalClassName, aliasName);
print '<hr>';

//___________________________ 23 Get class nurodo objekto klase, jei nerea grazina false
print '_________ 23 <br>';
//get_class($object);
print '<hr>';

//___________________________ 24 klasiu autoloaderis
print '_________ 24 <br>';

spl_autoload_register();
$x = new Random('Patricija', 'Andriulyte', 'Vilnius');

print '<hr>';

//___________________________ 25 Cloning object
print '_________ 25 <br>';
/*
$first = new Cloning();
$first->setName('kx-1422');
$first->setColor('black');
$second = clone $first;
$second->setName('az-1422');

var_dump($first);
var_dump($second);
 */
print '<hr>';

//___________________________ 26 Select charakters in string
print '_________ 26 <br>';
print <<< TEKSTAS
  [0-9] nuo 0 iki 9
  [a-z] nuo a iki z
  [A-Z] nuo A iki Z 
  [A-Za-z] nuo A iki z
  p+ matches any string containing at least one p.
  p* matches any string containing zero or more p’s.
  p? matches any string containing zero or one p.
  p{2} matches any string containing a sequence of two p’s.
  p{2,3} matches any string containing a sequence of two or three p’s.
  p{2,} matches any string containing a sequence of at least two p’s.
  p$ matches any string with p at the end of it.
  ^p matches any string with p at the beginning of it.
  [^a-zA-Z] matches any string not containing any of the characters ranging from a through z and A through Z.
  p.p matches any string containing p, followed by any character, in turn followed by another p 
  ^.{2}$ matches any string containing exactly two characters
  p(hp)* matches any string containing a p followed by zero or more instances of the sequence hp
  [:alpha:]: Lowercase and uppercase alphabetical characters. This can also be specified as [A-Za-z].
  [:alnum:]: Lowercase and uppercase alphabetical characters and numerical digits. This can also be specified as [A-Za-z0-9].
  [:cntrl:]: Control characters such as tab, escape, or backspace.
  [:digit:]: Numerical digits 0 through 9. This can also be specified as [0-9].
  [:graph:]: Printable characters found in the range of ASCII 33 to 126.
  [:lower:]: Lowercase alphabetical characters. This can also be specified as [a-z].
  [:punct:]: Punctuation characters, including ~ ` ! @ # $ % ^ & * ( ) - _ + = { } [ ] : ; ' < > , . ? and /.
  [:upper:]: Uppercase alphabetical characters. This can also be specified as [A-Z].
  [:space:]: Whitespace characters, including the space, horizontal tab, vertical tab, new line, form feed, or carriage return.
  [:xdigit:]: Hexadecimal characters. This can also be specified as [a-fA-F0-9].
TEKSTAS;
print '<hr>';

//___________________________ 27
print '_________ x <br>';

print '<hr>';

//___________________________ x
print '_________ x <br>';

print '<hr>';

//___________________________ x
print '_________ x <br>';

print '<hr>';

//___________________________ x
print '_________ x <br>';

print '<hr>';

//___________________________ x
print '_________ x <br>';

print '<hr>';
