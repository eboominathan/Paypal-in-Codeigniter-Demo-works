
<link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/star-rating.js" type="text/javascript"></script>

<img src="<?php echo base_url();?>assets/images/logo.png" style="width:300px">


<style type="text/css">
.text
{
   color: #113984;
font-size: 36px;
padding: 0px 123px;
margin: 0px 55px 6px 187px;
}
    .thumbnail
    {
        box-shadow: 1px 3px 2px 1px grey;
    }
    .container
    {
     margin: 55px 93px !important;
 }
</style>
<p>
<h3>Tutorial for  Creating PayPal Sandbox Test Account and Website Payments Pro Account</h3>

    <a href="http://www.codexworld.com/creating-paypal-sandbox-test-account-website-payments-pro-account" target="_blank">Click here</a></p>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <?php if(!empty($products)): foreach($products as $product): ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url().'assets/images/'.$product['image']; ?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$<?php echo $product['price']; ?> USD</h4>
                                <h4><a href="javascript:void(0);"><?php echo $product['name']; ?></a></h4>
                                <p> <a target="_blank" href="http://www.facebook.com/eboominathan">See more details</a>.</p>
                            </div>
                            <div class="ratings">
                               <input id="input-2c" class="rating" min="0" max="5" step="0.5" data-size="sm"
                               data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa">
                               <a href="<?php echo base_url().'products/buy/'.$product['id']; ?>"><img src="<?php echo base_url(); ?>assets/images/buy.gif" style="width: 100px;"></a>


                           </div>
                       </div>
                   </div>
               <?php endforeach; endif; ?>
           </div>
       </div>
   </div>
</div>



    







