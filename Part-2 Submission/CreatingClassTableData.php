<?php

$link = mysqli_connect('localhost','root','','Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO Class(name,meets_at,room,fid)
    VALUES
    (
('Data Structures','MWF 10','R128',489456522),
('Database Systems','MWF 12:30-1:45','1320 DCL',142519864),
('Operating System Design','TuTh 12-1:20','20 AVW',489456522),
('Archaeology of the Incas','MWF 3-4:15','R128',248965255),
('Aviation Accident Investigation','TuTh 1-2:50','Q3',011564812),
('Air Quality Engineering','TuTh 10:30-11:45','R15',011564812),
('Introductory Latin','MWF 3-4:15','R12',248965255),
('American Political Parties','TuTh 2-3:15','20 AVW',619023588),
('Social Cognition','Tu 6:30-8:40','R15',159542516),
('Perception','MTuWTh 3','Q3',489221823),
('Multivariate Analysis','TuTh 2-3:15','R15',090873519),
('Patent Law','F 1-2:50','R128',090873519),
('Urban Economics','MWF 11','20 AVW',489221823),
('Organic Chemistry','TuTh 12:30-1:45','R12',489221823),
('Marketing Research','MW 10-11:15','1320 DCL',489221823),
('Seminar in American Art','M 4','R15',489221823),
('Orbital Mechanics','MWF 8','1320 DCL',011564812),
('Dairy Herd Management','TuTh 12:30-1:45','R128',356187925),
('Communication Networks','MW 9:30-10:45','20 AVW',141582651),
('Optical Electronics','TuTh 12:30-1:45','R15',254099823),
('Intoduction to Math','TuTh 8-9:30','R128',489221823)";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

mysqli_close($link);

?>