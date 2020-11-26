<?php
echo sha1("Ismael");
$hash = password_hash('Ismael', PASSWORD_DEFAULT);
echo $hash;