<!DOCTYPE html>
<html>

<head>
  <title>F T U Apprenticeship</title>
  <meta charset='utf-8' />
  <link href='../admin/fullcalendar/fullcalendar.css' rel='stylesheet' />
  <link href='../admin/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
  <script src='../admin/fullcalendar/lib/moment.min.js'></script>
  <script src='../admin/fullcalendar/lib/jquery.min.js'></script>
  <script src='../admin/fullcalendar/fullcalendar.min.js'></script>
  <script src='../admin/fullcalendar/lang/th.js'></script>

  <?php

 include ("../sql_function/connect.php");
                                    $sql = "SELECT tb_supervision_schedule.*, 
                                    tb_advisor.tb_ads_name,  tb_advisor.tb_ads_lastname,
                                    tb_localtion.tb_lo_name,
                                    tb_mentor.tb_mentor_name,
                                    tb_advisor.tb_ads_lastname,
                                     tb_mentor.tb_mentor_lastname
                                    FROM tb_supervision_schedule 
                                    LEFT JOIN tb_advisor ON tb_supervision_schedule.tb_advisor_tb_ads_id = tb_advisor.tb_ads_id 
                                    LEFT JOIN tb_mentor ON tb_supervision_schedule.tb_mentor_tb_mentor_id = tb_mentor.tb_mentor_id 
                                    LEFT JOIN tb_localtion ON tb_supervision_schedule.tb_localtion_tb_lo_id = tb_localtion.tb_lo_id   ";
                                    $rs  = mysql_query($sql);
$str = "";
 while($rw = mysql_fetch_array($rs)){
  $str .= "{title:'สถานที่นิเทศ  $rw[tb_lo_name]  อาจารย์นิเทศ $rw[tb_ads_name]$rw[tb_ads_lastname]',start:'$rw[tb_ss_date]T$rw[tb_ss_timestart]:00',end:'$rw[tb_ss_date]T$rw[tb_ss_timefinish]:00'},";
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
      padding: 30px;
      font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
      font-size: 14px;
    }

    #calendar {
      max-width: 1200px;
      margin: auto;
    }
  </style>
</head>

<body>
  <div class="panel-group">
    <div class="panel panel-default">

      <center>
        <ol class="breadcrumb">
          <li class="active">
            <i class="fa fa-calendar fa-2x"></i> <strong>ปฏิทินการนิเทศอาจารย์ </strong>
          </li>


        </ol>
      </center>




      <div class="panel-body">

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
        </br>



      </div>
    </div>
  </div>

</body>

</html>