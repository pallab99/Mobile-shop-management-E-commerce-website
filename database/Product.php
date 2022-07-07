<?php

// Use to fetch product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)   /*dependency injection */
    {
        if (!isset($db->con)) return null; /* if( db con it not set ) then return null  */
        $this->db = $db; /* else this bd ke incilize   korbo null diye upoere db diye  */
    }

    // fetch product data using getData Method
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}"); // product theke sob data nibe , $table use korsi jate amra onno table ar data use korar somoi abr kora nah lage .. sudu call korlei hobe ..function ar mto
        // store all data in reslut variable
        $resultArray = array();  // empty array

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){  // fetch result row  as asosiative arrary
            $resultArray[] = $item; // store a row in array
        }

        return $resultArray;
    }

    // get product using item id for cart item show
    public function getProduct($item_id = null, $table= 'product'){
        if (isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");// database theke akbar a akta  item khuje dibe aita product table thke

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item; // store a row of data in a array
            }

            return $resultArray;
        }
    }

}