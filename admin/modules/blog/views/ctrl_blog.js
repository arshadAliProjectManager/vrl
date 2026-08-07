//blank line is required
app.controller('ctrl_blog',function($scope,$http){
	$http.get('login/check_valid_session').success (function(data) {if(data!=1){window.location.assign('<?=site_url("login")?>');}});
	
	$scope.loader=function(){
		$http.get("blog/view_data").success(function(data){
			$scope.datadb=data;
		})
	}
	 $('#DOB1').datepicker();
	
	$scope.loader();
	$scope.showSeo=false;
	
	$scope.update_call=function(y){
		$scope.x=y;
		if (!$scope.x.status && $scope.x.status !== 0 && $scope.x.status !== '0') {
			$scope.x.status = 1;
		}
		$scope.showSeo=true;
		$scope.step='basic';
		window.scrollTo(0,0);
	}

	$scope.toggle_status=function(y){
		var current = (y.status === 0 || y.status === '0' || y.status === 'hide' || y.status === 'disabled') ? 0 : 1;
		var newStatus = (current === 1) ? 0 : 1;
		$http.get("blog/toggle_status?b_id=" + y.b_id + "&status=" + newStatus).success(function(data){
			data = (data || '').toString().trim();
			if(data == "1") {
				y.status = newStatus;
				messages("success", "Success!", "Blog status changed to " + (newStatus == 1 ? "Show (Visible)" : "Hide (Hidden)"), 3000);
			} else {
				messages("danger", "Warning!", "Failed to update blog status", 4000);
			}
		});
	}

	$scope.slugify=function(){
		if(!$scope.x || !$scope.x.title) return;
		if(!$scope.x.slug){
			var str = $scope.x.title.toLowerCase();
			str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ');
			str = str.replace(/^\s+|\s+$/gm,'');
			$scope.x.slug = str.replace(/\s+/g, '-');
		}
	}
	
	$scope.filter_new=function(){
		$scope.x={ status: 1 };
		$scope.showSeo=false;
		$scope.step='basic';
	}
	
	$scope.options = {
		    height: 100,
		    toolbar: [
		               ['style', ['style','bold', 'italic', 'underline']],
      		           ['fontname', ['fontname']],
      		           ['fontsize', ['fontsize']],
      		           ['color', ['color']],
      		           ['table',['table']],
      		           [ 'insert', [ 'link' ]],
      	               ["view", ["codeview"]]
		        ]
		  };
	
	
	$scope.save_data=function(y){
        $('#submitbtn').attr('disabled',true);
        var formData = new FormData(document.getElementById('form1'));
		$.ajax({
			type: "POST",
			url: "blog/save_data",
            data: formData,
            contentType: false,
            processData: false,
			beforeSend: function()
			{
				$('#webprogress').css('display','inline');
			},
			success: function(data){
				data = (data || '').toString().trim();
				console.log(data);
				if(data=="1")
				{
					$scope.loader();
					messages("success", "Success!","blog Saved Successfully", 3000);
					$scope.filter_new();
					document.getElementById('image') && (document.getElementById('image').value='');
				}
				else if(data=="0")
				{
					messages("warning", "Info!","No Data Affected", 3000);
				}
				else
				{
					messages("danger", "Warning!",data, 4000);
				}
				$('#webprogress').css('display','none');
				$('#submitbtn').attr('disabled',false);
			}
		});
	}
	
	$scope.delete_data=function(id)
	{
		if(confirm("Deleting Blog may hamper your data associated with it."))
		{
			if(confirm("Are you Sure to DELETE ??"))
			{
				$http.get("blog/delete_data?id="+id).success(function(data){
					data = (data || '').toString().trim();
					console.log(data);
					if(data=="1")
					{
						messages("success", "Success!","blog Deleted Successfully", 3000);
					}
					else
					{
						messages("danger", "Warning!","blog not Deleted", 4000);
					}
					$scope.loader();
				})
			}
		}
	}
	
});
