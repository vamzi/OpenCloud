<?php
		ini_set('upload_max_filesize', '100M');
		ini_set('post_max_size', '100M');
		ini_set('max_input_time', 3000);
		ini_set('max_execution_time', 3000);
?>
<html>
<head>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
    
    <style>
        body {
            background-color: #252830;
        }
        .setwidth {
            max-width: 100px;
        }
        .color1 {
            color: #2cb22c;
        }
        .borderless tbody tr td, .borderless tbody tr th, .borderless thead tr th{
            border: none;
        }
        .center {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .vertical-center {
            min-height: 100%;
            min-width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        a{
			color:inherit;
		}
        a: hover{
			color:#2cb22c;
            text-decoration: none;
			cursor:pointer;
        }
        
        .navbar-custom {
  background-color: #252830;
  border-color: #252830;
}
.navbar-custom .navbar-brand {
  color: #2cb22c;
}
.navbar-custom .navbar-brand:hover,
.navbar-custom .navbar-brand:focus {
  color: #2cb22c;
}
.navbar-custom .navbar-text {
  color: #2cb22c;
}
.navbar-custom .navbar-nav > li > a {
  color: #2cb22c;
}
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus {
  color: #2cb22c;
}
.navbar-custom .navbar-nav > .active > a,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
  color: #2cb22c;
  background-color: #252830;
}
.navbar-custom .navbar-nav > .open > a,
.navbar-custom .navbar-nav > .open > a:hover,
.navbar-custom .navbar-nav > .open > a:focus {
  color: #2cb22c;
  background-color: #252830;
}
.navbar-custom .navbar-toggle {
  border-color: #252830;
}
.navbar-custom .navbar-toggle:hover,
.navbar-custom .navbar-toggle:focus {
  background-color: #252830;
}
.navbar-custom .navbar-toggle .icon-bar {
  background-color: #2cb22c;
}
.navbar-custom .navbar-collapse,
.navbar-custom .navbar-form {
  border-color: #2cb22c;
}
.navbar-custom .navbar-link {
  color: #2cb22c;
}
.navbar-custom .navbar-link:hover {
  color: #2cb22c;
}

@media (max-width: 767px) {
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
    color: #2cb22c;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #2cb22c;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #2cb22c;
    background-color: #252830;
  }
}
    </style>
</head>
    <body>
        
  <nav class="navbar navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
        
        <br>
            
        <div class="container">
                
         <div class="row">
            <div class="col-sm-6 col-md-2 col-lg-2">
                
             </div>
                <div class="col-sm-6 col-md-10 col-lg-10">
                    
                <div class="row">
                    <table class="table color1 borderless">
                        <tbody>
                        <tr><td class="col-sm-6 col-md-3 col-lg-3">
                    <div>
                       <h5 class="color1"><?php $temp_dir="";
					   if(isset($_GET['dir_path'])){
					   $dir_path=$_GET['dir_path'];
					   }else{$dir_path='home/';}
					   $GLOBAL['dir_path']=$dir_path;
					   $dirs=explode("/",$dir_path);
					   $dirs_c=count($dirs);
					   for($i=0;$i<$dirs_c-1;$i++){
						   if(empty($temp_dir)){
							   $temp_dir=$dirs[$i];
						   }else{
						   $temp_dir=$temp_dir.'/'.$dirs[$i];}
						   echo "<a href='index.php?dir_path=$temp_dir/'>$dirs[$i]</a> >";
					   }
					   ?></h5>
                    </div>
                        </td>
                        <td class="col-sm-6 col-md-9 col-lg-9">
                    <div>
						<form action='' method="POST" enctype="multipart/form-data">
						<input class="btn-success btn-xs" type="file" name="file" />
						<td><input  class="btn-success btn-xs" type="submit" name="Upload"/></td>
						</form
                    </div>
                        </td><td>
						<!--pop up -->
						 <!-- Trigger the modal with a button -->
						<button type="button" class="btn-success btn-xs" data-toggle="modal" data-target="#myModal">New Dir</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
    
					<!-- Modal content-->
						<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Enter Directory Name.</h4>
						</div>
						<div class="modal-body">
						<form role="form" method="get" action="">
						<div class="form-group">
						<?php $dir=$GLOBAL['dir_path'];echo "<input type='hidden' id='dir_path' name='dir_path' value='$dir'/>"; ?>
						<input type="text" class="form-control" id="newdir" name="newdir">
						<button type="submit" class="btn btn-default">Create</button>
						</form>
						</div>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
						</div>   
						</div>
						</div></td>
						</tr>    
                        </tbody>
                    </table>
                </div>
                <div class="row">
                <table class="table table-responsive color1 borderless">
            
                <thead>
                    <th class="col-sm-7 col-md-7 col-lg-7">File Name</th>
                    <th class="col-sm-2 col-md-2 col-lg-2">Size</th>
                    <th class="col-sm-2 col-md-2 col-lg-2">Modified</th>
                    <th> </th>
                    </thead>
                <tbody>
				<?php
				function human_filesize($bytes, $decimals = 2) {
				$sz = 'BKMGTP';
				$factor = floor((strlen($bytes) - 1) / 3);
				return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
					}
				if(isset($_GET['dir_path'])){
				$dir=$_GET['dir_path'];
				}else{
					$dir="home/";
				}
				if(isset($_GET['dir_path_del'])){
					$type=filetype($_GET['dir_path_del']);
					if($type=='dir'){
						rmdir($_GET['dir_path_del']);
							echo 'deleted a file at '.$_GET['dir_path_del'];
					}else{
						unlink($_GET['dir_path_del']);
						echo 'deleted a file at '.$_GET['dir_path_del'];
					}
					//$res=unlink($_GET['dir_path_del']);
					//if($res!=1){
				//		rmdir($_GET['dir_path_del']);
					//}
				//	echo 'deleted a file at '.$_GET['dir_path_del'];
					
				}
				if(isset($_GET['newdir'])){
					$new_dir=$dir.$_GET['newdir'];
					echo 'Created a new folder at '.$new_dir;
					mkdir($new_dir, 0777);
				}
				if(isset($_GET['down'])){
					$down_path=$_GET['down'];
					if (file_exists($down_path)) {
					header('Content-Description: File Transfer');
					header('Content-Type: application/octet-stream');
					header('Content-Disposition: attachment; filename="'.basename($down_path).'"');
					header('Expires: 0');
					header('Cache-Control: must-revalidate');
					header('Pragma: public');
					header('Content-Length: ' . filesize($down_path));
					readfile($down_path);
				}
				}
				if(isset($_FILES['file'])){
					$file_name = $_FILES['file']['name'];
					$file_size =$_FILES['file']['size'];
					$file_tmp =$_FILES['file']['tmp_name'];
					$file_type=$_FILES['file']['type'];
					move_uploaded_file($file_tmp,$dir.$file_name);
					echo "Successfully uploaded to $dir";
				}
				$files = scandir($dir);
				$len=count($files);
				if($len==2){
					
					echo "<tr><td colspan=3>No files found.</td></tr>";
				}

				for($i=2;$i<$len;$i++){
				$path=$dir.$files[$i];
				$file_name=$files[$i];
				$size=filesize($path);
				$h_size=human_filesize($size,2);
				$type=filetype($path);
				echo "<tr>";
				if($type=='dir'){
						echo "<td><a href='index.php?dir_path=$path/'>$file_name</a></td>";
						$h_size=dir_size($path);
					}else{
						echo "<td>$file_name</td>";
					}
				echo "<td>$h_size</td>";
				echo "<td>".date("F d Y H:i:s.", filemtime($path))."</td>";
				echo "<td><form action='index.php' method='get'><input type='hidden' id='dir_path_del' name='dir_path_del' value='$path'/>
				<input type='hidden' id='dir_path' name='dir_path' value='$dir'/>
				<input type='submit' class='btn-success btn-xs' value='Delete'></form>";
					if($type=='dir'){
						
					}else{
						echo "<a href='down.php?down=$path'>Download&nbsp;</a>";
					$file_t=explode('.',$file_name);
					if($file_t[1]=='mp4'){
					echo"<a  href='stream.php?video=$path'>Stream</a></td>";
					}
					}
				
				}
				function dir_size($d_path){
				return 'NA';
				}
				
				?>
                   
                </tbody>
          
            </table>
                </div>
                </div> 
            </div>
        </div>
    </body>
</html>