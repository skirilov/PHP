<?php

abstract class File
{
    private $_fileName;

    private function __construct($fileName)
    {
        if (is_string($fileName) && file_exists($fileName)) {
            $this->_fileName = $fileName;
        }
        else {
            throw Exception('Invalid file name');
        }
    }

    abstract public function readFile();

    public static function Factory($fileName)
    {
        $extension = substr($fileName, strrpos($fileName, '.') + 1);

        switch ($extension)
        {
            case ‘doc’: return new File_doc($fileName); break;
            case ‘xls’: return new File_xls($fileName); break;
            case ‘ppt’: return new File_ppt($fileName); break;
            default: throw new Exception('Unknown file type');
        }
    }
}
?>