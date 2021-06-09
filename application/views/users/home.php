<div class="top-brands">
    <div class="container">
        <h3>Hot Offers</h3>
            <div class="agile_top_brands_grids">
                <?php foreach ($models as $model): ?>
                    <div class="col-md-3 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <!-- <div class="tag"><img src="<?php echo base_url('assets/images/models/'. $model->mDp); ?>" alt=" " class="img-responsive" /></div> -->
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block" >
                                            <div class="snipcart-thumb">
                                                <a href="#"><img title=" " alt=" " src="<?php echo base_url('assets/images/models/'. $model->mDp); ?>" class='img-responsive card-img-top'></a>		
                                                <p><?= $model->mDescription ?></p>
                                                <h4>$ <?= $model->price ?> <span>15%</span></h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form action="checkout.html" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="<?= $model->mName ?>" />
                                                        <input type="hidden" name="amount" value="<?= $model->price ?>" />
                                                        <input type="hidden" name="discount_amount" value="1.00" />
                                                        <input type="hidden" name="currency_code" value="USD" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                        
                                                </form>
                                        
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>