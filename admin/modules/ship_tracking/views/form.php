<style>
/* Modern Admin Panel Overrides */
.heading { margin-bottom: 25px; }
.breadcrumb { background: transparent; padding: 0; font-size: 16px; font-weight: 600; color: #4361ee; }
.breadcrumb li a { color: #4361ee; text-decoration: none; transition: 0.3s; }
.breadcrumb li a:hover { color: #3f37c9; }

.modern-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    padding: 15px 20px;
    border: none;
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

/* Stepper */
.admin-stepper {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-bottom: 15px;
    border-bottom: 1px solid #edf2f9;
    padding-bottom: 10px;
}
.admin-step {
    background: #f8f9fa;
    border: none;
    padding: 6px 15px;
    border-radius: 20px;
    color: #6c757d;
    font-size: 13px;
    font-weight: 600;
    transition: all 0.3s ease;
    cursor: pointer;
}
.admin-step:hover {
    background: #e9ecef;
    color: #495057;
}
.admin-step.is-active {
    background: #4361ee;
    color: #fff;
    box-shadow: 0 4px 10px rgba(67, 97, 238, 0.2);
}

/* Form Controls */
.admin-section-title {
    font-size: 16px;
    font-weight: 700;
    color: #2b3445;
    margin-bottom: 10px;
    padding-bottom: 5px;
    border-bottom: 1px dashed #e2e8f0;
}
.admin-form label {
    font-weight: 600;
    color: #4a5568;
    margin-bottom: 4px;
    font-size: 13px;
    display: block;
}
.admin-form .form-group {
    margin-bottom: 12px;
}
.admin-form .form-control {
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    padding: 8px 12px;
    font-size: 14px;
    box-shadow: none;
    transition: all 0.3s ease;
    background: #f8fafc;
}
.admin-form .form-control:focus {
    border-color: #4361ee;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
}

/* Buttons */
.btn-info {
    background: #4361ee;
    border: none;
    border-radius: 8px;
    padding: 10px 25px;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
    transition: all 0.3s ease;
}
.btn-info:hover {
    background: #3f37c9;
    box-shadow: 0 6px 20px rgba(67, 97, 238, 0.4);
    transform: translateY(-2px);
}
.btn-default {
    background: #e2e8f0;
    border: none;
    border-radius: 8px;
    padding: 10px 25px;
    font-weight: 600;
    color: #4a5568;
    transition: all 0.3s ease;
}
.btn-default:hover {
    background: #cbd5e1;
    color: #1e293b;
}
.admin-data-toggle { margin-top: 20px; text-align: right; }
.admin-data-toggle .btn { border-radius: 30px; }

</style>

<div class="heading">
	<ol class="breadcrumb">
		<li><a href="#/">Dashboard</a></li>
		<li><a href="javascript:void(0)">Shipment Tracking</a></li>
	</ol>
</div>

<div class="col-sm-12 modern-card">
	<div class="col-sm-5" ng-class="{'col-sm-12': !showData}">
		<form class="admin-form" name="form1" id="form1" method="post" action="" autocomplete="off">
			<input name="id" ng-model="x.id" hidden>

			<div class="admin-stepper" ng-init="step='shipment'; showData=true">
				<button type="button" class="admin-step" ng-class="{'is-active': step==='shipment'}" ng-click="step='shipment'">Shipment</button>
				<button type="button" class="admin-step" ng-class="{'is-active': step==='timing'}" ng-click="step='timing'">Timing</button>
				<button type="button" class="admin-step" ng-class="{'is-active': step==='remarks'}" ng-click="step='remarks'">Remarks</button>
			</div>

			<div ng-show="step==='shipment'">
                <div class="admin-section-title">Shipment</div>
                <div class="form-group">
                    <label>Shipment ID</label>
                    <select name="sh_id" class="form-control" ng-model="x.sh_id" required>
                        <option value="">--Select Type--</option>
                        <option ng-repeat="s in ship_main" value="{{s.id}}">{{s.c_name}} #{{s.id}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Shipment Type</label>
                    <select name="type" class="form-control" ng-model="x.type" required>
                        <option value="">--Select Type--</option>
                        <option value="1">Processing</option>
                        <option value="2">On Transit</option>
                        <option value="3">Shipped</option>
                        <option value="4">Completed</option>
                    </select>
                </div>
			</div>

			<div ng-show="step==='timing'">
                <div class="admin-section-title">Timing & Location</div>
                <div class="form-group">
                    <label>Date</label>
                    <input name="date" class="form-control" ng-model="x.date" id="DOB1" required>
                </div>
                <div class="form-group">
                    <label>Time</label>
                    <input name="time" class="form-control" ng-model="x.time">
                </div>
                <div class="form-group">
                    <label>Place</label>
                    <input name="place" class="form-control" ng-model="x.place">
                </div>
			</div>

			<div ng-show="step==='remarks'">
                <div class="admin-section-title">Remarks</div>
                <div class="form-group">
                    <label>Remarks</label>
                    <textarea name="remarks" class="form-control" ng-model="x.remarks" rows="4"></textarea>
                </div>
			</div>

			<div class="form-actions" style="margin-top: 20px; display: flex; gap: 10px; border-top: 1px dashed #e2e8f0; padding-top: 20px;">
				
				<!-- Previous Buttons -->
				<button type="button" class="btn btn-default" ng-click="step='shipment'" ng-show="step==='timing'">
					<i class="fa fa-arrow-left"></i> Previous
				</button>
				<button type="button" class="btn btn-default" ng-click="step='timing'" ng-show="step==='remarks'">
					<i class="fa fa-arrow-left"></i> Previous
				</button>

				<!-- Next Buttons -->
				<button type="button" class="btn btn-info" ng-click="step='timing'" ng-show="step==='shipment'">
					Next <i class="fa fa-arrow-right"></i>
				</button>
				<button type="button" class="btn btn-info" ng-click="step='remarks'" ng-show="step==='timing'">
					Next <i class="fa fa-arrow-right"></i>
				</button>

				<!-- Save Button (Only shown when form is valid) -->
				<button type="submit" id="submitbtn" accesskey="s"
					ng-click="save_data(x)" class="btn btn-success"
					ng-show="!form1.$invalid" style="background: #10b981; border: none; color: white; padding: 10px 25px; border-radius: 8px; font-weight: 600; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);">
					<u><b>S</b></u>ave Tracking
				</button>

				<a class="btn btn-default" accesskey="c" ng-click="filter_new()" ng-show="!form1.$invalid"><u><b>C</b></u>lear Form</a>
			</div>
		</form>
	</div>

	<div class="admin-data-toggle">
		<button type="button" class="btn btn-default btn-xs" ng-click="showData=!showData">
			{{showData ? 'Hide Records' : 'Show Records'}}
		</button>
	</div>
	<div class="admin-data-panel" ng-show="showData">
		<?php include 'data.php'; ?>
	</div>
</div>
