<?php

require_once 'src/file_handling.php';

class FileHandlingTest extends \PHPUnit_Framework_Testcase
{

    public function testCanBeNegated()
    {
        $filename = "apsley_2016-03-27-heb-09_carolan.mp3";

        $result = handle_file($filename);


        $this->assertEquals('Carolan', $result['author']);
    }

}
