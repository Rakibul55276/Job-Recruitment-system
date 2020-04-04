<?php 
	
	require("fpdf/fpdf.php");
	session_start();
	$pdf = new FPDF();
	$con = new mysqli('localhost', 'root', '' ,'update');

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
    	header('location: login-register.php');
	}
    $username = $_SESSION['username'];
    $id = $_GET['id'];
	$sql = "SELECT * FROM `resume` WHERE username= '$username' AND id=".$id;

    $query = mysqli_query($con, $sql) or die(mysqli_error());

    $r = $g =$b =0;
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',13);
	$pdf->cell(200,13,' ',0,1);

	$pdf->SetFillColor(230,230,230);
	while($row = mysqli_fetch_assoc($query)) :
    $pdf->setTitle('Resume | '.$row['name']);

    $pdf->SetFont('Arial','B',17);
		$pdf->cell(60,13,' ',0,0);
		if (empty($row['image'])) {
			// $pdf->image('user_images/'.$row['image'],92,5,30);
		}else{
			$pdf->image('../user_images/'.$row['image'],92,5,30);
		}
		$pdf->cell(62,13,' ',0,1);
		$pdf->Ln(1);
		$pdf->cell(65,7,' ',0,1);
		$pdf->SetFillColor(0,0,0);
		$pdf->cell(190,1,' ',0,1,'L',1);
		$pdf->Ln(2);
		// $pdf->cell(190,13,' ',1,1);
		// $pdf->SetTextColor(232,73,31);
		$pdf->cell(190,7,$row['name'],0,1,'C');
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFillColor($r,$g,$b);
		$pdf->cell(30,1,' ',0,0);
		$pdf->cell(130,0.5,' ',0,1,'L',1);

		$pdf->SetFont('Arial','B',16);
		$pdf->cell(190,14,'Contact',0,1,'C');

		// $pdf->SetTextColor(232,73,31);
		$pdf->SetFont('Arial','B',13);
		$pdf->cell(15,8,'',0,0);
		$pdf->cell(55,8,'Email ID',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->Multicell(110,8,$row['email'],0,1);

		// $pdf->SetTextColor(232,73,31);
		$pdf->cell(15,8,'',0,0);
		$pdf->SetFont('Arial','B',13);
		$pdf->cell(55,8,'Phone',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->Multicell(110,8,$row['phone'],0,1);

		// $pdf->SetTextColor(232,73,31);
		$pdf->cell(15,8,'',0,0);
		$pdf->SetFont('Arial','B',13);
		$pdf->cell(55,8,'Location',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		// $pdf->cell(70,8,$row['location'],0,1);
		$pdf->Multicell(110,8,$row['location'],0,1);

		// $pdf->SetTextColor(232,73,31);
		$pdf->cell(15,8,'',0,0);
		$pdf->SetFont('Arial','B',13);
		$pdf->cell(55,8,'Website',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->Multicell(110,8,$row['website'],0,1);

		$pdf->Ln(7);

		$pdf->SetFillColor($r,$g,$b);
		$pdf->cell(30,1,' ',0,0);
		$pdf->cell(130,0.5,' ',0,1,'L',1);

		$pdf->SetFont('Arial','B',16);
		$pdf->cell(190,14,'About Myself',0,1,'C');
		// $pdf->SetTextColor(232,73,31);
		$pdf->SetFont('Arial','B',13);
		$pdf->cell(15,8,'',0,0);
		$pdf->cell(55,8,'About',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->Multicell(110,8,$row['about'],0,1);

		// $pdf->SetTextColor(232,73,31);
		$pdf->SetFont('Arial','B',13);
		$pdf->cell(15,8,'',0,0);
		$pdf->cell(55,8,'Profile',0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->SetTextColor(0,0,0);
		$pdf->Multicell(110,8,$row['profile'],0,1);

		$pdf->Ln(7);


		$pdf->SetFillColor($r,$g,$b);
		$pdf->cell(30,1,' ',0,0);
		$pdf->cell(130,0.5,' ',0,1,'L',1);

		$pdf->SetFont('Arial','B',16);
		$pdf->cell(190,14,'Skills and Experiences',0,1,'C');
		$pdf->SetFont('Arial','B',13);

		$pdf->cell(15,8,'',0,0);
		$pdf->SetFont('Arial','B',13);
		// $pdf->SetTextColor(232,73,31);
		$pdf->cell(55,8,'Skills',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->Multicell(110,8,$row['skill'],0,1);

		$pdf->cell(15,8,'',0,0);
		$pdf->SetFont('Arial','B',13);
		// $pdf->SetTextColor(232,73,31);
		$pdf->cell(55,8,'Work',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->Multicell(110,8,$row['work'],0,1);

		$pdf->Ln(7);

		$pdf->SetFillColor($r,$g,$b);
		$pdf->cell(30,1,' ',0,0);
		$pdf->cell(130,0.5,' ',0,1,'L',1);

		$pdf->SetFont('Arial','B',16);
		$pdf->cell(190,14,'Language and Accomplishment',0,1,'C');
		$pdf->SetFont('Arial','B',13);

		// $pdf->SetTextColor(232,73,31);
		$pdf->cell(15,8,'',0,0);
		$pdf->SetFont('Arial','B',13);
		$pdf->cell(55,8,'Awards',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->Multicell(110,8,$row['award'],0,1);

		// $pdf->SetTextColor(232,73,31);
		$pdf->cell(15,8,'',0,0);
		$pdf->SetFont('Arial','B',13);
		$pdf->cell(55,8,'Languages',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->Multicell(110,8,$row['language'],0,1);

		$pdf->Ln(7);

		$pdf->SetFillColor($r,$g,$b);
		$pdf->cell(30,1,' ',0,0);
		$pdf->cell(130,0.5,' ',0,1,'L',1);

		$pdf->SetFont('Arial','B',16);
		$pdf->cell(190,14,'Interest and Hobbies',0,1,'C');
		$pdf->SetFont('Arial','B',13);

		// $pdf->SetTextColor(232,73,31);
		$pdf->cell(15,8,'',0,0);
		$pdf->SetFont('Arial','B',13);
		$pdf->cell(55,8,'Interest',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->Multicell(110,8,$row['interest'],0,1);

		$pdf->Ln(7);


		$pdf->SetFillColor($r,$g,$b);
		$pdf->cell(30,1,' ',0,0);
		$pdf->cell(130,0.5,' ',0,1,'L',1);

		$pdf->SetFont('Arial','B',16);
		$pdf->cell(190,14,'References',0,1,'C');
		$pdf->SetFont('Arial','B',13);

		// $pdf->SetTextColor(232,73,31);

		$pdf->cell(15,8,'',0,0);
		$pdf->SetFont('Arial','B',13);
		$pdf->cell(55,8,'References',0,0);
		$pdf->SetTextColor(0,0,0);
		$pdf->SetFont('Arial','',13);
		$pdf->Multicell(110,8,$row['reference'],0,1);

		$pdf->Ln(7);



	 endwhile;
    
    $pdf->SetFont('Arial','',12);


    $pdf->output();

 ?>