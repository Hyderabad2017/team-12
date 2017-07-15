<?php
$username = 'root';
$password = '';
$databasename = 'learningcurve';
$servername = 'localhost';
try {
    $db = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
}
catch (PDOException $e) {
    die ($e->getMessage());
}
$query = $db-> prepare('SELECT id, mcv1 FROM progress');
// 'year' and 'semester' here get substituted into the query for ':year' and ':semester' respectively
// this is a secure way of passing in parameters to the query so that a malicious user cannot use SQL injection to penetrate your security
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

$data = array(
    // create whatever columns are necessary for your charts here
    'cols' => array(
        array('type' => 'string', 'label' => 'id'),
        array('type' => 'number', 'label' => 'mcv1')
    )
    //'rows' => array()
);

foreach ($results as $row) {
    // 'student' and 'grade' here refer to the column names in the SQL query
    $data['rows'][] = array('c' => array(
        array('v' => $row['id']),
        array('v' => $row['mcv1'])
    ));
}
?>
<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
        <script type="text/javascript">
            function drawChart() {
                var data = new google.visualization.DataTable(<?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>);
                var chart = new google.visualization.ColumnChart(document.querySelector('#chart_div'));
                chart.draw(data, {
                    height: 400,
                    width: 600
                });
            }
            function changeGraph(x){
                window.alert(x);
            }
            google.load('visualization', '1', {packages:['corechart'], callback: drawChart});
        </script>
    </head>
    <body>
		<table width="100%">
			<tr>
				<td>
					<?php
						$conn=new mysqli('localhost','root','','learningcurve');
						$row=array();
						$q="SELECT name,StudRollNum from studentreg";
						$result=$conn->query($q);
						if($result->num_rows>0)
							{
                                $temp="cksjafkas";
							while($val=$result->fetch_assoc())
							{
                                ?>
                                <a OnClick = changeGraph("<?=$val['StudRollNum']?>")><?=$val['name']?></a>
                                <?php
								//echo "<a Onclick='changeGraph($val[StudRollNum])'>".$val['name']."</a>"."<br>"."<br>";
							}
						}

					?> 

				</td>
				<td><div id="chart_div"></div></td>
			<tr>
    </body>
</html>