<?php

try {
    undefinedFunction();
} catch (Throwable $error) {
    echo 'Now if you write bad code, you can catch it! '.$error->getMessage();
}

echo "\n\n Continue processing file...";
