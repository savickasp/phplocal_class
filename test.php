<?php

class File {

    public function displayContent($filename): bool {
        $result = true;

        try {
            print "read content" . PHP_EOL;
            $content = file_get_contents($filename);
            print 'display content' .
                    PHP_EOL;
            print $content;
        } catch (Exception $ex) {
            $result = false;
        }
        return $result;
    }

}

$file = new File();
$file->displayContent('text.txt');