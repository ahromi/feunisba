<?php
/** define time
============================================================================ **/
?>
<script language="javascript">
	var timerID 		= null
	var timerRunning 	= false
	var diff 			= 0

	function stopclock()
	{	
		if(timerRunning)
		clearTimeout(timerID);
		timerRunning = false;
	}

	function startclock()
	{
		xnow = new Date();
		jnow = new Date();
		diff = xnow - jnow;
		stopclock();
		showtime();
	}

	function showtime()
	{
		jnow = new Date();
		xnow = new Date(jnow.valueOf() + diff);
		var lmonth=(((xnow.getMonth()+1) < 10) ? "0" : "") + (xnow.getMonth()+1);
		var date=((xnow.getDate() < 10) ? "0" : "") + xnow.getDate();
		var year=xnow.getYear();
		if (year<2000) year=year+1900
		var hour=((xnow.getHours() < 10) ? "0" : "") + xnow.getHours();
		var min=((xnow.getMinutes() < 10) ? "0" : "") + xnow.getMinutes();
		var sec=((xnow.getSeconds() < 10) ? "0" : "") + xnow.getSeconds();
		DateTime.innerHTML = '' + hour + ':' + min + ':' + sec+'';
		timerID = setTimeout("showtime()",1000);
		timerRunning = true;
	}
</script>

<?php
/** define date
============================================================================ **/
switch(date(D))
{
	case Sun : echo "Minggu"; break;
	case Mon : echo "Senin"; break;
	case Tue : echo "Selasa"; break;
	case Wed : echo "Rabu"; break;
	case Thu : echo "Kamis"; break;
	case Fri : echo "Jum'at"; break;
	case Sat : echo "Sabtu"; break;
}			  
echo(", ");
echo(date("d "));

/** define month
============================================================================ **/	
switch(date(M))
{
	case Jan : echo "Januari"; break;
	case Feb : echo "Februari"; break;
	case Mar : echo "Maret"; break;
	case Apr : echo "April"; break;
	case May : echo "Mei"; break;
	case Jun : echo "Juni"; break;
	case Jul : echo "Juli"; break;
	case Aug : echo "Agustus"; break;
	case Sep : echo "September"; break;
	case Oct : echo "Oktober"; break;
	case Nov : echo "November"; break;
	case Dec : echo "Desember"; break;
}

/** define year
============================================================================ **/
echo(date(" Y"));					
echo"<body onLoad=\"startclock();\">&nbsp;&nbsp;|&nbsp;<font class=\"table_hour\" id=DateTime></font>&nbsp;&nbsp;</body>";
/** ======================================================================== **/
?>