<div>
    <h2 style="font-family: 'quicksandbold'; font-size:16px; color:#313131; padding-bottom:8px;">Dear Member</h2>
    <span style="color: #646464;">Your payment was successful, thank you for purchase.</span><br/>
    <span style="color: #646464;">Item Number : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09"><?php echo $item_number; ?></strong>
  	</span><br/>
	<span style="color: #646464;">TXN ID : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09"><?php echo $txn_id; ?></strong>
  	</span><br/>
	<span style="color: #646464;">Amount Paid : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09">$<?php echo $payment_amt.' '.$currency_code; ?></strong>
  	</span><br/>
	<span style="color: #646464;">Payment Status : 
      	<strong style="font:15px Arial,Helvetica,sans-serif;color:#f09"><?php echo $status; ?></strong>
  	</span><br/>
</div>

<pre>

  The datas to store into your db is in your url so you can get the values by using $_GET[] method
  and store into your db


</pre>

