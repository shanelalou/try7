<?php include '../../config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
	<link rel="icon" type="image/png" href="../../source/images/icon.png">
	<link rel="stylesheet" type="text/css" href="../../source/styles/flexigrid.css">
	<link rel="stylesheet" type="text/css" href="../../source/styles/style.css">
	<script type="text/javascript" src="../../source/scripts/flexigrid.pack.js"></script>
	<script type="text/javascript" src="../../source/scripts/flexigrid.js"></script>
	<script>
		$(function(){
			
			windowHeight = $(window).height() - 300;
			$('#grid').flexigrid({
				url: 'functions/list2.php',
				dataType: 'json',
				colModel : [
					{display: 'SUBJECT CODE', name : 'SubjectCode', width : 90, align: 'center'},
					{display: 'SUBJECT TITLE', name : 'SubjectTitle', width : 320, align: 'center'},
					{display: 'LEC.', name : 'Lec', width : 0, align: 'left' ,hide:true },
					{display: 'LAB.', name : 'Lab', width : 0, align: 'left' ,hide:true },
					{display: 'PREREQUISITE', name : 'Prerequisite', width : 0, align: 'left' ,hide:true},
					{display: 'YEAR', name : 'Year', width : 40, align: 'left' ,hide:true},
					{display: 'SEM.', name : 'Sem', width : 40, align: 'left' ,hide:true},
					{display: 'PRELIM GRADE', name : 'Prelim', width : 70, align: 'left' ,hide:true },
					{display: 'PRELIM ABS.', name : 'Absences', width : 70, align: 'left' ,hide:true },
					{display: 'MIDTERM GRADE', name : 'Midterm', width : 70, align: 'left' ,hide:true },
					{display: 'MIDTERM ABS.', name : 'Absences', width : 70, align: 'left' ,hide:true },
					{display: 'FINAL GRADE', name : 'Grade', width : 70, align: 'left',hide:true },
					{display: 'FINAL ABS.', name : 'Grade', width : 70, align: 'left' ,hide:true },
					{display: 'TOTAL ABS.', name : 'TotalAbsences', width : 70, align: 'left' ,hide:true },
					{display: 'EQUIV.', name : 'Equiv', width : 40, align: 'left',hide:true},
					{display: 'REMARKS', name : 'Remarks', width : 90, align: 'left',hide:true},
					{display: 'INSTRUCTOR', name : 'Instructor', width : 150, align: 'left'},
					{display: 'CLASS CODE', name : 'ClassCode', width : 80, align: 'left' },
					{display: 'DAY', name : 'Time', width : 80, align: 'left' },
					{display: 'TIME', name : 'Time', width : 100, align: 'left' },
					{display: 'ROOM', name : 'Room', width : 40, align: 'left' },
					{display: 'ACADEMIC YEAR', name : 'AcademicYear', width : 90, align: 'left' ,hide:true },
					{display: 'SEMESTER', name : 'Semester', width : 50, align: 'left' ,hide:true }
				],
				usepager: true,
				searchitems : [
					{display: 'Subject Code', name : 'a.subject_code'}
				],
				
				title: 'SCHEDULE ',
		
				height: windowHeight
			});
			
			$('.sDiv2 :nth-child(2),.pDiv2 :nth-child(2),.pDiv2 :nth-child(3),.pDiv2 :nth-child(4),.pDiv2 :nth-child(5),.pDiv2 :nth-child(6),.pDiv2 :nth-child(7),.pDiv2 :nth-child(8),.pDiv2 :nth-child(9)').hide();

			setInterval(function(){
				var items = $('tr :nth-child(16) > div');
				$.each(items,function(i){
					//console.log(items[i].innerHTML);
					if(items[i].innerHTML=="Passed"){
						$(items[i]).css('color','green');
					}else if(items[i].innerHTML=="&nbsp;" || items[i].innerHTML=="" || items[i].innerHTML=="REMARKS"){
						$(items[i]).css('color','');
					}else{
						$(items[i]).css('color','red');
					}
				});
			},1);
		});
	</script>
</head>
<body>
	

	<div >
		<div >
			<div  style="font-size:15px"><?php echo $_SESSION['student'].' - '.student($_SESSION['student'],"lastname").", ".student($_SESSION['student'],"firstname").", ".student($_SESSION['student'],"middlename")." - ".student($_SESSION['student'],"course")." ".student($_SESSION['student'],"year"); ?></div>
	<a href="index.html">VIEW GRADES</a> &nbsp;&nbsp;&nbsp;	<a href="../logout.php">LOGOUT</a>
		</div>
	</div>

	<div ><table id="grid"></table></div>

</body>
</html>