<?php

//index.php

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Import CSV File</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .box
  {
   max-width:600px;
   width:100%;
   margin: 0 auto;;
  }
  </style>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">Import CSV File</h3>
   <br />
   <form id="upload_csv" method="post" enctype="multipart/form-data">
    <div class="col-md-3">
     <br />
     <label>Add More Data</label>
    </div>  
                <div class="col-md-4">  
                   <input type="file" name="csv_file" id="csv_file" accept=".csv" style="margin-top:15px;" />
                </div>  
                <div class="col-md-5">  
                    <input type="submit" name="upload" id="upload" value="Upload" style="margin-top:10px;" class="btn btn-info" />
                </div>  
                <div style="clear:both"></div>
   </form>
   <br />
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered" id="data-table">
     <thead>
      <tr>
       <th>ID</th>
       <th>Column 1</th>
       <th>Column 2</th>
       <th>Column 3</th>
       <th>Column 4</th>
       <th>Column 5</th>
       <th>Column 6</th>
       <th>Column 7</th>
       <th>Column 8</th>
       <th>Column 9</th>
       <th>Column 10</th>
       <th>Column 11</th>
       <th>Column 12</th>
       <th>Column 13</th>
       <th>Column 14</th>
       <th>Column 15</th>
       <th>Column 16</th>
       <th>Column 17</th>
       <th>Column 18</th>
       <th>Column 19</th>
       <th>Column 20</th>
       <th>Column 21</th>
       <th>Column 22</th>
       <th>Column 23</th>
       <th>Column 24</th>
       <th>Column 25</th>
       <th>Column 26</th>
       <th>Column 27</th>
       <th>Column 28</th>
       <th>Column 29</th>
       <th>Column 30</th>
       <th>Column 31</th>
       <th>Column 32</th>
       <th>Column 33</th>
       <th>Column 34</th>
       <th>Column 35</th>
       <th>Column 36</th>
       <th>Column 37</th>
       <th>Column 38</th>
       <th>Column 39</th>
       <th>Column 40</th>
       <th>Column 41</th>
       
      </tr>
     </thead>
    </table>
   </div>
  </div>
 </body>
</html>

<script>

$(document).ready(function(){
     $('#upload_csv').on('submit', function(event){
       event.preventDefault();
   
  $.ajax({
   url:"import.php",
   method:"POST",
   data:new FormData(this),
   dataType:'json',
   contentType:false,
   cache:false,
   processData:false,
      success:function(jsonData)
      {
    $('#csv_file').val('');
    $('#data-table').DataTable({
     data  :  jsonData,
     columns :  [
       { data : "id" },
      { data : "column_1" },
      { data : "column_2" },
      { data : "column_3" },
      { data : "column_4" },
      { data : "column_5" },
      { data : "column_6" },
      { data : "column_7" },
      { data : "column_8" },
      { data : "column_9" },
      { data : "column_10" },
      { data : "column_11" },
      { data : "column_12" },
      { data : "column_13" },
      { data : "column_14" },
      { data : "column_15" },
      { data : "column_16" },
      { data : "column_17" },
      { data : "column_18" },
      { data : "column_19" },
      { data : "column_20" },
      { data : "column_21" },
      { data : "column_22" },
      { data : "column_23" },
      { data : "column_24" },
      { data : "column_25" },
      { data : "column_26" },
      { data : "column_27" },
      { data : "column_28" },
      { data : "column_29" },
      { data : "column_30" },
      { data : "column_31" },
      { data : "column_32" },
      { data : "column_33" },
      { data : "column_34" },
      { data : "column_35" },
      { data : "column_36" },
      { data : "column_37" },
      { data : "column_38" },
      { data : "column_39" },
      { data : "column_40" },
      { data : "column_41" }
    ]
    });
   }
  });
 });
});

</script>
