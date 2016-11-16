<?php
     use yii\widgets\LinkPager;
     use yii\helpers\Url;
   ?>
<div class="row">
<div class="col-xs-12">
	<div class="table-responsive">
		<table id="sample-table-1" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th class="center">
						<label>
							<input type="checkbox" class="ace" />
							<span class="lbl"></span>
						</label>
					</th>
					<th>名称</th>
					<th>添加时间</th>
					<th class="hidden-480">点击次数</th>
					<th>是否显示</th>
					<!-- <th>
						<i class="icon-time bigger-110 hidden-480"></i>
						修改
					</th> -->
					<th class="hidden-480">状态</th>

					<!-- <th class="hidden-480">操作</th> -->
				</tr>
			</thead>

			<tbody>
				<?php foreach ($data as  $v) {?>
				<tr>
					<td class="center">
						<label>
							<input type="checkbox" class="ace" />
							<span class="lbl"></span>
						</label>
					</td>

					<td>
						<a href="#"><?= $v['name']?></a>
					</td>
					<td><?= $v['add_time']?></td>
					<td class="hidden-480"><?= $v['click_num']?></td>
					<td><?php if($v['is_show']){
						echo "显示";}else{
							echo "不显示";
						}?>
						</td>

					<!-- <td class="hidden-480">
						<span class="label label-sm label-warning">Expiring</span>
					</td> -->

					<td>
						<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
							<button class="btn btn-xs btn-success">
								<i class="icon-ok bigger-120"></i>
							</button>

							<button class="btn btn-xs btn-info">
								<i class="icon-edit bigger-120"></i>
							</button>

							<button class="btn btn-xs btn-danger">
								<i class="icon-trash bigger-120"></i>
							</button>

							<button class="btn btn-xs btn-warning">
								<i class="icon-flag bigger-120"></i>
							</button>
						</div>

						<div class="visible-xs visible-sm hidden-md hidden-lg">
							<div class="inline position-relative">
								<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
									<i class="icon-cog icon-only bigger-110"></i>
								</button>

								<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
									<li>
										<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
											<span class="blue">
												<i class="icon-zoom-in bigger-120"></i>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
											<span class="green">
												<i class="icon-edit bigger-120"></i>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
											<span class="red">
												<i class="icon-trash bigger-120"></i>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</td>
				</tr>
			<?php }?>
				
			</tbody>
		
		</table>
				<?=
		LinkPager::widget([
		      'pagination' => $pages,
		    ]);
		?> 
	</div><!-- /.table-responsive -->
</div><!-- /span -->
</div><!-- /row -->
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		

		<script type="text/javascript">
			jQuery(function($) {
			
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				
			})
		</script>
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
	