<?php

/**
 * Created by PhpStorm.
 * User: trung
 * Date: 26/06/2017
 * Time: 7:26 CH
 */

require_once 'QueryBuilderException.php';

class QueryBuilder
{
    private $table;
    private $select_properties;
    private $wheres = [];
    private $limit;
    private $offset;
    private $orderBy;

    function __construct($table)
    {
        $this->table = $table;
    }

    static function table($table){
        return new QueryBuilder($table);
    }

    function buildQuery(){
        if(!isset($this->select_properties)){
            throw new QueryBuilderException();
        }
        $queryString = 'SELECT '. $this->select_properties . ' from ' .$this->table;
        if(count($this->wheres) > 0){
            $queryString .= ' WHERE';
        }
        foreach ($this->wheres as $index => $where){
            //TODO: Them validate cho $where
            $queryString .= ' ' . $where[0] . $where[1] . $where[2];
            if(count($this->wheres) - 1 > $index ){
                $queryString .= 'AND';
            }
        }
        return $queryString;
    }

    function select($properties){
        $this->select_properties = $properties;
        return $this;
    }

    function where($condition){
        $this->wheres[] = $condition;
        return $this;
    }

    function join($join){

    }

    function orderBy(){}
}