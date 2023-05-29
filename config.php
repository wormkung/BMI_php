        <?php
            session_start();

            $weight=$_POST['weight'];
            $height=$_POST ['height'] ;

            $height=$height/100;
            $bmi=$weight/($height*$height);
            
        if($bmi<=18.50){ 
                $_SESSION['red'] = "ผลคำนวณดัชนีมวลกาย  = ".$bmi."  " ."น้ำหนักต่ำกว่าเกณฑ์ / มีความเสี่ยงเกิดโรคขาดสารอาหาร";
                header("location: index.php");
        }else if($bmi>18.50 && $bmi<22.90){
                $_SESSION['green'] = "ผลคำนวณดัชนีมวลกาย  = ".$bmi."  " ."น้ำหนักสมส่วน / โอกาสการเกิดโรคแทรกซ้อน น้อยที่สุด";
                header("location: index.php");
        }else if($bmi>23 && $bmi<24.90){
            $_SESSION['yellow'] = "ผลคำนวณดัชนีมวลกาย  = ".$bmi."  " ."น้ำหนักเกินมาตรฐาน / ภาวะน้ำหนักเกินระยะเริ่มต้น เริ่มมีโรคแทรกซ้อนเล็กน้อย";
            header("location: index.php");
        }else if($bmi>25 && $bmi<29.90){
            $_SESSION['yellow2'] = "ผลคำนวณดัชนีมวลกาย  = ".$bmi."  " ."อ้วน / ภาวะน้ำหนักเกินมาก มีโรคแทรกซ้อนในระยะอ้วนเริ่มต้น";
            header("location: index.php");
        }else if($bmi>30){
            $_SESSION['yellow3'] = "ผลคำนวณดัชนีมวลกาย  = ".$bmi."  " ."อ้วนมาก	 / ภาวะน้ำหนักเกินมากที่สุดโอกาสการเกิดโรคแทรกซ้อนอย่าง โรคอ้วน";
            header("location: index.php");
        }else{
            $_SESSION['error'] = "มีบางอย่างผิดพลาด";
            header("location: index.php");
        }
