<?php 


$con=mysqli_connect("localhost","root","","sentiment");

$querys= mysqli_query($con,"select count(tweet) as okays from sentimen where kelas like 'positive'");
if($querys){
while($row=mysqli_fetch_array($querys)){

$tweets=$row['okays'];}}

$queryss= mysqli_query($con,"select count(tweet) as okayss from sentimen where kelas like 'negative'");
if($queryss){
while($row=mysqli_fetch_array($queryss)){

$tweetsss=$row['okayss'];}}

$query= mysqli_query($con,"select count(tweet) as okay from sentimen where kelas like 'neutral'");
if($query){
while($row=mysqli_fetch_array($query)){

$tweet=$row['okay'];}}

$quer= mysqli_query($con,"select count(tweet) as oka from sentimen");
if($quer){
while($row=mysqli_fetch_array($quer)){

$tweetdf=$row['oka'];}}

//echo $tweetdf;
//echo "SS";
//echo $tweets;
//echo "SS";
//echo $tweetsss;
//echo "SS";
//echo $tweet;
//echo "SS";
	
$positive=($tweets*100)/$tweetdf;
$negative=($tweetsss*100)/$tweetdf;
$neutral=($tweet*100)/$tweetdf;


$santai="C:\\xampp\htdocs\PhpProject2356\\newfile.txt";
$myfile = fopen($santai, "r") or die("Unable to open file!");
$kupas=fread($myfile,filesize($santai));
fclose($myfile);

$dataPoints = array( 
	array("label"=>"Positive", "y"=>$positive),
	array("label"=>"Negative", "y"=>$negative),
	array("label"=>"Neutral", "y"=>$neutral)
	
)

	
?>
<!DOCTYPE HTML>
<html>
<head>
 <link rel="stylesheet" href="css/style.css">
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Result summary of sentiment analysis"
	},
	subtitles: [{
		text: "<?php echo $kupas ?>"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}

</script>
<meta charset="utf-8">
</head>
<body><center><h1>Result of sentiment analysis for <?php echo $kupas ?></h1><center><br><center>
<div id="chartContainer" style="height: 370px; width: 50%;" class="la"><script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></div>
</center>
<br>
<br>
<center>
<div><table style="width:80%">
						<thead>
							<tr>
								<th class="column1">Tweets</th>
								<th class="column2">Sentiment orientation</th>
								
							</tr>
						</thead>
						<tbody>
						
						<?php 
						$q= mysqli_query($con,"select distinct tweet , kelas from sentimen");
if($q){
while($row=mysqli_fetch_array($q)){

						?>
								<tr>
									<td class="column1"><?php echo $row['tweet'];?></td>
									<td class="column2"><?php echo $row['kelas'];?></td>
									
								</tr>
								
<?php }}
mysqli_query($con,"delete from sentimen");


?>
								
								
						</tbody>
					</table></div><center>
					
					<br>
					</body>
					
</html>