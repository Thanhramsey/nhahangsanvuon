<?php echo form_open_multipart('admin/sliders/update/'.$row['id']); ?>
<div class="content-wrapper" style="min-height: 454px;">
    <form action="<?php echo base_url() ?>admin/sliders/update.html" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <section class="content-header">
            <h1><i class="glyphicon glyphicon-picture"></i> Sửa </h1>
            <div class="breadcrumb">
                <button name="THEM_NEW" type="submit" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-floppy-save"></span> Lưu[Thêm]
                </button>
                <a class="btn btn-primary btn-sm" href="admin/sliders" role="button">
                    <span class="glyphicon glyphicon-remove"></span> Thoát
                </a>
            </div>
        </section>
        <section class="content">
          <!-- Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                           <div class="col-md-9">
                                <!--ND-->
                            <div class="form-group">
                                <label>Tên sliders<span class = "maudo">(*)</span></label>
                                <input type="text" name="name" placeholder="Tên sliders" class="form-control" value="<?php echo $row['name'] ?>">
                                <div class="error" id="password_error"><?php echo form_error('name')?></div>
                            </div>
                            <div class="form-group">
                                <label>Loại ảnh </label>
                                <select name="type" class="form-control">
                                    <option value="1">Hình menu</option>
                                    <option value="0">Hình quán</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select name="status" class="form-control">
                                    <option value="1" <?php if($row['status'] == 1) {echo 'selected';}?> >Hoạt động</option>
                                    <option value="0" <?php if($row['status'] == 0) {echo 'selected';}?>>Ngừng hoạt động</option>
                                </select>
                            </div>
							<div class="form-group">
                                <label>Hình ảnh <span class = "maudo">(*)</span></label>
								<div class="anh">
										<!-- Chứa ảnh ở đây -->
								<img style ="width:300px; height:170px" id="output" src="./public/assets/images/<?php echo $row['img'] ?>"/>
									</div>
                                <input type="file" name="img" class="form-control" onchange="loadFile(event)">
                                <div class="error" id="password_error"><?php echo form_error('img')?></div>
                            </div>
                            <!--/.ND-->
                           </div>
                           <div class="col-md-3">

                           </div>
                        </div>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </form>
</div>


<script>
	var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>