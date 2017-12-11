<?php
namespace System\Classs;

class FilesGetArray
{
    protected   $file_path              =       null;
    protected   $get_array              =       [];
    protected   $result_array           =       [];

    public function __construct()
    {

    }

    public function get_file_cotent($file_path)
    {
        $this->file_path = $file_path;
        $this->get_array = file($this->file_path);
        $this->traverse_array($this->get_array);
        return $this->result_array;
    }

    private function traverse_array(array $databases)
    {
        $array = [];
        foreach($databases as $key => $value){
            $array                              =       explode('=', $value);
            $this->result_array[$array[0]]      =       trim($array[1]);
        }
    }
}