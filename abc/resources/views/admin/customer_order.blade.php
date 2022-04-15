@include('admin.Include.header')
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
								<?php if (Request::segment(2) == 'subscribe-order') { ?>
									<header>Subscription List</header>
								<?php }else{?>
									<header>Orders List</header>
								<?php } ?>
								</div>
								<div class="card-body ">
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="example4">
											<thead>
<?php if (session('logAdmin')->role == 'customer') {?>
<?php if (Request::segment(2) == 'subscribe-order') { ?>
			<tr>
				<th> # </th>
				<th> Invoice No </th>
				<th> Name </th>
				<th> Delivery  </th>
				<th> Amount </th>
				<th> Order date </th>
				<th> days </th>
				<th> Status </th>
			</tr>
<?php }else{ ?>
			<tr>
				<th> # </th>
				<th> Invoice No </th>
				<th> Name </th>
				<th> Pickup  </th>
				<th > Delivery  </th>
				<th > Amount </th>
				<th > Order date </th>
				<th > Status </th>
			</tr>
<?php } }else{?>

			<tr>
				<th> # </th>
				<th> Invoice No </th>
				<th> Name </th>
				<th> Email </th>
				<th> Phone </th>
				<th> Pickup  </th>
				<th > Delivery  </th>
				<th > Amount </th>
				<th > Order date </th>
				<th > Status </th>
			</tr>
<?php } ?>
											</thead>
											<tbody>
<?php if (session('logAdmin')->role == 'customer') {?>
			<?php if (Request::segment(2) == 'subscribe-order') { ?>
			<?php $count=1; foreach ($customer_order as $key) { ?>
			<tr class="odd gradeX">
			<td class=""><?=$count?></td>
			<td class=""><a href="<?=url('dashboard/order-details').'/'.$key->order_id?>"><?=$key->invoice_id?></a></td>
			<td class=""><?=$key->name?></td>
			<td class=""><?=$key->delivery_date?></td>
			<td class="">£<?=$key->amount?></td>
			<td class=""><?=$key->order_date?></td>
			<td class=""><?php echo $key->first_day; if (!empty($key->second_day)) {echo ",". $key->second_day; } ?></td>
			<td><?php if ($key->status == 1) { ?>
			<span class="label label-sm label-success">Complete </span>
			<?php }else{ ?>
			<span class="label label-sm label-warning">Pending </span>
			<?php } ?></td>
			</tr>
			<?php $count++;} ?>

			<?php }else{ ?>
			<?php $count=1; foreach ($customer_order as $key) { ?>
			<tr class="odd gradeX">
			<td class=""><?=$count?></td>
			<td class=""><a href="<?=url('dashboard/order-details').'/'.$key->order_id?>"><?=$key->invoice_id?></a></td>
			<td class=""><?=$key->name?></td>
			<td class=""><?=$key->pickup_date?></td>
			<td class=""><?=$key->delivery_date?></td>
			<td class="">£<?=$key->amount?></td>
			<td class=""><?=$key->order_date?></td>
			<td><?php if ($key->status == 1) { ?>
			<span class="label label-sm label-success">Complete </span>
			<?php }else{ ?>
			<span class="label label-sm label-warning">Pending </span>
			<?php } ?></td>
			</tr>
			<?php $count++;} ?>
			<?php } }else{ ?>
												<?php $count=1; foreach ($customer_order as $key) { ?>
													<tr class="odd gradeX">
														<td class=""><?=$count?></td>
														<td class=""><a href="<?=url('dashboard/the-order-details').'/'.$key->order_id?>"><?=$key->invoice_id?></a></td>
														<td class=""><?=$key->name?></td>
														<td class=""><?=$key->email?></td>
														<td class=""><?=$key->contact?></td>
														<td class=""><?=date('m/d/Y',strtotime($key->pickup_date))?></td>
														<td class=""><?=date('m/d/Y',strtotime($key->delivery_date))?></td>
														<td class="">£<?=$key->amount?></td>
														<td class=""><?=date('m-d-Y',strtotime($key->order_date))?></td>
                                                        <td><?php if ($key->status == 1) { ?>
                                                        <span class="label label-sm label-success">Complete </span>
                                                       <?php }else{ ?>
                                                        <span class="label label-sm label-warning">Pending </span>
                                                        <?php } ?></td>
													</tr>
												<?php $count++;} ?>
						<?php } ?>

												

											</tbody>
										</table>
									</div><hr><?= $customer_order->links(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			@include('admin.Include.footer')