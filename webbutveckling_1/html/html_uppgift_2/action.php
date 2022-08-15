<?php

if (empty($_POST))
    echo "Det saknas post-information. ";
elseif (empty($_POST['name']))
    echo "Det saknas ett namn. ";
elseif (empty($_POST['movie']))
    echo "Det saknas en film. ";
elseif (empty($_POST['book']))
    echo "Det saknas en bok. ";
else
    echo "<code><pre>" . print_r($_POST, true) . "</code></pre>";
