<?php

function _echo($value)
{
    echo $value;
}

function greet(\Idephix\Context $idx, $name)
{
    $idx->execute('echo', 'Ciao ' . $name);
}

function testParams($param1, $param2, $param3 = 'default')
{
    echo "$param1 $param2 $param3";
}

function aTestIdxFile()
{
    echo 'It is all I am';
}

function ping()
{
    echo 'pong';
}

function error()
{
    throw new Exception('Error for tests, ignore it :-)');
}

function fakedeploy($go = false)
{
    if ($go) {
        echo 'real-run';
    } else {
        echo 'dry-run';
    }
}
