
$(function(){
  var i = 2;
  $('#adduser').click(function(){
    $('#tdetails').append('<tr><td><input type="text" name="ten[' + i +']"  class="form-control"/></td><td><select class="form-control" name="ten[' + i +']" ><option>male</option><option>female</option></select></td><td><input type="text" name="ten[' + i +']" class="form-control" /></td><td><input type="text" name="ten[' + i +']" class="form-control" /></td></tr>');
  i++;
  });
});
