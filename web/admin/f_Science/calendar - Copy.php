<!DOCTYPE html>
<!--
Created using JS Bin
http://jsbin.com

Copyright (c) 2016 by anonymous (http://jsbin.com/jekotanuya/1/edit)

Released under the MIT license: http://jsbin.mit-license.org
-->
<meta name="robots" content="noindex">
<html>
<head>  
  <link href="http://fonts.googleapis.com/css?family=Noto+Sans+Thai:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.css' />
  <script src="http://code.jquery.com/jquery.min.js"></script>  
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js'></script> 
  <script src='http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/fullcalendar.min.js'></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.1/lang-all.js'></script>
  <meta charset="utf-8">
  <title>Honglub.com</title>
<style id="jsbin-css">
body {
  margin: 0;
  padding: 50px 0 0 0;
  font-family: "Noto Sans Thai", sans-serif;
  font-size: 14px;
}
 
#calendar {
  width: 98%;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>
  <div id="calendar"></div>
  
  <div class="modal fade" id="mpeWorkTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 id="myModalLabel" class="modal-title">สร้าง Work Task</h4>
        </div>
        <div class="modal-body">
          <form id="taskForm" class="form-horizontal">
            <input type="hidden" id="hddStartTime"/>
            <input type="hidden" id="hddEndTime"/>
            <input type="hidden" id="hddAllDay" />

			<div class="form-group">
		      <label class="control-label col-md-3">ช่วงเวลา : </label>
              <div class="col-md-9">
		        <p id="lblTime" class="form-control-static">
				</p>
		      </div>
		    </div>
	        <div class="form-group">
		      <label class="control-label col-md-3">งานที่ต้องทำ : </label>
              <div class="col-md-9">
		        <input type="text" id="txtTask" class="form-control input-medium input-sm" />
		      </div>
		    </div>
	      </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnSave" class="btn btn-primary">บันทึก</button>
          <button type="button" id="btnCancel" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>          
        </div>
      </div>
    </div>
  </div>

  <div id="mpeAlertMsg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title" id="mySmallModalLabel">ข้อความ<a class="anchorjs-link" href="#mySmallModalLabel"><span class="anchorjs-icon"></span></a></h4>
        </div>
        <div class="modal-body">
                       บันทึกข้อมูลสำเร็จ
        </div>
      </div>
    </div>
  </div>
</div>
<script id="jsbin-javascript">
$("#calendar").fullCalendar({
  header:{
    left:'prev',
    center:'title',
    right:'next'
  },
  lang: 'th',
  timezone: 'Asia/Bangkok',
  defaultView:'agendaWeek',
  axisFormat: 'HH:mm',
  timeFormat: 'HH:mm',
  editable: true,
  selectable: true,
  select: function(start, end, allDay) {
    endtime = moment(end).format('HH:mm');
    starttime = moment(start).format('dd ll, HH:mm');
    var range = starttime + ' - ' + endtime;
    $('#mpeWorkTask #hddStartTime').val(start);
    $('#mpeWorkTask #hddEndTime').val(end);
    $('#mpeWorkTask #hddAllDay').val(allDay);
    $('#mpeWorkTask #lblTime').text(range);
    $('#mpeWorkTask').modal('show');
  }
});

$('#btnSave').on('click', function(e){
  e.preventDefault();
  doSave();
});

$('#btnCancel').on('click', function(e){
  e.preventDefault();
  $('#taskForm').find("input[type=text],input[type=hidden]").val("");
});

function doSave(){
  $("#mpeWorkTask").modal('hide');
  console.log($('#hddStartTime').val());
  console.log($('#hddEndTime').val());
  console.log($('#hddAllDay').val());
  $("#mpeAlertMsg").modal('show');
        
  $("#calendar").fullCalendar('renderEvent', {
    title: $('#txtTask').val(),
    start: $('#hddStartTime').val(),
    end: $('#hddEndTime').val(),
    allDay: ($('#hddAllDay').val() == "true"),
    color: '#87CEFA',
    textColor: '#333333'
  },true);

  $('#taskForm').find("input[type=text],input[type=hidden]").val("");
}
</script>
</body>
</html>