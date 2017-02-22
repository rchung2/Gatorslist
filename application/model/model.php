<?php

class Model
{
    /**
     * @var null Data access object
     */
    public $dao = null;

    /**
     * @param object $db A PDO database connection
     */
    function __construct()
    {
        require APP . 'dao/dao.php';
        $this->dao = new Dao();
    }

    //register controller
    //get info of all user
    public function getAllUsers()
    {
        return $this->dao->get([], "allUsers");
    }

    //get user
    public function loginUser($email, $password)
    {
        $parameters = [
            ":email" => $email,
            ":password" => $password,
        ];
        return $this->dao->get($parameters, "user");
    }

    //add a user
    public function createUser($email, $password, $firstname, $lastname)
    {
        $parameters = [
            ":email" => $email,
            ":password" => $password,
            ":firstname" => $firstname,
            ":lastname" => $lastname,
        ];
        $this->dao->create($parameters, "user");

    }

    public function getUserInfo($user_id)
    {
        $parameters = [
            ":user_id" => $user_id,
        ];
        return $this->dao->get($parameters, "userInfo");
    }

    public function getUserProdcuts($user_id)
    {
        $parameters = [
            ":user_id" => $user_id,
        ];
        return $this->dao->get($parameters, "userProducts");
    }

    //delete user
    public function deleteUser($user_id)
    {
        $parameters = [
            ":user_id" => $user_id,
        ];
        $this->dao->delete($parameters, "user");

    }

    //product controller
    //search product, return product summary include image thumbnail.
    public function getAllProducts($searchinput, $category)
    {
        if ($category == "") {
            $parameters = [
                ":searchinput" => $searchinput,
            ];
            return $this->dao->get($parameters, "allProducts");
        } else {
            $parameters = [
                ":searchinput" => $searchinput,
                ":category" => $category,
            ];
            return $this->dao->get($parameters, "ProductsByCategory");
        }

    }

    //calls the data access object to return just the list of all of the newest items from the database, one per category to populate the home page with the newest items added to the database
    public function getAllHomeProducts($category)
    {
        $parameters = [
            ":category" => $category,
        ];
        return $this->dao->get($parameters, "allHomeProducts");

    }

    //sorting function that is aware of the current filter type, if applied; it will include the correct filter type on top of the sorting if detected passing through the correct parameters
    public function getAllSortedProducts($searchinput, $category, $sortType, $filterType, $filterInput, $secondFilterInput = "", $thirdFilterInput = "")
    {
        if ($filterInput != "")
            $tempInput = $filterInput;
        else
            $tempInput = "";
        if ($category == "") {
            if ($filterInput == "") {

                $parameters = [
                    ":searchinput" => $searchinput,
                ];
            } else {

                $parameters = [
                    ":filterType" => $filterType,
                    ":filterInput" => $tempInput,
                    ":secondFilterInput" => $secondFilterInput,
                    ":thirdFilterInput" => $thirdFilterInput,
                    ":searchinput" => $searchinput,
                ];
            }
            if ($sortType == "highprice")
                return $this->dao->get($parameters, "allHighProducts");

            else if ($sortType == "lowprice")
                return $this->dao->get($parameters, "allLowProducts");

            else if ($sortType == "date")
                return $this->dao->get($parameters, "allNewestProducts");
        } else {
            if ($filterInput = "") {
                $parameters = [
                    ":searchinput" => $searchinput,
                    ":category" => $category,
                ];
            } else {
                $parameters = [
                    ":filterType" => $filterType,
                    ":filterInput" => $tempInput,
                    ":secondFilterInput" => $secondFilterInput,
                    ":thirdFilterInput" => $thirdFilterInput,
                    ":searchinput" => $searchinput,
                    ":category" => $category,
                ];
            }

            if ($sortType == "highprice")
                return $this->dao->get($parameters, "allHighProducts");

            else if ($sortType == "lowprice")
                return $this->dao->get($parameters, "allLowProducts");

            else if ($sortType == "date")
                return $this->dao->get($parameters, "allNewestProducts");
        }

    }

    //filter function that takes in the filtering type and sends the correct paramaters to the data access object based on whether it's a price filter or a condition filter; the last two arguments are optional
    public function getAllFilteredProducts($searchinput, $category, $filterType, $filterInput, $secondFilterInput = "", $thirdFilterInput = "")
    {
        if ($category == "") {
            if ($filterType == "price") {
                $parameters = [
                    ":searchinput" => $searchinput,
                    ":minprice" => $filterInput,
                    ":maxprice" => $secondFilterInput,
                ];

                return $this->dao->get($parameters, "allFilterPriceProducts");
            } else if ($filterType == "both") {
                $parameters = [
                    ":searchinput" => $searchinput,
                    ":itemcondition" => $filterInput,
                    ":minprice" => $secondFilterInput,
                    ":maxprice" => $thirdFilterInput,
                ];

                return $this->dao->get($parameters, "allFilterBothProducts");
            } else if ($filterType == "condition") {
                $parameters = [
                    ":searchinput" => $searchinput,
                    ":itemcondition" => $filterInput,
                ];
                return $this->dao->get($parameters, "allFilterConditionProducts");
            }
        } else {
            if ($filterType == "price") {
                $parameters = [
                    ":searchinput" => $searchinput,
                    ":category" => $category,
                    ":minprice" => $filterInput,
                    ":maxprice" => $secondFilterInput,
                ];

                return $this->dao->get($parameters, "allFilterPriceProducts");
            } else if ($filterType == "both") {
                $parameters = [
                    ":searchinput" => $searchinput,
                    ":category" => $category,
                    ":itemcondition" => $filterInput,
                    ":minprice" => $secondFilterInput,
                    ":maxprice" => $thirdFilterInput,
                ];

                return $this->dao->get($parameters, "allFilterBothProducts");
            } else if ($filterType == "condition") {
                $parameters = [
                    ":searchinput" => $searchinput,
                    ":category" => $category,
                    ":itemcondition" => $filterInput,
                ];
                return $this->dao->get($parameters, "allFilterConditionProducts");
            }
        }
    }


    //item controller
    // add product with images
    public function createItem($seller_id, $title, $description, $price, $condition, $date, $category_Id, $image1, $image2, $image3, $image4)
    {
        $parameters = [
            ":seller_id" => $seller_id,
            ":title" => $title,
            ":description" => $description,
            ":price" => $price,
            ":condition" => $condition,
            ":date" => $date,
            ":category_Id" => $category_Id,
            ":image1" => $image1,
            ":image2" => $image2,
            ":image3" => $image3,
            ":image4" => $image4,
        ];
        $this->dao->create($parameters, "item");
    }

    //edit product price
    public function editItem($product_id, $title, $description, $price, $condition, $date, $category_Id, $image1, $image2, $image3, $image4)
    {
        $parameters = [
            ":product_id" => $product_id,
            ":title" => $title,
            ":description" => $description,
            ":price" => $price,
            ":condition" => $condition,
            ":date" => $date,
            ":category_Id" => $category_Id,
            ":image1" => $image1,
            ":image2" => $image2,
            ":image3" => $image3,
            ":image4" => $image4,
        ];

        $this->dao->update($parameters, "item");
    }

    //delete a product
    public function deleteItem($product_id)
    {
        $parameters = [
            ":product_id" => $product_id,
        ];
        $this->dao->delete($parameters, "item");
    }

    //get an item with full description include image
    public function getItemDetail($product_id)
    {
        $parameters = [
            ":product_id" => $product_id,
        ];
        return $this->dao->get($parameters, "itemDetail");
    }

    public function getItem($seller_id)
    {
        $parameters = [
            ":seller_id" => $seller_id,
        ];
        return $this->dao->get($parameters, "userItems");
    }

    //order controller
    //purchase function, create an order, change order status to in process
    public function createOrder($product_id, $buyer_id, $date, $status)
    {
        $parameters = [
            ":product_id" => $product_id,
            ":buyer_id" => $buyer_id,
            ":date" => $date,
            ":status" => $status,
        ];
        $this->dao->create($parameters, "order");
    }

    //edit order status, buyer or seller can change order status to received or cancelled
    public function editStatus($order_id, $status)
    {
        $parameters = [
            ":order_id" => $order_id,
            ":status" => $status,
        ];
        $this->dao->update($parameters, "editStatus");
    }

    //get order, buyer or seller can change order status to received or cancelled
    public function getOrder($order_id)
    {
        $parameters = [
            ":order_id" => $order_id,
        ];
        return $this->dao->get($parameters, "order");
    }

    public function getProductCategory()
    {
        $parameters = [

        ];
        return $this->dao->get($parameters, "productCategory");
    }

}
