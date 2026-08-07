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
		<li><a href="javascript:void(0)">Shipment Orders</a></li>
	</ol>
</div>

<div class="col-sm-12 modern-card">
	<div class="col-sm-5" ng-class="{'col-sm-12': !showData}">
		<form class="admin-form" name="form1" id="form1" method="post" action=""
			autocomplete="off">
			<input name="id" ng-model="x.id" hidden>

			<div class="admin-stepper" ng-init="step='details'; showData=true">
				<button type="button" class="admin-step" ng-class="{'is-active': step==='details'}" ng-click="step='details'">Details</button>
				<button type="button" class="admin-step" ng-class="{'is-active': step==='contact'}" ng-click="step='contact'">Contact</button>
				<button type="button" class="admin-step" ng-class="{'is-active': step==='date'}" ng-click="step='date'">Date</button>
			</div>

			<div ng-show="step==='details'">
                <div class="admin-section-title">Shipment Details</div>
                <div class="form-group">
                    <label>G.R. no</label>
                    <input name="gr_no" class="form-control" ng-model="x.gr_no" required>
                </div>
                <div class="form-group">
                    <label>Customer Name</label>
                    <input name="c_name" class="form-control" ng-model="x.c_name" required>
                </div>
                <div class="form-group">
                    <label>Shipment From</label>
                    <input name="ship_from" class="form-control" ng-model="x.ship_from" required>
                </div>
                <div class="form-group">
                    <label>Shipment To</label>
                    <input name="ship_to" class="form-control" ng-model="x.ship_to" required>
                </div>
			</div>

			<div ng-show="step==='contact'">
                <div class="admin-section-title">Contact & Vendor</div>
                <div class="form-group">
                    <label>Driver No.</label>
                    <input name="driver_no" class="form-control" ng-model="x.driver_no" required>
                </div>
                <div class="form-group">
                    <label>Vendor No.</label>
                    <input name="vendor_no" class="form-control" ng-model="x.vendor_no" required>
                </div>
			</div>

			<div ng-show="step==='date'">
                <div class="admin-section-title">Date</div>
                <div class="form-group">
                    <label>Date</label>
                    <input name="date" class="form-control" ng-model="x.date" id="DOB1">
                </div>
			</div>
			
			<div class="form-actions" style="margin-top: 20px; display: flex; gap: 10px; border-top: 1px dashed #e2e8f0; padding-top: 20px;">
				
				<!-- Previous Buttons -->
				<button type="button" class="btn btn-default" ng-click="step='details'" ng-show="step==='contact'">
					<i class="fa fa-arrow-left"></i> Previous
				</button>
				<button type="button" class="btn btn-default" ng-click="step='contact'" ng-show="step==='date'">
					<i class="fa fa-arrow-left"></i> Previous
				</button>

				<!-- Next Buttons -->
				<button type="button" class="btn btn-info" ng-click="step='contact'" ng-show="step==='details'">
					Next <i class="fa fa-arrow-right"></i>
				</button>
				<button type="button" class="btn btn-info" ng-click="step='date'" ng-show="step==='contact'">
					Next <i class="fa fa-arrow-right"></i>
				</button>

				<!-- Save Button (Only shown when form is valid) -->
				<button type="submit" id="submitbtn" accesskey="s"
					ng-click="save_data(x)" class="btn btn-success"
					ng-show="!form1.$invalid" style="background: #10b981; border: none; color: white; padding: 10px 25px; border-radius: 8px; font-weight: 600; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);">
					<u><b>S</b></u>ave Shipment
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
		<?php include 'data.php';?>
	</div>
</div>
