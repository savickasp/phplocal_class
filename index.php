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
//spl_autoload_register();
//$x = new Random('Patricija', 'Andriulyte', 'Vilnius');
//print '<hr>';
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
  [0-9] nuo 0 iki 9 <br>
  [a-z] nuo a iki z <br>
  [A-Z] nuo A iki Z  <br>
  [A-Za-z] nuo A iki z <br>
  p+ matches any string containing at least one p. <br>
  p* matches any string containing zero or more p’s. <br>
  p? matches any string containing zero or one p. <br>
  p{2} matches any string containing a sequence of two p’s. <br>
  p{2,3} matches any string containing a sequence of two or three p’s. <br>
  p{2,} matches any string containing a sequence of at least two p’s. <br>
  p$ matches any string with p at the end of it. <br>
  ^p matches any string with p at the beginning of it. <br>
  [^a-zA-Z] matches any string not containing any of the characters ranging from a through z and A through Z. <br>
  p.p matches any string containing p, followed by any character, in turn followed by another p  <br>
  ^.{2}$ matches any string containing exactly two characters <br>
  p(hp)* matches any string containing a p followed by zero or more instances of the sequence hp <br>
  [:alpha:]: Lowercase and uppercase alphabetical characters. This can also be specified as [A-Za-z]. <br>
  [:alnum:]: Lowercase and uppercase alphabetical characters and numerical digits. This can also be specified as [A-Za-z0-9]. <br>
  [:cntrl:]: Control characters such as tab, escape, or backspace. <br>
  [:digit:]: Numerical digits 0 through 9. This can also be specified as [0-9]. <br>
  [:graph:]: Printable characters found in the range of ASCII 33 to 126. <br>
  [:lower:]: Lowercase alphabetical characters. This can also be specified as [a-z]. <br>
  [:punct:]: Punctuation characters, including ~ ` ! @ # $ % ^ & * ( ) - _ + = { } [ ] : ; ' < > , . ? and /. <br>
  [:upper:]: Uppercase alphabetical characters. This can also be specified as [A-Z]. <br>
  [:space:]: Whitespace characters, including the space, horizontal tab, vertical tab, new line, form feed, or carriage return. <br>
  [:xdigit:]: Hexadecimal characters. This can also be specified as [a-fA-F0-9]. <br>
TEKSTAS;
print '<hr>';
//___________________________ 27 gauti failo pavadinima ir viso kelio
print '_________ 27 <br>';
$path = 'random/kazkas/failas.php';
print basename($path);
print basename($path, '.php') . 'Jei atitnka galune failo ja panaikina';
print basename($path, '.txt') . 'Jei nesutampa tai lieka galune';
print '<hr>';
//___________________________ 28 gauti failo kely strinf formatu
print '_________ 28 <br>';
print dirname($path) . 'Atspausdina visa kelia iki failo';
print '<hr>';
//___________________________ 29
print '_________ 29 <br>';
$pathInfo = pathinfo($path);
print 'Dir name:' . $pathInfo['dirname'];
print 'File name with extension:' . $pathInfo['basename'];
print 'Extenion:' . $pathInfo['extension'];
print 'Filename:' . $pathInfo['filename'];
print '<hr>';
//___________________________ 30 short code  op php tag
print '_________ 30 <br>';
/*
 * <?=var_dump(5);?>
*/
print '<hr>';
//___________________________ 31 superglobals
print '_________ 31 <br>';
print '
$GLOBALS <br>
Contains all global variables in your script, including other superglobals. This is not generally recommended for use, 
unless you are, for some reason, not sure where a variable will be stored. $GLOBALS has been available since PHP 3, 
and its operation has not changed. <br>
$_GET <br>
Contains all variables sent via a HTTP GET request. That is, sent by way of the URL. <br>
$_POST <br>
Contains all variables sent via a HTTP POST request. <br>
$_FILES <br>
Contains all variables sent via a HTTP POST file upload. <br>
$_COOKIE <br>
Contains all variables sent via HTTP cookies. <br>
$_REQUEST <br>
Contains all variables sent via HTTP GET, HTTP POST, and HTTP cookies. This is basically the equivalent of combining
$_GET, $_POST, and $_COOKIE, and is less dangerous than using $GLOBALS. However, as it does contain all variables
from untrusted sources (that is, your visitors), you should still try to steer clear unless you have very good
reason to use it. <br>
$_SESSION <br>
Contains all variables stored in a users session. <br>
$_SERVER <br>
Contains all variables set by the web server you are using, or other sources that directly relate to the execution
of your script. <br>
$_ENV <br>
Contains all environment variables set by your system or shell for the script. <br>';
print '<hr>';
//___________________________ 32 Declaring constant and changing properties and if check sentance
print '_________ 32 <br>';
define("CURRENT_TIME", time());
print CURRENT_TIME . '<br>';
define("CURRENT_TIME", time(), true);
print CurrenT_TiMe . '<br>';
if (defined('current_time')) print 'tokia yra'  . '<br>';
$something = 'current_time';
print constant($something) .'<br>';
print '__predifined constants________________ <br>';
print '__FILE__ <br>
The script filename being parsed. Note that this reports the file that contains the current line of code,
so this will report the name of an include file if used therein. <br>
__LINE__ <br>
The line number PHP is executing <br>
__FUNCTION__ <br>
The name of the function PHP is currently inside <br>
__CLASS__ <br>
The name of the class of the object being used <br>
__METHOD__ <br>
The name of the class function PHP is currently inside <br>';
print '<hr>';
//___________________________ 33 ternary operator
print '_________ 33 <br>';
$age = 10;
$person = ($age < 16) ? 'child' : 'adult';
print $person;
print '<hr>';
//___________________________ 34 used to acces pc command prompt
print '_________ 34 <br>';
//    ``
print '<hr>';
//___________________________ 35 use of isset empty funkciju
print '_________ 35 <br>';
$var = false;
print "\$var kintamsis yra false";
var_dump(isset($var));
var_dump(empty($var));
print '<hr>';
//___________________________ 36 exit, die, eval
print '_________ 36 <br>';
//$random = fopen('t.txt', 'm') OR exit("ERROR 545");
//$random = fopen('t.txt', 'm') OR die("ERROR 545");
// now idea where touse
$random = '?> <?php print "labas"?> <?php';
eval($random);
print '<br>';
print '<hr>';
//___________________________ 37 getting time
print '_________ 37 <br>';
print time() . '<br>';
print microtime(1) . '<br>'; // true / false changes format of seconds format
print strtotime('2222-01-01') . '<br>';
print strtotime('-10years', 5555555555) . '<br>';
//  mktime() used for setting summer time saving
print '<hr>';
//___________________________ 38 rounding
print '_________ 38 <br>';
$someval = 4.9526952562;
$ceiled = ceil($someval);
$floored = floor($someval);
$rounded = round($someval, 2);
print "Original: $someval Ceiled: $ceiled Floored: $floored Round: $rounded (choose how much to leave)";
print '<hr>';
//___________________________ 39 random numbers
print '_________ 39 <br>';
rand(1, 50); // predictable
mt_rand(1 ,50); // more random
print 'same seeding generates same "random" string of numbers <br>';
mt_srand(1854856218);
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
echo mt_rand(1, 100), "\n";
print '<hr>';
//___________________________ 40 allows to copy string from position specified and leght how much to copy
print '_________ 40 <br>';
$string = "Goodbye, Perl!";
$a = substr($string, 1); //return 'oodbye, Perl!'
$e = substr($string, 5, 4); //return 'ye, '
$b = substr($string, 5, -1); // return 'ye, Perl!' it subtracts -n from the end of string
$d = substr($string, -5); // return 'Perl!' it starts countng n position from end and takes all symbols till the end
print '<hr>';
//___________________________ 41 novige regex search
print '_________ 41 <br>';
/*
/[Ff]oo/   Foo     Match
/[^Ff]oo/   Foo    No match; the regex says "Anything that is not F or f, followed by "oo". This would match "too", "boo", "zoo", etc.
/[A-Z][0-9]/   K9M   Match
/[A-S]esting/  Testing   No match; the acceptable range for the first character ends at S
/[A-T]esting/   Testing    Match; the range is inclusive
/[a-z]esting[0-9][0-9]/   TestingAA    No match
/[a-z]esting[0-9][0-9]/   testing99     Match
/[a-z]esting[0-9][0-9]/   Testing99     No match; case sensitivity!
/[a-z]esting[0-9][0-9]/i   Testing99    Match; case problems fixed
/[^a-z]esting/     Testing       Match; first character can be anything that is not a, b, c, d, e, etc (lowercase)
/[^a-z]esting/i   Testing     No match; the range excludes lowercase characters only, so you would think T would be fine. However, the "i" at the end makes it insensitive, which turns [^a-z] into [^a-zA-Z]
/[A-Z]{3}/    FuZ     No match; the regex will match precisely three uppercase letters
/[A-Z]{3}/i   FuZ     Match; same as above, but case insensitive this time
/[0-9]{3}-[0-9]{4}/   555-1234     Match; precisely three numbers, a dash, then precisely four. This will match local US telephone numbers, for example
/[a-z]+[0-9]?[a-z]{1}/   aaa1     No match; must end with one lowercase letter
/[A-Z]{1,}99/      99      No match; must start with at least one uppercase letter
/[A-Z]{1,5}99/     FINGERS99      No match; start with a maximum of 5 uppercase letters
/[A-Z]{1,5}[0-9]{2}/i      adams42     Match
/\s/         matches 1 whitespace
/\S/         matches 1 non whitespace
/oo\b/    foo    match any word which has oo on word boundary
/oo\B/    fool     match any word which has oo not on word boundary (inside of word)
 */
print '<hr>';
//___________________________ 42 preg replace ////////// MORE INFO ___ https://regex101.com/ __________
print '_________ 42 <br>';
$a = "Foo moo boo tool foo";
$b = preg_replace("/[A-Za-z]oo\b/", "Got word: $0 <br>", $a);
print $b;

$a = "Foo moo boo tool foo";
$b = preg_replace("/[A-Za-z]oo\b/e", 'strtoupper("$0")', $a);
print $b;

$a = "Foo moo boo tool foo";
$b = preg_replace("/[A-Za-z]oo\b/e", 'strtoupper("$0")', $a, 2);
print $b;

print '<hr>';
//___________________________ 43 Retur value by reference. funkcija per reference priskiriama prie kintamojo
print '_________ 43 <br>';

function &increment($x)
{
    static $array = [];
    $array[] = $x;
    return $array;
}
$insert = 'index 0';
$var =& increment($insert);
$insert = 'index 1';
increment($insert);
increment($insert);
increment($insert);
increment($insert);
increment($insert);
increment($insert);
increment($insert);
var_dump($var);

print '<hr>';
//___________________________ 44 get ingo about arguments inserted into function
print '_________ 44 <br>';

function random()
{
    var_dump(func_get_arg(5));
    var_dump(func_get_args());
    var_dump(func_num_args());
}

random(5,4,8,5,68,2,68,959,265,688,487,326,59);
print '<hr>';
//___________________________ 45 ciklines funkcijas galima pasidaryti jos viduje iskvieciant save
print '_________ 45 <br>';

function factorial($var)
{
    if ($var == 0) return 1;
    return $var * factorial($var - 1);
}

print factorial(6);

print '<hr>';
//___________________________ 46 diferent call of function / is_callable / call_user_func / call_user_func_array
print '_________ 46 <br>';

$func = "sqrt";
print $func(49);

// to check if it ispossibe to call function

$func = "sqrt";
if (is_callable($func)) {
    print $func(49);
}

// used for calling user functions

function skait($var1, $var2, $var3, $var4, $var5, $var6, $var7)
{
    $ret =
        ((($var1 + $var2) * $var3) / (($var4 - $var5) * $var6)) ^$var7;
    return $ret;
}
print call_user_func('skait', 5, 9, 5, 78, 21, 54, 2);

// used for calling user function all function paramaters got into array

$array = [5, 9, 5, 78, 21, 54, 2];

print call_user_func_array('calculation', $array);

print '<hr>';
//___________________________ 47 arrays    / array() / count() / print_r() / var_dump() / var_export() /
print '_________ 47 <br>';

$myarray = array("Apples", "Oranges", "Pears");
print 'Ispausdina array count:  ' . $size = count($myarray) . '<br>';
print 'spausdina array per print_r::: <br>';
print_r($myarray); // jei print_r pridedam antra varable tai jis returnina, bet nespausdina
print ' <br> spausdina array per var_dump:::';
var_dump($myarray);
print 'spausdina array per var_export::: <br>';
var_export($myarray);


print '<hr>';
//___________________________ 48 actions with arrays / array_intersect() / array_diff() / array_merge() /
print '_________ 48 <br>';

$toppings1 = array("Pepperoni", "Cheese", "Anchovies", "Tomatoes");
$toppings2 = array("Ham", "Cheese", "Peppers");
$inttoppings = array_intersect($toppings1, $toppings2); //return only what exist in both
$difftoppings = array_diff($toppings1, $toppings2); //return only what unique in first array
$bothtoppings = array_merge($toppings1, $toppings2); // return merged array all from first then second
$bothtoppingsunique = array_unique($bothtoppings); // return unique value array repetitive values are unset
var_dump($toppings1);
var_dump($toppings2);
var_dump($inttoppings);
var_dump($difftoppings);
var_dump($bothtoppings);
var_dump($bothtoppingsunique);



print '<hr>';
//___________________________ 49 array_filter() panaudojimas ir geras pritaikymas funkcijos paieskai raides
print '_________ 49 <br>';

function endswithy($value) {
    return (substr($value, -1) == 'y');
}

$people = array("Johnny", "Timmy", "Bobby", "Sam", "Tammy", "Danny", "Joe");
$withy = array_filter($people, "endswithy");
var_dump($withy);

print '<hr>';
//___________________________ 50 extract() isardomas masyvas. Jo indeksai(jei pirmas ne skaicius) tampa kintamaisiais,ir igauja savo value arba array
print '_________ 50 <br>';

$Wales = 'Swansea';
$capitalcities[] = 'London';
$capitalcities['Scotland'] = 'Edinburgh';
$capitalcities['Wales'] = 'Cardiff';
var_dump($capitalcities);
extract($capitalcities);

print $Wales;
var_dump($GLOBALS);

/*
 *
EXTR_OVERWRITE              On collision, overwrite the existing variable
EXTR_SKIP                   On collision, do not overwrite the existing variable
EXTR_PREFIX_SAME            On collision, prefix the variable name with the prefix specified by parameter three
EXTR_PREFIX_ALL             Prefix all variables with the prefix specified by parameter three, whether or not there is a collision
EXTR_PREFIX_INVALID         Only use the prefix specified by parameter three when variables names would otherwise be illegal (e.g. "$9")
EXTR_IF_EXISTS              Only set variables if they already exist
EXTR_PREFIX_IF_EXISTS       Only create prefixed variables if non-prefixed version already exists
EXTR_REFS                   Extract variables as references
*/

$Wales = 'Swansea';
extract($capitalcities, EXTR_SKIP);
print $Wales;
print $Scotland;
extract($capitalcities, EXTR_PREFIX_SAME, "country");
print $Wales;
print $country_England;
extract($capitalcities, EXTR_PREFIX_ALL, "country");

// extract() pirmpj pozicijoje yra array, antroje nurodomasprefix kaip reikia funkcijai elgtis, trecias nurodo koki zodi prideti
print '<hr>';
//___________________________ 51  array actions with first / last element
print '_________ 51 <br>';

$names = array("Johnny", "Timmy", "Bobby", "Sam", "Tammy", "Danny", "Joe");
$firstname = array_shift($names);
// First element of $names is now Timmy; last is Joe

array_push($names, $firstname);
// first is Timmy; last is now Johnny

$firstname = array_pop($names);
// first is Timmy; last is Joe again

array_unshift($names, $firstname);
// first is Johnny, last is Joe

var_dump($names);

print '<hr>';
//___________________________ 52 array_flip() changes key becomes value and value becomes key
print '_________ 52 <br>';

$capitalcities['England'] = 'London';
$capitalcities['Scotland'] = 'Edinburgh';
$capitalcities['Wales'] = 'Cardiff';
$flippedcities = array_flip($capitalcities);
var_dump($flippedcities);

print '<hr>';
//___________________________ 53
print '_________ 53 <br>';

var_dump(range(1, 10)); //array of numbers 1 to 10
var_dump(range(1, 10, 2)); //array of numbers from 1 to 10 step 5
var_dump(range(100, 10, 10)); //array form 100 to 10 by step 10
var_dump(range('a', 'z')); //array of letters from a to z

print '<hr>';
//___________________________ 54 serialize() / unserialize() / encode() / decode() encoding array for transfer from page to page
print '_________ 54 <br>';

$array = ['vienas', 'naktis', 'saule'];

$serialize = serialize($array);
$encode = urlencode($serialize);
$decode = urldecode($encode);
$unserialize = unserialize($decode);

var_dump($array);
var_dump($serialize);
var_dump($encode);
var_dump($decode);
var_dump($unserialize);

print '<hr>';
//___________________________ 55 create object in another object
print '_________ 55 <br>';

class dogtag {
    public $Words;
}

class dog {
    public $Name;
    public $DogTag;

    public function bark() {
        print "Woof!\n";
    }
}

$poppy = new dog; $poppy->Name = "Poppy";
$poppy->DogTag = new dogtag;
$poppy->DogTag->Words = "My name is Poppy. If you find me, please call 555-1234";
$cat = new dog;
$cat->DogTag = new dogtag;
$cat->DogTag->Words = 'Mano vardas cat';
var_dump($poppy);
var_dump($cat->DogTag);


print '<hr>';
//___________________________ 56 could use insataceof to check if object belong to class
print '_________ 56 <br>';

class Niekas
{}
class Viskas extends Niekas
{}
$niek = new Niekas;
$niek instanceof Niekas ? print 'objektas yra tos klases' : print 'ogjektas nepriklauso klasei';
$ret = is_subclass_of($niek, 'Niekas');
var_dump($ret);
$ret = is_subclass_of('Viskas', 'Niekas');
var_dump($ret);
print '<hr>';
//___________________________ 57 helpfull Class Objects functions
print '_________ 57 <br>';

print "Sam is a " . get_class($sam); // return class of object
print "Class animal exists: " . class_exists("animal"); // returns true is class exist
print "All declared classes are: " . get_declared_classes(); // returns all classes

print '<hr>';
//___________________________ 58
print '_________ 58 <br>';



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
//___________________________ x
print '_________ x <br>';



print '<hr>';