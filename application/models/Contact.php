<?php
class Contact extends CI_model{
    public function sheetData(){
        return[
            ['Name'=>'Rohit','ID'=>101,'contact'=>'12345'],
            ['Name'=>'test1','ID'=>102,'contact'=>'65321'],
            ['Name'=>'test2','ID'=>103,'contact'=>'12436'],
            ['Name'=>'test3','ID'=>104,'contact'=>'09876'],
            ['Name'=>'test4','ID'=>105,'contact'=>'67890'],
            ['Name'=>'test5','ID'=>106,'contact'=>'54321'],
        ];
    }
}
?>