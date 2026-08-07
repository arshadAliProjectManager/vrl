 <div class="col-sm-6">
    <div class="table_horizontal">
		<div class="custom_addon">
            <i class="fa fa-search" style="margin-right: 5px;"></i>
            <input type="text" ng-model="search_text" placeholder="Search here...">
		</div>
		<div class="admin-table-title">Records</div>
        <div class="table-data admin-table">
			<table class="table table-hover">
				<thead>
					<tr class="active">
						<th class="text-center">Title</th>
						<th class="text-center">URL</th>
						<th class="text-center">Date</th>
						<th class="text-center">Author</th>
                        <th class="text-center">Image</th>
                        <th class="text-center" style="width:95px">Status</th>
						<th class="text-center" style="width:85px">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 5" >
						<td>{{y.title}}</td>
						<td>{{y.slug}}</td>
						<td>{{y.date}}</td>
						<td>{{y.author}}</td>
						
						<td class="img-responsive text-center">
						    <img ng-if="y.image" ng-src="<?=base_url()?>assets/uploads/blog/thumb/{{y.image}}" style="height: 45px; border-radius: 4px;">
						</td>
						
						<td class="text-center">
							<button type="button" 
								class="btn vrl-status-btn" 
								ng-class="{'vrl-status-btn-show': (y.status == 1 || y.status == '1' || y.status == 'show' || y.status == 'active' || y.status == null), 'vrl-status-btn-hide': (y.status == 0 || y.status == '0' || y.status == 'hide')}"
								ng-click="toggle_status(y)"
								style="color: #ffffff !important;"
								title="Click to toggle Show / Hide on website">
								<i class="fa" ng-class="{'fa-eye': (y.status == 1 || y.status == '1' || y.status == 'show' || y.status == 'active' || y.status == null), 'fa-eye-slash': (y.status == 0 || y.status == '0' || y.status == 'hide')}" style="color: #ffffff !important;"></i>
								<span ng-if="y.status == 1 || y.status == '1' || y.status == 'show' || y.status == 'active' || y.status == null" style="color: #ffffff !important; font-weight: 800;">SHOW</span>
								<span ng-if="y.status == 0 || y.status == '0' || y.status == 'hide'" style="color: #ffffff !important; font-weight: 800;">HIDE</span>
							</button>
						</td>

						<td class="text-center">
						  <a href="javascript:void(0)" ng-click="update_call(y)" data-toggle="modal" data-target=".bs-example-modal-sm">
    						<span class="fa fa-pencil fa-lg text-primary"></span></a>
    						&nbsp;&nbsp;<a href="javascript:void(0)" ng-click="delete_data(y.b_id)">
    						<span class="fa fa-trash fa-lg text-danger"></span></a>               
						</td>
					</tr>
				</tbody>
			</table>
        </div>
        <div class="col-sm-12">
            <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="app/pagination"></dir-pagination-controls>
        </div>
    </div>
</div>
