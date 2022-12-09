<?php include 'header.php'; ?>

			<!-- -->
			<section>
				<div class="container">
					<div class="row">

						<!-- tabs -->
						<?php //include 'setting_header.php'; ?>
						<!-- tabs content -->
						<div class="col-md-12 col-sm-12">
							<div class="col-md-12 margin-bottom-20">
								<div class="col-md-12 text-right">
									<a href="index.php" class="btn btn-md btn-info">Back</a>
								</div>
								<div class="heading-title heading-dotted col-md-12 margin-bottom-20 text-center">
									<h4>Settings / Financial Management</h4>
								</div>
								<div class="col-md-12 text-right  margin-bottom-40">
									<a href="chat.php" class="btn btn-md btn-info margin-right-10">Chat</a>
									<a href="#" class="btn btn-md btn-info margin-right-10">Tools</a>
									<a href="#" class="btn btn-md btn-info">Calender meetings / tasks</a>
								</div>
								<ul class="nav nav-tabs nav-button-tabs nav-justified  margin-bottom-40">
									<li class="active"><a href="#tab1" data-toggle="tab">Create Revenue Account</a></li>
									<li><a href="#tab2" data-toggle="tab">Create Expense Account</a></li>
									<li><a href="#tab3" data-toggle="tab">Invoice Setup</a></li>
									<li><a href="balancesheet_template1.php" >Balance Sheet</a></li>
									<li><a href="#tab5" data-toggle="tab">Choose a template</a></li>
									
								</ul>

								<div class="tab-content margin-top-10"  style=" border:1px solid #da291c !important;  border-radius:10px;padding:10px;">
									<div class="tab-pane fade in active" id="tab1">
										<form id="" action="" method="">
											<div class="col-md-12" style=" border-radius:10px;padding:0px;padding-top:10px;padding-bottom:20px;">
												<div class="col-md-5">
													<div class="form-group">
														<label class="form-label">Account Name</label>
														<input type="text" class="form-control">
														
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
														<label class="form-label">Default Amount (optional)</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-2" style="margin-top:25px;">
													<a href="#" class="btn btn-md btn-info">Save</a>
													
												</div>
												
												
												
												
											</div>
										</form>
										<div class="clearfix"></div>
										<div class="divider divider-center divider-short"><!-- divider -->
											<i class="fa fa-star-o"></i>
										</div>
										<div class="col-md-12">
											<table  class="table table-striped table-bordered table-hover" id="sample_editable_1">
												<thead>
													<tr>
														<th>List of accounts</th>
														<th>Date Created</th>
														<th>Amount</th>
														<th>Action</th>
														
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Test</td>
														<td>12-07-2020</td>
														<td>200</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-xs btn-success edit">Edit</a>
															<a href="javascript:void(0);" class="btn btn-xs btn-info delete">Delete</a>
														</td>
														
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test1</td>
														<td>12-07-2020</td>
														<td>200</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-xs btn-success edit">Edit</a>
															<a href="javascript:void(0);" class="btn btn-xs btn-info delete">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test2</td>
														<td>12-07-2020</td>
														<td>200</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-xs btn-success edit">Edit</a>
															<a href="javascript:void(0);" class="btn btn-xs btn-info delete">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test3</td>
														<td>12-07-2020</td>
														<td>200</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-xs btn-success edit">Edit</a>
															<a href="javascript:void(0);" class="btn btn-xs btn-info delete">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test4</td>
														<td>12-07-2020</td>
														<td>200</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-xs btn-success edit">Edit</a>
															<a href="javascript:void(0);" class="btn btn-xs btn-info delete">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test</td>
														<td>12-07-2020</td>
														<td>200</td>
														<td>
															<a href="javascript:void(0);" class="btn btn-xs btn-success edit">Edit</a>
															<a href="javascript:void(0);" class="btn btn-xs btn-info delete">Delete</a>
														</td>
														
													</tr><!-- .nk-tb-item  -->
													
												</tbody>
											</table>
										</div>
									</div>
									
									<div class="tab-pane" id="tab2">
										<form id="" action="" method="">
											<div class="col-md-12" style=" border-radius:10px;padding:0px;padding-top:10px;padding-bottom:20px;">
												<div class="col-md-5">
													<div class="form-group">
														<label class="form-label">Account Name</label>
														<input type="text" class="form-control">
														
													</div>
												</div>
												<div class="col-md-5">
													<div class="form-group">
														<label class="form-label">Default Amount (optional)</label>
														<input type="text" class="form-control">
													</div>
												</div>
												<div class="col-md-2" style="margin-top:25px;">
													<a href="#" class="btn btn-md btn-info">Save</a>
													
												</div>
												
												
												
												
											</div>
										</form>
										<div class="clearfix"></div>
										<div class="divider divider-center divider-short"><!-- divider -->
											<i class="fa fa-star-o"></i>
										</div>
										
										<div class="col-md-12">
											<table  class="table table-striped table-bordered table-hover" id="datatable_sample">
												<thead>
													<tr>
														<th>Account Name</th>
														<th>Expense Type</th>
														<th>Default Amount</th>
														<th>Action</th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Test22</td>
														<td>Phone</td>
														<td>0</td>
														<td>
															<a href="create_expense_account.php" class="btn btn-xs btn-success">Edit</a>
															<a href="#" class="btn btn-xs btn-danger">Delete</a>
														</td>
														
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test12</td>
														<td>Electricity</td>
														<td>0</td>
														<td>
															<a href="create_expense_account.php" class="btn btn-xs btn-success">Edit</a>
															<a href="#" class="btn btn-xs btn-danger">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test03</td>
														<td>Credit Card</td>
														<td>0</td>
														<td>
															<a href="create_expense_account.php" class="btn btn-xs btn-success">Edit</a>
															<a href="#" class="btn btn-xs btn-danger">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test02</td>
														<td>Oil Purchase</td>
														<td>0</td>
														<td>
															<a href="create_expense_account.php" class="btn btn-xs btn-success">Edit</a>
															<a href="#" class="btn btn-xs btn-danger">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test11</td>
														<td>Fuel</td>
														<td>0</td>
														<td>
															<a href="create_expense_account.php" class="btn btn-xs btn-success">Edit</a>
															<a href="#" class="btn btn-xs btn-danger">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test21</td>
														<td>Water</td>
														<td>0</td>
														<td>
															<a href="create_expense_account.php" class="btn btn-xs btn-success">Edit</a>
															<a href="#" class="btn btn-xs btn-danger">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													
												</tbody>
											</table>
										</div>
									</div>
									
									<div class="tab-pane" id="tab3">
										<form id="" action="" method="">
											<div class="col-md-12" style=" border-radius:10px;padding-top:30px;padding-bottom:20px;">
											<div class="row" style="margin:0px;">	
												<h5 class="text-center">To Setup your Invoice, answer the following two questions.</h5>
												<div class="col-md-12">
													<div class="form-group" style="display:flex;">
														<label class="form-label" style="line-height: 30px;">I will collect sales Tax. :	</label>
														<label class="radio margin-left-10 margon-top-0">
															<input type="radio" name="radio-btn" value="1" checked="checked">
															<i></i> Yes
														</label>
														<label class="radio margin-top-0">
															<input type="radio" name="radio-btn" value="2" >
															<i></i> No
														</label>
													</div>
												</div>
												<div class="col-md-6 tax-div">
													<div class="form-group">
														<label class="form-label">Enter the Tax Rate here	</label>
														<input type="text" class="form-control" placeholder="Example: .05">
														
													</div>
												</div>
											</div>
											<div class="row" style="margin:0px;">
												<div class="col-md-12">
													<div class="form-group" style="display:flex;">
														<label class="form-label" style="line-height: 30px;">I will collect shipping cost. :	</label>
														<label class="radio margin-left-10 margon-top-0">
															<input type="radio" name="radio-btn1" value="1">
															<i></i> Yes
														</label>
														<label class="radio margin-top-0">
															<input type="radio" name="radio-btn1" value="2"  checked="checked">
															<i></i> No
														</label>
													</div>
													
												</div>
												<div class="col-md-6 shipping-div" style="display:none;">
													<div class="form-group">
														<label class="form-label">Enter the Shipping cost here	</label>
														<input type="text" class="form-control" placeholder="Example: 9.50">
													</div>
												</div>
												
											</div>
											
												<div class="col-md-12" style="margin-top:20px;margin-bottom:20px; ">
													<a href="#" class="btn btn-sm btn-info">Save</a>
													
												</div>
											</div>
										</form>
									</div>
									
									<div class="tab-pane" id="tab4">
										
									</div>
									
									<div class="tab-pane" id="tab5">
										<form id="" action="" method="">
											<div class="col-md-12" style=" border-radius:10px;padding-top:30px;padding-bottom:20px;">
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Name	</label>
														<input type="text" class="form-control" placeholder="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Select Category	</label>
														<select class="form-control select2" style="width:100%;">
														  <option>Cat 1</option>
														  <option>Cat 2</option>
														  <option>Cat 3</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Description	</label>
														<input type="text" class="form-control" placeholder="">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Upload</label>
														<div class="fancy-file-upload fancy-file-info">
															<i class="fa fa-upload"></i>
															<input type="file" class="form-control" name="contact[attachment]" onchange="jQuery(this).next('input').val(this.value);" />
															<input type="text" class="form-control" placeholder="no file selected" readonly="" />
															<span class="button">Choose File</span>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 text-center" style="margin-top:20px;margin-bottom:20px; ">
													<a href="#" class="btn btn-md btn-info">Save</a>
													
												</div>
											</div>
										</form>
									
										<div class="col-md-12">
											<table class="table table-striped table-bordered table-hover" id="datatable_sample">
												<thead>
													<tr>
														<th>Name</th>
														<th>Category</th>
														<th>Description</th>
														<th>Thumbnail</th>
														<th>Action</th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Test</td>
														<td>Cat1</td>
														<td>Dummy Text</td>
														<td><img src="images/maxresdefault.jpg" style="width:200px;height:100px;"></td>
														<td>
															<a href="templates.php" class="btn btn-xs btn-success">Edit</a>
															<a href="#" class="btn btn-xs btn-danger">Delete</a>
														</td>
														
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test1</td>
														<td>Cat1</td>
														<td>Dummy Text</td>
														<td><img src="images/maxresdefault.jpg" style="width:200px;height:100px;"></td>
														<td>
															<a href="templates.php" class="btn btn-xs btn-success">Edit</a>
															<a href="#" class="btn btn-xs btn-danger">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test11</td>
														<td>Cat1</td>
														<td>Dummy Text</td>
														<td><img src="images/maxresdefault.jpg" style="width:200px;height:100px;"></td>
														<td>
															<a href="templates.php" class="btn btn-xs btn-success">Edit</a>
															<a href="#" class="btn btn-xs btn-danger">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													<tr>
														<td>Test12</td>
														<td>Cat1</td>
														<td>Dummy Text</td>
														<td><img src="images/maxresdefault.jpg" style="width:200px;height:100px;"></td>
														<td>
															<a href="templates.php" class="btn btn-xs btn-success">Edit</a>
															<a href="#" class="btn btn-xs btn-danger">Delete</a>
														</td>
													</tr><!-- .nk-tb-item  -->
													
													
												</tbody>
											</table>
										</div>
									</div>
									
									
									
									<div class="clearfix"></div>
									
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- / -->




<?php include 'footer.php'; ?>
<script type="text/javascript">
	function initTable7() {

		function restoreRow(oTable, nRow) {
			var aData = oTable.fnGetData(nRow);
			var jqTds = $('>td', nRow);

			for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
				oTable.fnUpdate(aData[i], nRow, i, false);
			}

			oTable.fnDraw();
		}

		function editRow(oTable, nRow) {
			var aData = oTable.fnGetData(nRow);
			var jqTds = $('>td', nRow);
			jqTds[0].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[0] + '">';
			jqTds[1].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[1] + '">';
			jqTds[2].innerHTML = '<input type="text" class="form-control input-small" value="' + aData[2] + '">';
			jqTds[3].innerHTML = '<a class="edit btn btn-xs btn-info" href="">Save</a><a class="cancel btn btn-xs btn-info" href="">Cancel</a>';
			jqTds[4].innerHTML = '';
		}

		function saveRow(oTable, nRow) {
			var jqInputs = $('input', nRow);
			oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
			oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
			oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
			oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 3, false);
			oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 4, false);
			oTable.fnDraw();
		}

		function cancelEditRow(oTable, nRow) {
			var jqInputs = $('input', nRow);
			oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
			oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
			oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
			oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 3, false);
			oTable.fnDraw();
		}

		var table = $('#sample_editable_1');

		var oTable = table.dataTable({
			"lengthMenu": [
				[5, 15, 20, -1],
				[5, 15, 20, "All"] // change per page values here
			],
			// set the initial value
			"pageLength": 10,

			"language": {
				"lengthMenu": " _MENU_ records"
			},
			"columnDefs": [{ // set default column settings
				'orderable': true,
				'targets': [0]
			}, {
				"searchable": true,
				"targets": [0]
			}],
			"order": [
				[0, "asc"]
			] // set first column as a default sort by asc
		});

		var tableWrapper = $("#sample_editable_1_wrapper");

		tableWrapper.find(".dataTables_length select").select2({
			showSearchInput: false //hide search box with special css class
		}); // initialize select2 dropdown

		var nEditing = null;
		var nNew = false;

		$('#sample_editable_1_new').click(function (e) {
			e.preventDefault();

			if (nNew && nEditing) {
				if (confirm("Previose row not saved. Do you want to save it ?")) {
					saveRow(oTable, nEditing); // save
					$(nEditing).find("td:first").html("Untitled");
					nEditing = null;
					nNew = false;

				} else {
					oTable.fnDeleteRow(nEditing); // cancel
					nEditing = null;
					nNew = false;
					
					return;
				}
			}

			var aiNew = oTable.fnAddData(['', '', '', '', '', '']);
			var nRow = oTable.fnGetNodes(aiNew[0]);
			editRow(oTable, nRow);
			nEditing = nRow;
			nNew = true;
		});

		table.on('click', '.delete', function (e) {
			e.preventDefault();

			if (confirm("Are you sure to delete this row ?") == false) {
				return;
			}

			var nRow = $(this).parents('tr')[0];
			oTable.fnDeleteRow(nRow);
			alert("Deleted! Do not forget to do some ajax to sync with backend :)");
		});

		table.on('click', '.cancel', function (e) {
			e.preventDefault();

			if (nNew) {
				oTable.fnDeleteRow(nEditing);
				nNew = false;
			} else {
				restoreRow(oTable, nEditing);
				nEditing = null;
			}
		});

		table.on('click', '.edit', function (e) {
			e.preventDefault();

			/* Get the row as a parent of the link that was clicked on */
			var nRow = $(this).parents('tr')[0];

			if (nEditing !== null && nEditing != nRow) {
				/* Currently editing - but not this row - restore the old before continuing to edit mode */
				restoreRow(oTable, nEditing);
				editRow(oTable, nRow);
				nEditing = nRow;
			} else if (nEditing == nRow && this.innerHTML == "Save") {
				/* Editing this row and want to save it */
				saveRow(oTable, nEditing);
				nEditing = null;
				alert("Updated! Do not forget to do some ajax to sync with backend :)");
			} else {
				/* No edit in progress - let's start one */
				editRow(oTable, nRow);
				nEditing = nRow;
			}
		});

	}



	// Table Init
	initTable7();
</script>