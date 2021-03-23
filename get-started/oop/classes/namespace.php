<?php
//namespace MyNamespaceName;

function hello() {

    echo 'Hello I am Running from a namespace!';

}

// Resolves to MyNamespaceName\hello
echo hello();

// Explicitly resolves to MyNamespaceName\hello

?>