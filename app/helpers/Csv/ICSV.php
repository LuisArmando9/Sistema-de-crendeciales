<?php
namespace App\helpers\Csv;

interface ICSV {
    public function getTableData();
    public function getFieldsOfTable();
    public  function insert($array=null);
}