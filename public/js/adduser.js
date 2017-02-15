
$(function(){
  $('#adduser').click(function(){
    $('#tdetails').append('<tr><td><input type="text" class="form-control"/></td><td><select class="form-control"><option>male</option><option>female</option></select></td><td><input type="text" class="form-control" /></td><td><input type="text" class="form-control" /></td></tr>');
  });
});
