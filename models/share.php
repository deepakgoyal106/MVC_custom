<?php

class ShareModel extends Model{
    public function Index(){
        $this->query('select * from shares');
        return $rows = $this->resultSet();
    }
}