<div class="container" style="width:80%; margin-left:10%; margin-top:1%">
     <div class="panel panel-default" style="background:#f7f7f7">
        <div class="panel-heading" style="background:#d0d0d0">Recently Added Items</div>
            <div class="row">
                <div class="col-sm-4">
                    <?php foreach ($newestBook as $product) { ?>
                        <div class="panel-body"><a href="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><img  <?php if (isset($product->Image_blob1) && $product->Image_blob1 != "")
                                                        echo 'src="data:image/jpeg;base64,'.base64_encode($product->Image_blob1).'" height="150" width="150"';
                                                        else echo 'src="http://placehold.it/150x80?text=IMAGE" ' ?>class="img-responsive " style="width:304px;height:228px;" alt="Image"></a></div>
		    <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                         <div class=" " style="float:left">Item name </div>
                         <div class=" " style="float:left; margin-left: 5%"> : <?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Price  </div>
                         <div class=" " style="float:left; margin-left: 16%">  : $<?php if (isset($product->Price)) echo htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Date Upload : </div>
                         <div class=" " style="float:left; margin-left: 1%"> <?php if (isset($product->Postdate)) echo htmlspecialchars(date("Y-m-d", strtotime($product->Postdate)), ENT_QUOTES, 'UTF-8'); ?></div></br></br>
                         <div class="row col-lg-offset-2">                               
                         <div class="col-lg-offset-0" style="float:left;"><form action="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><button class="view-item-button" >View Item</button></div></form>
                         <div class="col-lg-offset-0" style="float:left" id="contact"><form action="<?php echo URL.'confirm/showitem/'. htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?> "><button class="contact-seller-button">Buy Now</button></div></form>
                           </div>
		    <?php } ?>
                    </div>

                </div>
                <div class="col-sm-4">
		    <?php foreach ($newestFurniture as $product) { ?>
                    <div class="panel-body"><a href="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><img  <?php if (isset($product->Image_blob1) && $product->Image_blob1 != "")
                                                        echo 'src="data:image/jpeg;base64,'.base64_encode($product->Image_blob1).'" height="150" width="150"';
                                                        else echo 'src="http://placehold.it/150x80?text=IMAGE" ' ?>class="img-responsive " style="width:304px;height:228px;" alt="Image"></a></div>
		    <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
			 <div class=" " style="float:left">Item name </div>
                         <div class=" " style="float:left; margin-left: 5%"> : <?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Price  </div>
                         <div class=" " style="float:left; margin-left: 16%">  : $<?php if (isset($product->Price)) echo htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Date Upload : </div>
                         <div class=" " style="float:left; margin-left: 1%"> <?php if (isset($product->Postdate)) echo htmlspecialchars(date("Y-m-d", strtotime($product->Postdate)), ENT_QUOTES, 'UTF-8'); ?></div></br></br>
			 <div class="row col-lg-offset-2">                               
                         <div class="col-lg-offset-0" style="float:left;"><form action="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><button class="view-item-button" >View Item</button></div></form>
                 <div class="col-lg-offset-0" style="float:left" id="contact"><form action="<?php echo URL.'confirm/showitem/'. htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?> "><button class="contact-seller-button">Buy Now</button></div></form>
                         <?php } ?>
			</div>
                    </div>
                </div>
                <div class="col-sm-4">
			 <?php foreach ($newestElectronics as $product) { ?>
                         <div class="panel-body"><a href="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><img  <?php if (isset($product->Image_blob1) && $product->Image_blob1 != "")
                                                        echo 'src="data:image/jpeg;base64,'.base64_encode($product->Image_blob1).'" height="150" width="150"';
                                                        else echo 'src="http://placehold.it/150x80?text=IMAGE" ' ?>class="img-responsive " style="width:304px;height:228px;" alt="Image"></a></div>
			 <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                         <div class=" " style="float:left">Item name </div>
                         <div class=" " style="float:left; margin-left: 5%"> : <?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Price  </div>
                         <div class=" " style="float:left; margin-left: 16%">  : $<?php if (isset($product->Price)) echo htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Date Upload : </div>
                         <div class=" " style="float:left; margin-left: 1%"> <?php if (isset($product->Postdate)) echo htmlspecialchars(date("Y-m-d", strtotime($product->Postdate)), ENT_QUOTES, 'UTF-8'); ?></div></br></br>
                         <div class="row col-lg-offset-2">
                             <div class="col-lg-offset-0" style="float:left;"><form action="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><button class="view-item-button" >View Item</button></div></form>
                             <div class="col-lg-offset-0" style="float:left" id="contact"><form action="<?php echo URL.'confirm/showitem/'. htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?> "><button class="contact-seller-button">Buy Now</button></div></form>
			</div>
		         <?php } ?>
                    </div>
                </div>
               </div>

           <div class="row">
            <div class="col-sm-4">
		    <?php foreach ($newestClothing as $product) { ?>
                    <div class="panel-body"><a href="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><img  <?php if (isset($product->Image_blob1) && $product->Image_blob1 != "")
                                                        echo 'src="data:image/jpeg;base64,'.base64_encode($product->Image_blob1).'" height="150" width="150"';
                                                        else echo 'src="http://placehold.it/150x80?text=IMAGE" ' ?>class="img-responsive " style="width:304px;height:228px;" alt="Image"></a></div>
		    <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                         <div class=" " style="float:left">Item name </div>
                         <div class=" " style="float:left; margin-left: 5%"> : <?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Price  </div>
                         <div class=" " style="float:left; margin-left: 16%">  : $<?php if (isset($product->Price)) echo htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Date Upload : </div>
                         <div class=" " style="float:left; margin-left: 1%"> <?php if (isset($product->Postdate)) echo htmlspecialchars(date("Y-m-d", strtotime($product->Postdate)), ENT_QUOTES, 'UTF-8'); ?></div></br></br>
                         <div class="row col-lg-offset-2">
                             <div class="col-lg-offset-0" style="float:left;"><form action="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><button class="view-item-button" >View Item</button></div></form>
                             <div class="col-lg-offset-0" style="float:left" id="contact"><form action="<?php echo URL.'confirm/showitem/'. htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?> "><button class="contact-seller-button">Buy Now</button></div></form>
		   	 </div>
		    <?php } ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <?php foreach ($newestOfficeSupply as $product) { ?>
                    <div class="panel-body"><a href="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><img  <?php if (isset($product->Image_blob1) && $product->Image_blob1 != "")
                                                        echo 'src="data:image/jpeg;base64,'.base64_encode($product->Image_blob1).'" height="150" width="150"';
                                                        else echo 'src="http://placehold.it/150x80?text=IMAGE" ' ?>class="img-responsive " style="width:304px;height:228px;" alt="Image"></a></div>
		    <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                         <div class=" " style="float:left">Item name </div>
                         <div class=" " style="float:left; margin-left: 5%"> : <?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Price  </div>
                         <div class=" " style="float:left; margin-left: 16%">  : $<?php if (isset($product->Price)) echo htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Date Upload : </div>
                         <div class=" " style="float:left; margin-left: 1%"> <?php if (isset($product->Postdate)) echo htmlspecialchars(date("Y-m-d", strtotime($product->Postdate)), ENT_QUOTES, 'UTF-8'); ?></div></br></br>
                         <div class="row col-lg-offset-2">
                             <div class="col-lg-offset-0" style="float:left;"><form action="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><button class="view-item-button" >View Item</button></div></form>
                             <div class="col-lg-offset-0" style="float:left" id="contact"><form action="<?php echo URL.'confirm/showitem/'. htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?> "><button class="contact-seller-button">Buy Now</button></div></form>
                         </div>
                     <?php } ?>
		     </div>
                </div>
                <div class="col-sm-4">
                   <?php foreach ($newestOther as $product) { ?>
                   <div class="panel-body"><a href="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><img  <?php if (isset($product->Image_blob1) && $product->Image_blob1 != "")
                                                        echo 'src="data:image/jpeg;base64,'.base64_encode($product->Image_blob1).'" height="150" width="150"';
                                                        else echo 'src="http://placehold.it/150x80?text=IMAGE" ' ?>class="img-responsive " style="width:304px;height:228px;" alt="Image"></a></div> 
		   <div class="panel-body meta-style" style="float:left; margin-top: -5%; width:100%">
                         <div class=" " style="float:left">Item name </div>
                         <div class=" " style="float:left; margin-left: 5%"> : <?php if (isset($product->Title)) echo htmlspecialchars($product->Title, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Price  </div>
                         <div class=" " style="float:left; margin-left: 16%">  : $<?php if (isset($product->Price)) echo htmlspecialchars($product->Price, ENT_QUOTES, 'UTF-8'); ?></div></br>
                         <div class=" " style="float:left">Date Upload : </div>
                         <div class=" " style="float:left; margin-left: 1%"> <?php if (isset($product->Postdate)) echo htmlspecialchars(date("Y-m-d", strtotime($product->Postdate)), ENT_QUOTES, 'UTF-8'); ?></div></br></br>
                         <div class="row col-lg-offset-2">
                             <div class="col-lg-offset-0" style="float:left;"><form action="<?php echo URL . 'item/showitem/' . htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?>"><button class="view-item-button" >View Item</button></div></form>
                             <div class="col-lg-offset-0" style="float:left" id="contact"><form action="<?php echo URL.'confirm/showitem/'. htmlspecialchars($product->Product_id, ENT_QUOTES, 'UTF-8'); ?> "><button class="contact-seller-button">Buy Now</button></div></form>
                         </div>
                   <?php } ?> 
		   </div>
                </div> 
                </div>
            </div>
          </div>
      </div>
</div><br>
