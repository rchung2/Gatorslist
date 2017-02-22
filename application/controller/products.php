<?php

/**
 * Class products
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Products extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://../products/index
     */
    public function index()
    {

        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function searchProducts()
    {
        $categories = $this->model->getProductCategory();

        // if we have GET data to create a new product entry

        if (isset($_GET["submit_search_product"])) {
            // do getAllProducts() in model/model.php
            $products = $this->model->getAllProducts($_GET["searchinput"], $_GET["category"]);
        } else if (isset($_GET["highprice"])) {

            $sortType = "highprice";

            if (($_GET["itemcondition"] != "") && ($_GET["minprice"] != "")) {
                //setting the filter types and characteristics if applicable before sorting
                $filterType = "both";
                $filterInput = ($_GET["itemcondition"]);
                $secondFilterInput = ($_GET["minprice"]);
                $thirdFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput, $thirdFilterInput);
            } else if (isset($_GET["itemcondition"]) && ($_GET["itemcondition"] != "")) {
                $filterInput = ($_GET["itemcondition"]);
                $filterType = "condition";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            } else if (isset($_GET["minprice"]) && ($_GET["minprice"] != "")) {
                $filterType = "price";
                $filterInput = ($_GET["minprice"]);
                $secondFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput);
            } else {
                $filterType = "";
                $filterInput = "";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            }
        } else if (isset($_GET["lowprice"])) {

            $sortType = "lowprice";

            if (($_GET["itemcondition"] != "") && ($_GET["minprice"] != "")) {
                //setting the filter types and characteristics if applicable before sorting
                $filterType = "both";
                $filterInput = ($_GET["itemcondition"]);
                $secondFilterInput = ($_GET["minprice"]);
                $thirdFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput, $thirdFilterInput);
            } else if (isset($_GET["itemcondition"]) && ($_GET["itemcondition"] != "")) {
                $filterInput = ($_GET["itemcondition"]);
                $filterType = "condition";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            } else if (isset($_GET["minprice"]) && ($_GET["minprice"] != "")) {
                $filterType = "price";
                $filterInput = ($_GET["minprice"]);
                $secondFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput);
            } else {
                $filterType = "";
                $filterInput = "";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            }
        } else if (isset($_GET["date"])) {
            $sortType = "date";

            if (($_GET["itemcondition"] != "") && ($_GET["minprice"] != "")) {
                //setting the filter types and characteristics if applicable before sorting
                $filterType = "both";
                $filterInput = ($_GET["itemcondition"]);
                $secondFilterInput = ($_GET["minprice"]);
                $thirdFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput, $thirdFilterInput);
            } else if (isset($_GET["itemcondition"]) && ($_GET["itemcondition"] != "")) {
                $filterInput = ($_GET["itemcondition"]);
                $filterType = "condition";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            } else if (isset($_GET["minprice"]) && ($_GET["minprice"] != "")) {
                $filterType = "price";
                $filterInput = ($_GET["minprice"]);
                $secondFilterInput = ($_GET["maxprice"]);
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput, $secondFilterInput);
            } else {
                $filterType = "";
                $filterInput = "";
                $products = $this->model->getAllSortedProducts($_GET["searchinput"], $_GET["category"], $sortType, $filterType, $filterInput);
            }
        } else if (isset($_GET["submit_filter_price_product"])) {
            //checks whether the itemconditon filter is already set and includes it it in the sql call if so
            if ($_GET["itemcondition"] != "") {
                $filterType = "both";
                $products = $this->model->getAllFilteredProducts($_GET["searchinput"], $_GET["category"], $filterType, $_GET["itemcondition"], $_GET["minprice"], $_GET["maxprice"]);
            } else {
                //otherwise it will just make the sql call with only the price filter involved
                $filterType = "price";
                $products = $this->model->getAllFilteredProducts($_GET["searchinput"], $_GET["category"], $filterType, $_GET["minprice"], $_GET["maxprice"]);
            }
        } else if (isset($_GET["submit_condition_product"])) {

            if ($_GET["itemcondition"] == "") {
                //checks if the price has been set as a filter before making sql call and that the item condition has been set to any condition
                if ($_GET["minprice"] != "") {
                    $filterType = "price";
                    $products = $this->model->getAllFilteredProducts($_GET["searchinput"], $_GET["category"], $filterType, $_GET["minprice"], $_GET["maxprice"]);
                } else
                    //will return mysql data with all of the products otherwise if there has not been a price set and any condition has been selected
                    $products = $this->model->getAllProducts($_GET["searchinput"], $_GET["category"]);
            } else if ($_GET["minprice"] != "" && $_GET["itemcondition"] != "") {
                //both filters has been set and will make sql call accordingly
                $filterType = "both";
                $products = $this->model->getAllFilteredProducts($_GET["searchinput"], $_GET["category"], $filterType, $_GET["itemcondition"], $_GET["minprice"], $_GET["maxprice"]);
            } else {
                //only filter for condition has been set
                $filterType = "condition";
                $products = $this->model->getAllFilteredProducts($_GET["searchinput"], $_GET["category"], $filterType, $_GET["itemcondition"]);
            }
        } else if (isset($_GET["reset_filter"])) {
            //resets all of the filters and displays search results only based on the search input and category selected if applicable
            $products = $this->model->getAllProducts($_GET["searchinput"], $_GET["category"]);
        }
        // where to go after product has been added
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/product.php';
        require APP . 'view/_templates/footer.php';
//resets all of the filters and displays search results only based on the search input and category selected if applicable

    }

    public function getProductCategory()
    {

        $categories = $this->model->getProductCategory();
        foreach ($categories as $category) {
            echo $category->Category_name;
        }


        // where to go after product has been added
//        require APP . 'view/_templates/header.php';
//        require APP . 'view/products/index.php';
//        require APP . 'view/_templates/footer.php';

    }

}
