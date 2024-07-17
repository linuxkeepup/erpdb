<!DOCTYPE html>
<html>
	<head>
	 <meta charset="UTF-8">
	<title>ERP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

	</head>
	 <style>
    body {
    
  background: conic-gradient(
    from 336deg at 28% 83%,
    rgba(132, 224, 137, 1) 25deg,
    rgba(116, 142, 227, 1) 48deg,
    rgba(7, 150, 179, 1) 71deg,
    rgba(106, 212, 203, 1) 97deg,
    rgba(107, 233, 242, 1) 100deg,
    rgba(198, 233, 247, 0.71) 100deg
  );
  background-blend-mode: multiply;
}


        /* Extend the width of the table */
        .table-extended {
            width: 100%; /* Set the width to 100% */
            max-width: none; /* Allow the table to extend beyond the container width */
        }
    

  </style>
<body>
<script>
    function downloadCSV() {
      // Get table HTML content
      var table = document.getElementById("clientTable");
      var html = table.outerHTML;

      // Generate a download link
      var link = document.createElement("a");
      link.href = "data:text/csv;charset=utf-8," + escape(html);
      link.download = "client_list.csv";
      link.click();
    }
  </script>
 
  
  


<!--
 <a href="index.php"><h1 id="main_title"> CLIENT DETAILES</h1></a>
-->
  <!-- Button for downloading CSV -->
  <!--
    <a href="cldownload.php"><button class="btn btn-primary" onclick="downloadCSV()">Download CSV</button></a>
-->
 <a href="index.php"><h1 id="main_title">CLIENT DETAILS</h1></a>
    <a href="cldownload.php" class="btn btn-primary" id="dw">Download CSV</a>
    <a href="upload.php" class="btn btn-primary" id="upl">Upload CSV</a>

 <div class="container">
  
  