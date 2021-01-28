<?php
define('REGEXNAME','#^([A-Za-z]+([ ]?[a-z]?[\'-]?[A-Za-z]+)*)$#');
define('REGEXBIRTHDAY' , '#^(\d{4})-(\d{2})-(\d{2})$#');
define('REGEXMAIL' , '#\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b#');
define('REGEXPHONE' , '#(0|\+33)[1-9]([ -]?[0-9]{2}){4}#');
define('REGEXNUMRUE' , '#^([0-9]+ ?(bis|ter){0,1})$#');
// define('REGEXCP' , '#^[0-9]([0-9]|B|b)([0-9]){3}$#');
define('REGEXCP' , '#^([0-9]{2}|(2A|2a|2B|2b))([0-9]){3}$|^(971|972|973|974)$#');
define('REGEXNATIONALITE' , '#^[A-Za-z -\']*$#');
define('REGEXCITY' , '#^([a-zA-Z -\'])$#');
define('REGEXDIPLOME' , '#^[0|1|2|3]$#');
define('REGEXANPE' , '#^[0-9a-zA-Z]{5,15}$#');
define('REGEXCODECURL' , '#^(http(s)?:\/\/www.codecademy.com\/profiles\/)([a-zA-Z\d]+)$#');
define('REGEXBADGE' , '#^([0-9]){1,3}$#');
define('REGEXSTRING' , '[^<>]');
define('REGEXCHECKBOX', '#[0|1]#');