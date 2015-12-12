
$(':checkbox').on('click', function()
{
	if($(this).is(':checked'))
	{
		$(':radio[name="'+$(this).attr('id')+'"]').prop('disabled', false);		
		$('.beneficios_solic[ben="'+$(this).attr('id')+'"]').prop('disabled', false);
	}else{
		$(':radio[name="'+$(this).attr('id')+'"]').prop('disabled', true);
		$('.beneficios_solic[ben="'+$(this).attr('id')+'"]').prop('disabled', true);
	}
});



