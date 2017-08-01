$(document).ready(function(){
	placeholder = '<span> placeholder = </span><input type="text" id="placeholder">';
	size = '<span> size = </span><input type="number" id="size">';
	maxlength = '<span> maxlength = </span><input type="number" id="maxlength">';
	checked = '<span> checked = </span><select id="checked"><option></option><option>checked</option></select>';
	accept = '<span> accept = </span><input type="number" id="accept">';
	multiple = '<span> multiple = </span><select id="multiple"><option></option><option>multiple</option></select>';
	required = '<span> required = </span><select id="required"><option></option><option>required</option></select>';
	value = '<span> value = </span><input type="text" id="value">';
	min = '<span> min = </span><input type="number" id="min">';
	max = '<span> max = </span><input type="number" id="max">';
	step = '<span> step = </span><input type="number" id="step">';
	pattern = '<span> pattern = </span><input type="text" id="pattern">';


	$('#button').click (function ()
	{
		if($('#label').val() == '' || $('#label').val() != '' && $('#id').val() != '')
		{
			 $.ajax({
	          type: 'POST',
	          url: 'FormGen.php',
	          data: ({type: $('#type').val(), class: $('#class').val(), name: $('#name').val(), id: $('#id').val(), value: $('#value').val(), placeholder: $('#placeholder').val(), label: $('#label').val(), size: $('#size').val(), maxlength: $('#maxlength').val(), accept: $('#accept').val(), multiple: $('#multiple').val(), min: $('#min').val(), max: $('#max').val(), pattern: $('#pattern').val(), checked: $('#checked').val(), required: $('#required').val()}),
	          dataType: 'html',
	          success: function(data){
	            $('.result').append(data);
	          }
	        });
		    $('#id').css('border-color', 'initial');
		}
	    else
		    $('#id').css('border-color', 'red');

	});

		$('#method').change( function()
		{
			$('.method').html(' method="' + $('#method').val() + '"');
		});
			
		$('#action').keyup( function()
		{
			$('.action').html(' action="' + $('#action').val() + '"');
		});

		$('#enctype').keyup( function()
		{
			$('.enctype').html(' enctype="' + $('#enctype').val() + '"');
		});


		$('#csrf_field').click(function()
		{
			if($('#csrf_field').prop('checked') == true)
				$('.csrf_field').html('{{ csrf_field() }}');
			else
				$('.csrf_field').html('');

		});


		$('#type').change(function()
		{
			switch($('#type').val())
			{
				case 'text': 
				$('#attributes').html(value + placeholder + required);
				break;
				case 'password': $('#attributes').html(size + maxlength + pattern + required);
				break;
				case 'radio': $('#attributes').html(value + checked);
				break;
				case 'file': $('#attributes').html(accept + size + multiple);
				break;
				case 'submit': $('#attributes').html(value);
				break;
				case 'rest': $('#attributes').html();
				break;
				case 'checkbox': $('#attributes').html(value + checked);
				break;
				case 'date': $('#attributes').html(value + min + max);
				break;
				case 'month': $('#attributes').html(value);
				break;
				case 'week': $('#attributes').html(value);
				break;
				case 'color': $('#attributes').html();
				break;
				case 'numder': $('#attributes').html(value);
				break;
				case 'range': $('#attributes').html(value + min + max + step);
				break;
				case 'search': $('#attributes').html();
				break;
				case 'email': $('#attributes').html(pattern + required);
				break;
				case 'tel': $('#attributes').html(pattern + required);
				break;
				case 'time': $('#attributes').html(value);
				break;
				case 'url': $('#attributes').html();
				break;
			}
		});


});