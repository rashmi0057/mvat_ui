/****************************************
	* CALCULATIONS IN FORM
	* Version: 3.0
	* Author: Priyabrata Senapati
****************************************/

function calculate(){
	//calculate = null;
	// CALCULATIONS
	//--------------------------
	var model={};
	if( $('[data-pr-app] [data-pr-val]').length > 0 ){
	
		$('[data-pr-app] [data-pr-val]').each(function(){
			var app = $(this).parents('[data-pr-app]').data('pr-app');
			$('[data-pr-app='+app+'] [data-model], [data-common][data-model]').each(function(){
				var v = $(this).val() || 0;
				var f;
				model[$(this).attr('data-model')] = ((v=='_blank_')?'':v);
				if(!isNaN(v)){
					f = $(this).attr('data-model') +'=' + v;
				}else{
					f = $(this).attr('data-model') +'="'+ ((v=='_blank_')?'':v) +'"';
				}
				eval(f);
			});

// console.log($(this).attr('data-model'));

			let res1 = eval($(this).attr('data-pr-val'));
			// console.log(res1);
			let fres = (!isNaN(res1))?res1:0;
			let twoStepDecimal = fres.toFixed(2);
			$(this).val(twoStepDecimal);
		});
		// console.log(model);
		///alert(a+b+c);
	}
	
	//TAG
	if( $('[data-pr-app] res').length > 0 ){
		$('[data-pr-app] res').each(function(){
			var app = $(this).parents('[data-pr-app]').data('pr-app');
			$('[data-pr-app'+app+'] [data-model], [data-common][data-model]').each(function(){
				var v = $(this).val() || '_blank_';
				var f;
				if(!isNaN(v)){
					f = $(this).attr('data-model') +'=' + v;
				}else{
					f = $(this).attr('data-model') +'="'+ ((v=='_blank_')?'':v) +'"';
				}
				eval(f);
			});
			$(this).attr('r', $(this).text()).text(eval($(this).text()));
		});
	}
	
	
	// CALCULATIONS on change
	//--------------------------
	if($('[data-pr-app]').length > 0 ){
		$(document).on('keyup change', '[data-pr-app] [data-model], [data-common][data-model]', function(event){
			// debugger;
			let dval = $(this).val() || "";
			let dotCount = (dval.match(/\./g) || []).length;
			let keycodes = [110,190,96,48];
			// console.log(keycodes.indexOf(event.which));
			if(((keycodes.indexOf(event.which) < 0) && $(this).val() != '') || dotCount > 1){
				let v = parseFloat($(this).val());
				v = isNaN(v)?0:v;
				// let round2 = Math.round(v * 100) / 100;
				$(this).val(v);
			}
            var currentModel = $(this).data('model');
			var app = $(this).closest('[data-pr-app]').data('pr-app');
			if( $('[data-pr-app='+app+'] [data-model]').length > 0 ){
				// PRIORITY // priority should be between 1 to 10
                for(var i=1;i<=10;i++){
					$('[data-pr-app='+app+'] [data-pr-val]:not([data-pr-app='+app+'] [data-pr-app] [data-model])').each(function(){
						// console.log("cnt", $('[data-pr-app='+app+'] [data-pr-app] [data-model]').length);
                        if($(this).data('model') != currentModel){
                            var priority = parseInt($(this).data('priority')) || 10;
                            if(priority == i){
								let modelNames = []
                                $('[data-pr-app='+app+'] [data-model], [data-common][data-model]').each(function(){
                                    var v = parseFloat($(this).val()) || 0;
                                    var f;
									let modelName = $(this).attr('data-model');
									if(modelNames.indexOf(modelName) < 0){
										modelNames.push(modelName);
									
										if(!isNaN(v)){
											f = $(this).attr('data-model') +'=' + parseFloat(v);
										}else{
											f = $(this).attr('data-model') +'="'+ ((v=='_blank_')?'':v) +'"';
										}
									}else{
										let m = eval(modelName);
										f = modelName +'=' + (parseFloat(v) + parseFloat(m));
										// console.log(f);
									}
                                    eval(f);
                                });

								let res1 = eval($(this).attr('data-pr-val'));
								let fres = (!isNaN(res1))?res1:0;
								// $(this).val((fres % 1 == 0)?fres.toFixed(2):fres.toFixed(2));
								$(this).val(fres.toFixed(2));
                            }
                        }
                    });
                }
				
				$('[data-pr-total]').each(function(){
					let prTotalName = $(this).data('pr-total');
					let prsum = 0;
					$('[data-model="'+prTotalName+'"]').each(function(){
						let m = parseFloat($(this).val()) || 0;
						prsum += m;
					});
					$(this).val(prsum.toFixed(2));
				});
			}
			
			//TAG
			if( $('[data-pr-app] res').length > 0 ){
				$('[data-pr-app] res').each(function(){
					$('[data-pr-app] [data-model], [data-common][data-model]').each(function(){
						var v = $(this).val() || '_blank_';
						var f;
						if(!isNaN(v)){
							f = $(this).attr('data-model') +'=' + v;
						}else{
							f = $(this).attr('data-model') +'="'+ ((v=='_blank_')?'':v) +'"';
						}
						eval(f);
					});
					$(this).text(eval($(this).attr('r')));
				});
			}

			// CONDITION
			// debugger;
			// if( $('[data-pr-app] condition').length > 0 ){
			// 	$('[data-pr-app] condition').each(function(){
			// 		eval($(this).text().replace(/[\n\r]+/g, ' '));
			// 	});
			// }

			// Totaling for Multiple (Add More)
			// if($(this).parents('[data-pr-multiple]')){
			// 	$(this).parents('[data-pr-multiple]').find('')
			// }
		});
	}
	//-------------------------
	// END CALCULATIONS
	
}

$(document).ready(function(){
    
	//Date Range
    /*if($('[data-range-name]').length > 0){
        $('[data-range-name] [data-range]').change(function(){
            let dt = $(this).val();
            let stt = $(this).data('range-start');
            let end = $(this).data('range-end');
            $(this).parents('[data-range-name]').find('[data-range='+end+']').attr('min',dt);
            $(this).parents('[data-range-name]').find('[data-range='+stt+']').attr('max',dt);

            let toDate = $(this).parents('[data-range-name]').find('[data-range-start]').val();
            let fromDate = $(this).parents('[data-range-name]').find('[data-range-end]').val();
            if(fromDate!='' && toDate!=''){
            	//alert(BASEURL)
            	$.ajax({
            		type: "POST",
            		dataType: "json",
            		url: BASEURL+"/dashboard/payrolluserfetch",
            		data: "fromDate="+fromDate+"&toDate="+toDate+"&rythubazaarID="+rythubazaarID+"&_token="+csrfToken,
            		success: function(data){
            				if(data){
            					if(data.response==1){
	            					$(".appendSearchContentDiv").html(data.content);
	            					calculate();
	            				}
            				}
            		}
            	})
            }
            let diff = new Date(toDate).getTime() - new Date(fromDate).getTime();
            let diffDays = diff / (1000*60*60*24) || 0;
            $(this).parents('[data-range-name]').find('[data-diff]').val(parseInt(diffDays)+1);
            calculate();
        });
    }*/

	if($('[data-pr-app]').length > 0){
        calculate();
    }

});