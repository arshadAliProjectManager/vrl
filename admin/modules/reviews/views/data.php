 <div class="heading">
    <ol class="breadcrumb">
      <li><a href="#/">Dashboard</a></li> 
      <li><a href="javascript:void(0)">Reviews &amp; Testimonials</a></li>
    </ol>
</div>

<div class="col-sm-12 well">
    <div class="table-responsive">
		<div class="input-group custom_addon">
            <div class="input-group-addon" style="box-shadow:none; -webkit-box-shadow:none;"><i class="fa fa-search"></i></div>
			<input type="text" ng-model="search_text" placeholder="Search reviews by name, email, or content...">
		</div>
	</div>

	<div class="admin-table-title">Customer Reviews Management</div>
    <div class="table-data admin-table">
			<table class="table table-hover align-middle">
				<thead>
					<tr class="active">
						<th>ID</th>
						<th>Customer</th>
						<th>Email / City</th>
						<th>Rating</th>
						<th>Review &amp; Image</th>
						<th>Posted Date</th>
						<th style="width:140px; text-align:center;">Website Status</th>
						<th style="width:160px">Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 10" >
						<td><strong>#{{y.r_id}}</strong></td>
						<td>
							<strong>{{y.unm}}</strong>
							<div class="small text-muted" ng-if="y.ty"><i class="fa fa-tag text-danger"></i> {{y.ty}}</div>
						</td>
						<td>
							{{y.email}}
							<div class="small text-primary" ng-if="y.t"><i class="fa fa-map-marker"></i> {{y.t}}</div>
						</td>
						<td>
							<span class="label label-success" style="font-weight:700; font-size:12px;" ng-if="y.rt>=4">★ {{y.rt}}/5</span>
							<span class="label label-warning" style="font-weight:700; font-size:12px;" ng-if="y.rt==3">★ {{y.rt}}/5</span>
							<span class="label label-danger" style="font-weight:700; font-size:12px;" ng-if="y.rt<3">★ {{y.rt}}/5</span>
						</td>
						<td>
							<div style="max-width: 280px; word-wrap: break-word;">{{y.cmt}}</div>
						    <div ng-if="y.img" style="margin-top: 5px;">
						        <img ng-repeat="img in y.img.split(',')" ng-if="img.trim() !== ''" style="width:50px; height:50px; object-fit: cover; margin-right: 5px; margin-top: 3px; border-radius: 6px; border: 1px solid #ddd;" ng-src="{{ img.indexOf('/') !== -1 ? '<?=base_url()?>' + img.trim() : '<?=base_url('assets/uploads/reviewimg/thumb')?>/' + img.trim() }}">
						    </div>
						    <div ng-if="y.ar" style="margin-top:5px; padding:4px 8px; background:#eef7ff; border-left:3px solid #0056b3; font-size:11px;">
						    	<strong>Admin Reply:</strong> {{y.ar}}
						    </div>
						</td>
						<td><small>{{y.pd || y.tm}}</small></td>
						<td style="text-align:center;">
							<button type="button" class="btn btn-xs btn-success" style="font-weight:bold; padding:4px 10px; border-radius:12px; background-color:#28a745 !important; border-color:#28a745 !important; color:#ffffff !important;" ng-if="y.st=='1'" ng-click="update(y.r_id, 0)" title="Click to Hide from website">
								<i class="fa fa-eye"></i> Show (Visible)
							</button>
							<button type="button" class="btn btn-xs btn-danger" style="font-weight:bold; padding:4px 10px; border-radius:12px; background-color:#dc3545 !important; border-color:#dc3545 !important; color:#ffffff !important;" ng-if="y.st=='0'" ng-click="update(y.r_id, 1)" title="Click to Show on website">
								<i class="fa fa-eye-slash"></i> Hide (Hidden)
							</button>
						</td>
						<td>
						  <button class="btn btn-xs btn-primary" style="margin-top:2px;" ng-click="openEdit(y)"><i class="fa fa-edit"></i> Edit/Reply</button>
						  <button class="btn btn-xs btn-danger" style="margin-top:2px;" ng-click="deleteReview(y.r_id)"><i class="fa fa-trash"></i> Delete</button>
						</td>
					</tr>
				</tbody>
			</table>
        </div>
        <div class="col-sm-12">
            <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="app/pagination"></dir-pagination-controls>
        </div>
   </div>

<!-- Edit Review Modal -->
<div class="modal fade" id="reviewEditModal" tabindex="-1" role="dialog" aria-labelledby="reviewEditLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 12px; overflow: hidden;">
      <div class="modal-header" style="background: #111; color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="reviewEditLabel" style="font-weight:bold;"><i class="fa fa-star text-warning me-2"></i> Edit Customer Review &amp; Reply</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Customer Name</label>
          <input type="text" class="form-control" ng-model="editForm.name">
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <input type="text" class="form-control" ng-model="editForm.email">
        </div>
        <div class="form-group">
          <label>City / Location</label>
          <input type="text" class="form-control" ng-model="editForm.r_title" placeholder="e.g. Bangalore, Delhi">
        </div>
        <div class="form-group">
          <label>Review Description</label>
          <textarea class="form-control" rows="4" ng-model="editForm.r_desc"></textarea>
        </div>
        <div class="form-group">
          <label>Star Rating (1-5)</label>
          <select class="form-control" ng-model="editForm.stars" style="height:40px;">
            <option value="1">★ 1 Star</option>
            <option value="2">★ 2 Stars</option>
            <option value="3">★ 3 Stars</option>
            <option value="4">★ 4 Stars</option>
            <option value="5">★ 5 Stars</option>
          </select>
        </div>
        <div class="form-group">
          <label>Service Type</label>
          <input type="text" class="form-control" ng-model="editForm.r_type" placeholder="e.g. Household Shifting, Car Transport">
        </div>
        <div class="form-group">
          <label>Website Visibility Status</label>
          <select class="form-control" ng-model="editForm.status" style="height:40px;">
            <option value="1">Show (Visible on Website)</option>
            <option value="0">Hide (Hidden from Website)</option>
          </select>
        </div>
        <div class="form-group">
          <label>Admin Reply (Optional Response to Customer)</label>
          <textarea class="form-control" rows="3" ng-model="editForm.admin_reply" placeholder="Write an official company reply..."></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" ng-click="saveEdit()" style="font-weight:bold; background:#D60412; border-color:#D60412;">Save Changes</button>
      </div>
    </div>
  </div>
</div>
