<?php
// strings: https://www.php.net/manual/en/ref.strings.php
$srt = 'Hello from PHP!';
echo strtolower($srt).'<br>';
echo strtoupper($srt).'<br>';
echo str_replace("PHP", "TheCodeholic", $srt).'<br>';
echo str_word_count($srt).'<br>';