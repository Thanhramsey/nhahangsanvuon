<div class="content-wrapper">
<form action="<?php echo base_url() ?>admin/sliders/index.html" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
	<section class="content-header">
		<h1><i class="glyphicon glyphicon-picture"></i> Quản lý hình ảnh</h1>
		<div class="breadcrumb">
			<?php
			if($user['role']==1){
				echo '<a class="btn btn-primary btn-sm" href="'.base_url().'admin/sliders/insert" role="button">
				<span class="glyphicon glyphicon-plus"></span> Thêm mới
			</a>';
			}
			?>
			<a class="btn btn-primary btn-sm" href="<?php echo base_url()?>admin/sliders/recyclebin" role="button">
				<span class="glyphicon glyphicon-trash"></span> Thùng rác(<?php $total=$this->Msliders->slider_trash_count(); echo $total; ?>)
			</a>
		</div>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-3 form-group">
				<select name="type" class="form-control">
					<option value="">All</option>
					<option value="1">Hình menu</option>
					<option value="0">Hình quán</option>
				</select>
			</div>
			<div class="col-md-3 form-group">
				<input  name="name"  type="text"  class="form-control" placeholder="Tên hình"></input>
			</div>
			<div class="col-md-3">
				<button class="btn btn-primary btn-sm" type="submit">Tìm kiếm</button>
			</div>
			<div class="col-md-12">
				<div class="box" id="view">
					<div class="box-header with-border">
					<!-- /.box-header -->
					<div class="box-body">
						<?php  if($this->session->flashdata('success')):?>
	                        <div class="row">
	                            <div class="alert alert-success">
	                                <?php echo $this->session->flashdata('success'); ?>
	                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                            </div>
	                        </div>
	                    <?php  endif;?>
						<div class="row">
							<!--ND-->
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th class="text-center" hidden>ID</th>
											<th class="text-center" >Hình</th>
											<th class="text-center" >Tên ảnh</th>
											<th class="text-center" >Loại ảnh</th>
											<th class="text-center">Trạng thái</th>
											<th class="text-center" colspan="2">Thao tác</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach ($list as $row):?>
										<tr>
											<td class="text-center" hidden><?php echo $row['id'] ?></td>
											<td style="width:150px">
												<img src="./public/assets/images/<?php echo $row['img'] ?>" class="img-responsive">
											</td>
											<td style="width:200px"><a href="<?php echo base_url() ?>admin/sliders/update/<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
											</td>
											<td class="text-center" >
												<?php if($row['type']==0):?>
													<span >Ảnh quán</span>
												<?php else: ?>
													<span > Ảnh menu</span>
												<?php endif; ?>
											</td>
											<td class="text-center">
												<a href="<?php echo base_url() ?>admin/sliders/status/<?php echo $row['id'] ?>">
													<?php if($row['status']==1):?>
														<span class="glyphicon glyphicon-ok-circle mauxanh18"></span>
													<?php else: ?>
														<span class="glyphicon glyphicon-remove-circle maudo"></span>
													<?php endif; ?>
												</a>
											</td>
											<td class="text-center">
												<a class="btn btn-success btn-xs" href="admin/sliders/update/<?php echo $row['id'] ?>" role = "button">
													<span class="glyphicon glyphicon-edit"></span>Sửa
												</a>
											</td>
											<td class="text-center">
												<a class="btn btn-danger btn-xs" href="<?php echo base_url() ?>admin/sliders/trash/<?php echo $row['id'] ?>" onclick="return confirm('Xác nhận xóa slider này ?')" role = "button">
													<span class="glyphicon glyphicon-trash"></span>Xóa
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<ul class="pagination">
										<?php echo $strphantrang ?>
									</ul>
								</div>
							</div>
							<!-- /.ND -->
						</div>
					</div><!-- ./box-body -->
				</div><!-- /.box -->
		</div>
		<!-- /.col -->
	  </div>
	  <!-- /.row -->
	</section>
</form>
<!-- /.content -->
</div><!-- /.content-wrapper -->