<?php
abstract class ModelBase {

    protected static $columns;
    
    public function __construct($data = array()) {
        $data = array_only($data, static::$columns);
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function toArray() {
        $data = array();
        foreach (static::$columns as $column)
            $data[$column] = $this->{$column};
        return $data;
    }

    public function toJSON() {
        return json_encode($this->toArray());
    }

    public function toXML() {
        $attributes = $this->toArray();
        $xml = '<game';
        foreach ($attributes as $key => $value) {
            $xml .= ' '.$key.'="'.$value.'"';
        }
        $xml .= '/>';
        return $xml;
    }
}