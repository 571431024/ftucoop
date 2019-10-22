<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='../admin/fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='../admin/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='../admin/fullcalendar/lib/moment.min.js'></script>
<script src='../admin/fullcalendar/lib/jquery.min.js'></script>
<script src='../admin/fullcalendar/fullcalendar.min.js'></script>
<script src='../admin/fullcalendar/lang/th.js'></script>

<?php

require "../admin/function.php";
$con = new mainFunction();
$obj = $con->select('tb_calendar');
$str = "";
while($rw = mysql_fetch_array($obj)){
  $str .= "{title:'$rw[ca_location] $rw[ca_advisor]',start:'$rw[ca_date]T$rw[ca_stime]:00',end:'$rw[ca_edate]T$rw[ca_etime]:00'},";
}
//echo $str;
?>
<script>

  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      //lang: 'th',
      defaultDate: '<?php  echo date("Y-m-d"); ?>',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [<?php echo $str; ?>]
    });
    
  });

</script>
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

  <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
  <script src="../admin/js/bootstrap.min.js"></script>

    <!-- Custom Fonts -->
    <link href="../admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script>
      $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
    </script>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">


         <form class="form-horizontal" method="post" action="../sql_function/sql_add_calendar.php">
                                                            <input type="hidden" name="tb_ss_id" value="">
                                                                

                                                        <div class="form-group">
                                                          <label class="control-label col-md-2">วันที่เริ่ม</label>
                                                          <div class="col-md-4">  
                                                            <input type="date" class="form-control" id="ca_date" name="ca_date"   >
                                                          </div>
                                                        </div>
                                                         <div class="form-group">
                                                          <label class="control-label col-md-2">วันที่สิ้นสุด</label>
                                                          <div class="col-md-4">  
                                                            <input type="date" class="form-control" id="ca_edate" name="ca_edate"   >
                                                          </div>
                                                        </div>

                                                        <div class="form-group">
                                                           <label class="control-label col-md-2">เริ่มเวลา</label>
                                                            <div class="col-md-4">
                                                            <input type="time" class="form-control" id="ca_stime" name="ca_stime"  >
                                                            </div>
                                                              </div>
                                                       
                                                        
                                                        
                                                        
                                                        <div class="form-group">
                                                           <label class="control-label col-md-2">เวลาสิ้นสุด</label>
                                                            <div class="col-md-4">
                                                            <input type="time" class="form-control" id="ca_etime" name="ca_etime"   >
                                                            </div>
                                                              </div>

                                                                <div class="form-group">
                                                           <label class="control-label col-md-2">อาจารย์</label>
                                                            <div class="col-md-4">
                                                            <input type="text" class="form-control" id="ca_advisor" name="ca_advisor"  >
                                                            </div>
                                                              </div>

                                                                <div class="form-group">
                                                           <label class="control-label col-md-2">สถานที่</label>
                                                            <div class="col-md-4">
                                                            <input type="text" class="form-control" id="ca_location" name="ca_location"  >
                                                            </div>
                                                              </div>

                                                               <div class="form-group">
                                                           <label class="control-label col-md-2">พี่เลี้ยง</label>
                                                            <div class="col-md-4">
                                                            <input type="text" class="form-control" id="ca_mentor" name="ca_mentor"   >
                                                            </div>
                                                              </div>
                                                           
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 </form>
</body>
</html>
