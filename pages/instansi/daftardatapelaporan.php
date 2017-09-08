
<html>
  
<body>
    <p><br/></p>
    <div class="container">

<!-- Button trigger modal -->

<br/>
<div id="info"></div>
 <br/>
      <div id="viewdata"></div>
    </div>
	
<script>

    function viewdata(){
       $.ajax({
	   type: "GET",
	   url: "../proses/getdatalaporan.php"
      }).done(function( data ) {
	  $('#viewdata').html(data);
      });
    }
	
    
	function updatedata(str){
	
	var un = str;
	var ps = $('#ps'+str).val();
	var nm = $('#nm'+str).val();
	var al = $('#al'+str).val();
	var tl = $('#tl'+str).val();
	var el = $('#el'+str).val();
	
	var datas="nm="+nm+"&ps="+ps+"&al="+al+"&tl="+tl+"&el="+el;
      
	$.ajax({
	   type: "POST",
	   url: "../proses/ubahdatalaporan.php?username="+un,
	   data: datas
	}).done(function( data ) {
	  $('#info').html(data);
	  viewdata();
	});
    }
    
    </script>

</body>
</html>
