<div class="col-sm-7">
    <div class="table_horizontal">
		<div class="custom_addon">
            <i class="fa fa-search" style="margin-right: 5px;"></i>
			<input type="text" ng-model="search_text" placeholder="Search shipment orders...">
		</div>
	</div>
	<div class="table-data admin-table table-responsive">
		<table class="table table-hover">
			<thead>
				<tr class="active">
					<th>ID</th>
					<th>G.R. No</th>
					<th>Customer Name</th>
					<th>Shipment From</th>
					<th>Shipment To</th>   
					<th>Driver No</th>
					<th>Vendor No</th>       
					<th>Date</th>
					<th style="width:85px">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 10" >
					<th>{{y.id}}</th>
					<th>{{y.gr_no}}</th>
					<td>{{y.c_name}}</td>
					<td>{{y.ship_from}}</td>
					<td>{{y.ship_to}}</td>
					<td>{{y.driver_no}}</td>
					<td>{{y.vendor_no}}</td>
					<td>{{y.date}}</td>
					
					<td>
					  <a href="javascript:void(0)" ng-click="update_call(y)" data-toggle="modal" data-target=".bs-example-modal-sm">
						<span class="fa fa-pencil fa-2x"></span></a>
						&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" style="color:red" ng-click="delete_data(y.id)">
						<span class="fa fa-trash fa-2x"></span></a>               
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-sm-12 text-center" style="margin-top: 15px;">
		<dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="app/pagination"></dir-pagination-controls>
	</div>
</div>
