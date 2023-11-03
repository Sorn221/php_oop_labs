<?php


function make($url){
    $arrUrl = parse_url($url);
    if(isset($arrUrl["query"])){
        parse_str($arrUrl["query"], $arrUrl["query"]);
    }
    return $arrUrl;
}

function setScheme(&$data, $scheme){
    $data["scheme"] = $scheme;
}

function getScheme($data){
    return $data["scheme"];
}

function setHost(&$data, $host){
    $data["host"] = $host;
}
function getHost($data){
    return $data["host"];
}

function setPath(&$data, $path){
    $data["path"] = $path;
}
function getPath($data){
    return $data["path"];
}

function setQueryParam(&$data, $key, $value){
    if(!isset($data['query'])){
       array_push($data, ['query' => []]); 
    }
    $data['query'][$key] = $value;


}

function getQueryParam($data, $paramName, $default = null){
    return isset($data['query'][$paramName]) ? $data['query'][$paramName] : $default;
}

function toString($data){
        $scheme   = isset($data['scheme']) ? $data['scheme'] . '://' : '';
        $host     = isset($data['host']) ? $data['host'] : '';
        $port     = isset($data['port']) ? ':' . $data['port'] : '';
        $user     = isset($data['user']) ? $data['user'] : '';
        $pass     = isset($data['pass']) ? ':' . $data['pass']  : '';
        $pass     = ($user || $pass) ? "$pass@" : '';
        $path     = isset($data['path']) ? $data['path'] : '';
        $query    = isset($data['query']) ? '?' . http_build_query($data['query']) : '';
        $fragment = isset($data['fragment']) ? '#' . $data['fragment'] : '';
        return "$scheme$user$pass$host$port$path$query$fragment";
}




$url = make('https://ht.io/community?q=low');
print ('https://ht.io/community?q=low' === toString($url)) ? "true" : "false";
print "<br>";
print ('https' === getScheme($url)) ? "true" : "false";
print "<br>";
print ('ht.io' === getHost($url)) ? "true" : "false";
print "<br>";
print ('/community' === getPath($url)) ? "true" : "false";
print "<br>";

setScheme($url, 'http');
print ('http://ht.io/community?q=low' === toString($url)) ? "true" : "false";
print "<br>";

setHost($url, 'code-basics.com');
print ('http://code-basics.com/community?q=low' === toString($url)) ? "true" : "false";
print "<br>";

setScheme($url, 'https');
setHost($url, 'ht.io');
setPath($url, '/404');
print ('https://ht.io/404?q=low' === toString($url)) ? "true" : "false";
print "<br>";

setQueryParam($url, 'page', 5);
print ('https://ht.io/404?q=low&page=5' === toString($url)) ? "true" : "false";
print "<br>";

setQueryParam($url, 'q', 'high');
print ('https://ht.io/404?q=high&page=5' === toString($url)) ? "true" : "false";
print "<br>";
print ('high' === getQueryParam($url, 'q')) ? "true" : "false";
print "<br>";
print ('guest' === getQueryParam($url, 'user', 'guest')) ? "true" : "false";
print "<br>";
print is_null(getQueryParam($url, 'b')) ? "true" : "false";
print "<br>";

setQueryParam($url, 'q', null);
print ('https://ht.io/404?page=5' === toString($url)) ? "true" : "false";
print "<br>";

setQueryParam($url, 'q', null);
print ('https://ht.io/404?page=5' === toString($url)) ? "true" : "false";
print "<br>";

$url = make('https://ht.io/community');
print ('https://ht.io/community' === toString($url)) ? "true" : "false";
print "<br>";

$url = make('https://ht.io/?q=high&page=5');
print ('https://ht.io/?q=high&page=5' === toString($url)) ? "true" : "false";
print "<br>";