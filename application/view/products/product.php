<div class="container" style="width:80%; margin-left:10%;">
    <div class="panel panel-default" style="background:;">
        <div class="panel-heading clearfix" style="background:#d0d0d0">
            <h5 class="panel-title pull-left"><b>Search Results : <?php echo count($products) ?>
                    items <?php if (isset($_GET['highprice'])) echo " > High to Low"; else if (isset($_GET['lowprice'])) echo " > Low to High"; else if (isset($_GET['date'])) echo " > Newly Listed"; ?> <?php if (isset($_GET['minprice']) && ($_GET['minprice'] != "")) {
                        echo " > $";
                        echo htmlspecialchars($_GET['minprice']);
                        echo " - ";
                        echo "$";
                        echo htmlspecialchars($_GET['maxprice']);
                    }
                    if (isset($_GET['itemcondition']) && ($_GET['itemcondition'] != "")) {
                        echo " > ";
                        echo htmlspecialchars($_GET['itemcondition']);
                    } ?> </b></h5>
        </div>
        <div class="panel-body" style="background-color:#f7f7f7;">
            <div class="col-md-4">
                <div class="" style="background-color:">
                    <h5 style="font-size:14px">Sort by:</h5>
                    <div class="row">
                        <div class="col-sm-3" style="margin-right:1.2vw">
                            <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                                <input type="hidden" name="searchinput"
                                       value="<?php echo htmlspecialchars($_GET['searchinput']); ?>">
                                <input type="hidden" name="category"
                                       value="<?php echo htmlspecialchars($_GET['category']); ?>">
                                <input type="hidden" name="minprice"
                                       value="<?php if (isset($_GET['minprice'])) echo htmlspecialchars($_GET['minprice']); ?>">
                                <input type="hidden" name="maxprice"
                                       value="<?php if (isset($_GET['maxprice'])) echo htmlspecialchars($_GET['maxprice']); ?>">
                                <input type="hidden" name="itemcondition"
                                       value="<?php if (isset($_GET['itemcondition'])) echo htmlspecialchars($_GET['itemcondition']); ?>">
                                <input class="btn btn-info" type="submit" name="highprice" value="Highest Price"/>
                            </form>
                        </div>
                        <div class="col-sm-3" style="margin-right:1.2vw">
                            <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                                <input type="hidden" name="searchinput"
                                       value="<?php echo htmlspecialchars($_GET['searchinput']); ?>">
                                <input type="hidden" name="category"
                                       value="<?php echo htmlspecialchars($_GET['category']); ?>">
                                <input type="hidden" name="minprice"
                                       value="<?php if (isset($_GET['minprice'])) echo htmlspecialchars($_GET['minprice']); ?>">
                                <input type="hidden" name="maxprice"
                                       value="<?php if (isset($_GET['maxprice'])) echo htmlspecialchars($_GET['maxprice']); ?>">
                                <input type="hidden" name="itemcondition"
                                       value="<?php if (isset($_GET['itemcondition'])) echo htmlspecialchars($_GET['itemcondition']); ?>">

                                <input class="btn btn-info" type="submit" name="lowprice" value="Lowest Price"/>
                            </form>
                        </div>
                        <div class="col-sm-3">
                            <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                                <input type="hidden" name="searchinput"
                                       value="<?php if (isset($_GET['searchinput'])) echo htmlspecialchars($_GET['searchinput']); ?>">
                                <input type="hidden" name="category"
                                       value="<?php echo htmlspecialchars($_GET['category']); ?>">
                                <input type="hidden" name="minprice"
                                       value="<?php if (isset($_GET['minprice'])) echo htmlspecialchars($_GET['minprice']); ?>">
                                <input type="hidden" name="maxprice"
                                       value="<?php if (isset($_GET['maxprice'])) echo htmlspecialchars($_GET['maxprice']); ?>">
                                <input type="hidden" name="itemcondition"
                                       value="<?php if (isset($_GET['itemcondition'])) echo htmlspecialchars($_GET['itemcondition']); ?>">
                                <input class="btn btn-info " type="submit" name="date" value="Newly Listed"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 " style="background-color:;float:left">
                <h5 class="col-lg-offset-1" style="font-size:14px">Filter by Price Range:</h5>
                <div class="row text-center col-lg-12">
                    <form class="form-inline" action="<?php echo URL; ?>products/searchproducts" method="GET">
                        <input type="hidden" name="searchinput"
                               value="<?php echo htmlspecialchars($_GET['searchinput']); ?>">
                        <input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']); ?>">
                        <!--<input type="hidden" name="sortby"
                               value="<?php if (isset($_GET['highprice'])) echo htmlspecialchars($_GET['highprice']); else if (isset($_GET['lowprice'])) echo htmlspecialchars($_GET['lowprice']); else if (isset($_GET['date'])) echo htmlspecialchars($_GET['date']); ?>">-->
                        <input type="hidden" name="itemcondition"
                               value="<?php if (isset($_GET['itemcondition'])) echo htmlspecialchars($_GET['itemcondition']); ?>">

                        <div class="form-group float-left col-lg-offset-1">
                            <input class="form-control" type="text" name="minprice" size="7" value=""
                                   placeholder="Min Price" required/>
                        </div>
                        <div class="form-group float-left">
                            <input class="form-control" type="text" name="maxprice" value="" size="7"
                                   placeholder="Max Price" required/>
                        </div>
                        <div class="form-group float-left">
                            <input type="submit" class="btn btn-info" name="submit_filter_price_product" value="Submit">
                        </div>
                    </form>
                </div>
                <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                    <input type="hidden" name="searchinput"
                           value="<?php echo htmlspecialchars($_GET['searchinput']); ?>">
                    <input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']); ?>">
                    <!--<input type="hidden" name="sortby"
                           value="<?php if (isset($_GET['highprice'])) echo htmlspecialchars($_GET['highprice']); else if (isset($_GET['lowprice'])) echo htmlspecialchars($_GET['lowprice']); else if (isset($_GET['date'])) echo htmlspecialchars($_GET['date']); ?>">-->
                    <input type="hidden" name="minprice"
                           value="<?php if (isset($_GET['minprice'])) echo htmlspecialchars($_GET['minprice']); ?>">
                    <input type="hidden" name="maxprice"
                           value="<?php if (isset($_GET['maxprice'])) echo htmlspecialchars($_GET['maxprice']); ?>">
            </div>
            <div class="col-md-2 " style="float:left">
                <h5 style="font-size:14px">Filter by Condition:</h5>
                <div class="row">
                    <div class="col-xs-6 float-left">
                        <select name="itemcondition" class="form-control">
                            <option value="" size="2">Any</option>
                            <option>New</option>
                            <option>Used</option>
                        </select>
                    </div>
                    <div class="col-xs-6 float-left">
                        <input type="submit" class="btn btn-info" style="margin-left:-2vw"
                               name="submit_condition_product" value="Submit"></form>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="float:right">
                <h5 style="font-size:14px">Reset Filter:</h5>
                <form action="<?php echo URL; ?>products/searchproducts" method="GET">
                    <input type="hidden" name="searchinput"
                           value="<?php echo htmlspecialchars($_GET['searchinput']); ?>">
                    <input type="hidden" name="category" value="<?php echo htmlspecialchars($_GET['category']); ?>">

                    <input type="submit" class="btn btn-info " name="reset_filter" value="Reset">

                </form>
            </div>
        </div>
        <br>

        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-sm-4">
                    <div class="panel-body"><a
                            href="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><img
                                <?php if (isset($product->Image_blob1) && $product->Image_blob1 != "")
                                    echo 'src="data:image/jpeg;base64,' . base64_encode($product->Image_blob1) . '" height="150" width="150"';
                                else echo 'src="http://placehold.it/150x80?text=IMAGE" ' ?>class="img-responsive "
                                style="width:304px;height:228px;" alt="Image"></a></div>
                    <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                        <div class=" " style="float:left">Item Name</div>
                        <div class=" " style="float:left;">
                            : <?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></div>
                        </br>
                        <div class=" " style="float:left">Price</div>
                        <div class=" " style="float:left;">
                            : <?php if (isset($product->Price)) echo "$" . htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></div>
                        </br>
                        <div class=" " style="float:left">Item Condition</div>
                        <div class=" " style="float:left;">
                            : <?php if (isset($product->ItemCondition)) echo htmlspecialchars($product->ItemCondition, ENT_QUOTES, 'UTF-8'); ?></div>
                        </br>
                        <div class=" " style="float:left">Date Upload :</div>
                        <div class=" "
                             style="float:left;"> <?php if (isset($product->Postdate)) echo htmlspecialchars(date("Y-m-d", strtotime($product->Postdate)), ENT_QUOTES, 'UTF-8'); ?></div>
                        </br></br>
                        <div class="row col-lg-offset-2">
                            <div class="col-lg-offset-0" style="float:left;">
                                <form
                                    action="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>">
                                    <button class="view-item-button">View Item</button>
                            </div>
                            </form>
                            <div class="col-lg-offset-0" style="float:left" id="contact">
                                <form
                                    action="<?php echo URL . 'confirm/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>">
                                    <button class="contact-seller-button">Buy Now</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<br>

<input type="hidden" name="itemcondition" value="<?php echo htmlspecialchars($_GET['itemcondition']); ?>">
<input type="hidden" name="minimumprice" value="<?php echo htmlspecialchars($_GET['minprice']); ?>">
<input type="hidden" name="highestprice" value="<?php echo htmlspecialchars($_GET['maxprice']); ?>">

