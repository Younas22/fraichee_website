@include('admin.Include.header')
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Order Products</header>
								</div>
								<div class="card-body ">
									<div class="table-scrollable">
										<table class="table table-hover table-checkable order-column full-width"
											id="example4">
											<thead>
												<tr>
													<th class="center"> # </th>
													<th class="center"> Name </th>
													<th class="center"> Price </th>
													<th class="center"> quantity </th>
													<th > Image </th>
												</tr>
											</thead>
											<tbody>

												<?php $count=1; foreach ($order_details as $key) { ?>
													<tr class="odd gradeX">
														<td class="center"><?=$count?></td>
														<td class="center"><?=$key->name?></td>
														<td class="center">£<?=$key->price?></td>
														<td class="center"><?=$key->quantity?></td>
														<td class="user-circle-img">
															<img height="50" width="50" src="<?=env('APP_URL').'/public/assets/images/products/'.$key->cp_image;?>" alt="">
														</td>
													</tr>
												<?php $count++; } ?>

											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
			@include('admin.Include.footer')