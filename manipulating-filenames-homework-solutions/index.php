<?php

// Manipulating Filenames
// 3 different ways to capture my-file
// Store result in $file_name
// Use glob and foreach, if you need to filter through a set of files.

$file_path = 'images/my-file.txt';

# 1 - Best
//$file_name = pathinfo($file_path, PATHINFO_FILENAME);
//echo $file_name;

# 2 - Second Best
//$file_name = basename($file_path, '.txt');
//echo $file_name;

# 3 - Blehh
// explode and implode
//$file_name = substr(explode('/', $file_path)[1], 0, -4); // what if the extension is more than 4 characters?
//echo $file_name;


#4 - Not necessary.
//$file_name = explode('/', $file_path);
////$file_name = str_replace('.txt', '', end($file_name));
/* OR */ //$file_name = preg_replace('/\.txt$/i', '', end($file_name));
//echo $file_name;