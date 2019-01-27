<div class="cotainer">
    <div class="row">
		<div class="col-xs-12">
			<div class="clearfix">
				<div class="pull-right tableTools-container"></div>
			</div>
			<div>
				<table id="dynamic-table" class="table table-drak table-bordered table-drak">
					<tr>
                        <th class="center" width="40px">No</th>
                        <th class="center" width="100px">Status</th>
						<th class="center">Divisi</th>
						<th class="center">Nama</th>
					</tr>
					<?php foreach ($divisi as $div) : ?>
                    <tr>
                		<td class="center">1</td>
                        <td class="center">
							<div class="hidden-sm hidden-xs action-buttons">
								<a class="blue" href="#">
									<i class="ace-icon fa fa-search-plus bigger-130"></i>
								</a>
								<a class="green" href="#">
									<i class="ace-icon fa fa-pencil bigger-130"></i>
								</a>
								<a class="red" href="#">
									<i class="ace-icon fa fa-trash-o bigger-130"></i>
								</a>
							</div>
							<div class="hidden-md hidden-lg">
								<div class="inline pos-rel">
									<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
										<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
									</button>
									<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
										<li>			
											<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
												<span class="blue">
													<i class="ace-icon fa fa-search-plus bigger-120"></i>
												</span>
											</a>
										</li>
										<li>
											<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
												<span class="green">
													<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
												</span>
											</a>
										</li>
										<li>
											<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
												<span class="red">
													<i class="ace-icon fa fa-trash-o bigger-120"></i>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</td>
						<td><?= $div['divisi']; ?></td>
						<td class="hidden-480"><?= $div['nama']; ?></td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>	
</div>