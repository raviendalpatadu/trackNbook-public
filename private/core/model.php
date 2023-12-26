<?php
// main model class

// use function PHPSTORM_META\type;

class Model extends Database
{
    public $errors = array();
    // public $table;

    public function __construct()
    {
        if (!property_exists($this, 'table')) {
            $this->table = "tbl_" . strtolower($this::class);
        }
    }


    public function where($column, $value)
    {
        $column = addslashes($column);
        $query = "select * from $this->table where $column = :value";
        // echo 'where ::  '.$query .'<br>';
        $data = $this->query($query, [
            'value' => $value
        ]);

        // run after select
        if (is_array($data) && property_exists($this, 'afterSelect')) {
            foreach ($this->afterSelect as $func) {
                $data = $this->$func($data);
            }
        }

        return $data;
    }
    public function whereOne($column, $value)
    {
        $column = addslashes($column);
        $query = "select * from $this->table where $column = :value";
        // echo 'where ::  '.$query .'<br>';
        $data = $this->query($query, [
            'value' => $value
        ]);

        // run after select
        if (is_array($data) && property_exists($this, 'afterSelect')) {
            foreach ($this->afterSelect as $func) {
                $data = $this->$func($data);
            }
        }
        if (is_array($data)) {
            $data = $data[0];
        }

        return $data;
    }


    public function findAll()
    {

        $query = "select * from $this->table ";

        $data = $this->query($query);
        // run after select
        if (is_array($data) && property_exists($this, 'afterSelect')) {
            foreach ($this->afterSelect as $func) {
                $data = $this->$func($data);
            }
        }

        return $data;
    }

    public function insert($data)
    {
        if (property_exists($this, 'allowedColumns')) {
            foreach ($data as $key => $column) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        if (property_exists($this, 'beforeInsert')) {
            foreach ($this->beforeInsert as $func) {
                $data = $this->$func($data);
            }
        }


        $keys = array_keys($data);
        $column = implode(',', $keys);
        $value = implode(',:', $keys);

        $query = "insert into $this->table ($column) values(:$value)";

        echo $query;
        return $this->query($query, $data);
    }


    public function update($id, $data, $id_feild = '')
    {
        $str = '';
        foreach ($data as $key => $value) {
            $str .= $key . "= :" . $key . ",";
        }
        $str = trim($str, ",");
        $data['id'] = $id;
        // echo "{$id}<pre>";
        //     print_r($data);
        //     echo "</pre>";
        try {
            if ($id_feild == '') {
                $query = "update $this->table set $str where " . strtolower($this::class) . "_id = :id";
            } else {
                $query = "update $this->table set $str where $id_feild = :id";
            }
            return $this->query($query, $data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function delete($id, $id_feild = '')
    {
        $data['id'] = $id;

        try {
            if ($id_feild == '') {
                $query = "delete from $this->table where " . strtolower($this::class) . "_id = :id";
            } else {
                $query = "delete from $this->table where $id_feild = :id";
            }
            return $this->query($query, $data);
        } catch (PDOException $e) {
            die($e->getMessage());

        }

    }


    public function getCount()
    {
        try {
            $query = "select count(*) as count from $this->table";
            $data = $this->query($query);
            return $data[0]->count;
        } catch (PDOException $e) {
            die($e->getMessage());

        }
    }

}

