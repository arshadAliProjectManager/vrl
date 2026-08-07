<div class="col-sm-7">
	<div class="table_horizontal">
		<div class="custom_addon">
            <i class="fa fa-search" style="margin-right: 5px;"></i>
			<input type="text" ng-model="search_text" placeholder="Search tracking records...">
		</div>
	</div>
	<div class="table-data admin-table table-responsive">
		<table class="table table-hover">
			<thead>
				<tr class="active">
					<th>Shiping Id</th>
					<th>Type</th>
					<th>Driver No</th>
					<th>Vendor No</th>
					<th>Date</th>
					<!-- <th>Time</th> -->
					<th>Place</th>
					<th>Remarks</th>
					<th style="width:85px">Action</th>
				</tr>
			</thead>
			<tbody>
				<tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 10">
					<th>{{y.c_name}} #{{y.gr_no}}</th>
					<!-- <th>{{y.type}}</th> -->
					<td ng-if="y.type=='1'">Processing</td>
					<td ng-if="y.type=='2'">On Transit</td>
					<td ng-if="y.type=='3'">Shipped</td>
					<td ng-if="y.type=='4'">Reached</td>
					<td>{{y.driver_no}}</td>
					<td>{{y.vendor_no}}</td>
					<td>{{y.date}}</td>
					<!-- <td>{{y.time}}</td> -->
					<td>{{y.place}}</td>
					<td>{{y.remarks}}</td>
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
