@extends('layouts.admin') 
@section('content')

<div class="nk-content">
	<div class="container-fluid">
		<div class="nk-content-inner">
			<div class="nk-content-body">
				<div class="nk-block-head-content" style="margin-bottom:20px;display:flex;">
					<h3 class="nk-block-title page-title"   style="width:935px;">Country Status Setting</h3>
					<a href="{{ url('admin') }}" class="btn btn-sm btn-primary" style="float:right;">Back</a>
				</div>
				<div class="nk-block">
					<div class="card card-bordered card-stretch">
                        <div class="card-aside-wrap">
							<div class="card-inner card-inner-lg">
									<form action="{{ url('add-country-status-setting') }}" method="POST" enctype="multipart/form-data">	
									@csrf
									<input type="hidden" name="id" value="{{ $id }}">
									<div class="row gy-4">
										<div class="col-md-3">
											<div class="form-group">
												<label class="form-label">Country</label>
												<select id="countries_states1" class="form-control bfh-countries" data-country="{{ !empty($id)?$result->country:"US" }}" name="country" required></select>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="form-label">Affiliate Commission Amount</label>
												<input type="number" class="form-control" name="affiliate_commission" min="0" value="{{ !empty($id)?$result->affiliate_commission:"" }}" required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="form-label">Deduct Amount</label>
												<input type="number" class="form-control" name="deduct_amount" min="0" value="{{ !empty($id)?$result->deduct_amount:"" }}" required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label class="form-label">Active Status</label><br>
												<div class="custom-control custom-switch">
															<input type="checkbox" class="custom-control-input" id="customSwitch1" name="status" {{ (!empty($id) && $result->status==1)?"checked":"" }}>
															<label class="custom-control-label" for="customSwitch1"></label>
														</div>
											</div>
										</div>

									</div><br>
									
										<div class="col-12">

											<button type="submit" class="btn btn btn-primary">Save</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div><br>
				<div class="nk-block">
					<div class="card card-bordered card-stretch">
                        <div class="card-aside-wrap">
                        
							<div class="card-inner card-inner-lg">
								<table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                 <thead>
                                    <tr  class="nk-tb-item nk-tb-head">
                                       <th class="nk-tb-col"><span class="sub-text">Country</span></th>
                                                                             
                                       <th class="nk-tb-col"><span class="sub-text">Affiliate Commission Amount</span></th>

                                       	<th class="nk-tb-col"><span class="sub-text">Deduct Amount</span></th>

                                       	<th class="nk-tb-col"><span class="sub-text">Status</span></th>

                                       	<th class="nk-tb-col"><span class="sub-text">Action</span></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                   @if(!empty($settings))
                                   	@foreach($settings as $setting)
                                   	<tr class="nk-tb-item">
                                   		<td class="nk-tb-col">{{ getCountryName($setting->country) }}</td>
                                   		<td class="nk-tb-col">{{ $setting->affiliate_commission }}</td>
                                   		<td class="nk-tb-col">{{ $setting->deduct_amount }}</td>
                                   		<td class="nk-tb-col">
                                   			@if($setting->status==1)
                                   				<span class="badge badge-success">Active</span>
                                   			@else
                                   				<span class="badge badge-danger">Not active</span>
                                   			@endif
                                   		</td>
                                   		<td class="nk-tb-col">
                                   			<a href="{{ url('update-country-status-setting/'.$setting->id) }}" title="" class="btn btn-sm btn-success">Edit</a>
                                   		</td>
                                   	</tr>
                                   	@endforeach
                                   @endif
                                 </tbody>
                              	</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection