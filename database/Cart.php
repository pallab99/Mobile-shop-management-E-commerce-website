<?php

// php cart class
class Cart
{
    public $db = null; // database conecting using this proparty

    public function __construct(DBController $db)   /*dependency injection */
    {
        if (!isset($db->con)) return null; /* if( db con it not set ) then return null  */
        $this->db = $db; /* else this bd ke incilize   korbo null diye upoere db diye  */
    }

    // insert into cart table
    public  function insertIntoCart($params = null, $table = "cart"){  // database ar cart table a store korbo
        if ($this->db->con != null){ // connection jodi null nah hoi
            if ($params != null){ // jodi parameter o null nah hoi
                // "Insert into cart(user_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params)); // aita diye cart ar kon coloum a rakhbo seita fix kortyci ,,cart(user_id)

                $values = implode(',' , array_values($params)); // aita diye value fix kortyce ,,values (0)"

                // create sql query && teporarily store in query_string
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query && for stroing result
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get user_id and item_id and insert into cart table
    public  function addToCart($userid, $itemid){ // 2 perameter userid & itemid // product ar nije je buttun thake oi ta
        if (isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid, // user
                "item_id" => $itemid // item id pass korbo
            );

            // insert data into cart table
            $result = $this->insertIntoCart($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']); // aita current index file return kore mane reload kore
            }
        }
    }

    // delete cart item using cart item id
    // aitake _cart-template theke call korbe id soho
    public function deleteCart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}"); // sql query to delete from the table cart
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']); // reload page r jonno
            }
            return $result;
        }
    }

    // delete cart item using cart item id
    // aitake _cart-template theke call korbe id soho
    public function deletewishlist($item_id = null, $table = 'wishlist'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}"); // sql query to delete from the table cart
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']); // reload page r jonno
            }
            return $result;
        }
    }


    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    // get item_it of shopping cart list
    // amra doubicate item rakhbo nah cart a , ajonno amra cart iteam gula ai cart array teke ber korbo
    public function getCartId($cartArray = null, $key = "item_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){ // iterate all values of  cartarray
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    // Save for later
    public function saveForLater($item_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";

            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location :" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }


}
?>