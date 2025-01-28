<?php

setcookie("username", "admin", time() + 3600, '/');

print_r($_COOKIE);
