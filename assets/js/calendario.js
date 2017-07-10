$(document).ready(function(){

  $('#calendario').datetimepicker({
          format: 'yyyy/mm/dd',
          defaultDate: '1950-01-01',
          viewMode: 'years',
          startDate : new Date('1950-01-01'),
          endDate : new Date('1990-12-12')
          //showClose: true
          //minDate : new Date('1950-01-01'),
          //autoclose: 1,
         // maxDate: '2016'
        
  });

});