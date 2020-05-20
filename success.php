<html>
    <head><style>
        body {
            background-image: url(industry.jpeg);
            color: white;
            font-size: 20px;
            font-style: oblique;
        }
        .success{
            font-size: 25px;
        }
        </style>
    </head>
    <body>
<?php
$p_name=$_POST['p_name'];
$p_area=$_POST['p_area'];
$p_town=$_POST['p_town'];
$p_taluk=$_POST['p_taluk'];
$p_district=$_POST['p_district'];
$p_state=$_POST['p_state'];
$p_pin=$_POST['p_pin'];
$p_phno=$_POST['p_phno'];
$p_email=$_POST['p_email'];
$p_aadhar=$_POST['p_aadhar'];
$p_purpose=$_POST['purpose'];
$l_town=$_POST['l_town'];
$l_taluk=$_POST['l_taluk'];
$l_district=$_POST['l_district'];
$l_state=$_POST['l_state'];
$l_pin=$_POST['l_pin'];
$item=$_POST['item'];
$item_desc=$_POST['item_desc'];
$item_capacity=$_POST['item_capacity'];
$item_unit=$_POST['item_unit'];
$by_product=$_POST['by_product'];
$year1=$_POST['year1'];
$year2=$_POST['year2'];
$year3=$_POST['year3'];
$year4=$_POST['year4'];
$year5=$_POST['year5'];
$existing_a=$_POST['existing(a)'];
$proposed_a=$_POST['proposed(a)'];
$existing_b=$_POST['existing(b)'];
$proposed_b=$_POST['proposed(b)'];
$existing_c=$_POST['existing(c)'];
$proposed_c=$_POST['proposed(c)'];
$existing_d=$_POST['existing(d)'];
$proposed_d=$_POST['proposed(d)'];
$existing_e=$_POST['existing(e)'];
$proposed_e=$_POST['proposed(e)'];
$trail_date=$_POST['trail_date'];
$commercial_date=$_POST['Commercial_date'];
$cost_a=$_POST['cost(a)'];
$cost_b=$_POST['cost(b)'];
$cost_c=$_POST['cost(c)'];
$cost_d=$_POST['cost(d)'];
$cost_total=$_POST['cost_total'];
$finance_a=$_POST['finance(a)'];
$finance_b=$_POST['finance(b)'];
$finance_c=$_POST['finance(c)'];
$finance_total=$_POST['finance_total'];
$turnover_a=$_POST['turnover(a)'];
$turnover_b=$_POST['turnover(b)'];
$turnover_total=$_POST['turnover_total'];
$land_a=$_POST['land(a)'];
$land_b=$_POST['land(b)'];
$power_a=$_POST['power(a)'];
$power_b=$_POST['power(b)'];
$power_total=$_POST['power_total'];
$water_a=$_POST['water(a)'];
$water_b=$_POST['water(b)'];
$water_c=$_POST['water(c)'];
$status=$_POST['status'];
$land=$_POST['land'];
$pcb=$_POST['pcb'];
$incentives=$_POST['incentives'];
$dbc=mysqli_connect("localhost","root","","dic") or die("Connection error");

$query="Insert into swa1 values('$p_name','$p_area','$p_town','$p_taluk','$p_district','$p_state','$p_pin','$p_phno','$p_email','$p_aadhar','$p_purpose','$l_town','$l_taluk','$l_district','$l_state','$l_pin','$item','$item_desc','$item_capacity','$item_unit','$by_product','$year1','$year2','$year3','$year4','$year5','$existing_a','$proposed_a','$existing_b','$proposed_b','$existing_c','$proposed_c','$existing_d','$proposed_d','$existing_e','$proposed_e','$trail_date','$commercial_date','$cost_a','$cost_b','$cost_c','$cost_d','$cost_total','$finance_a','$finance_b','$finance_c','$finance_total','$turnover_a','$turnover_b','$turnover_total','$land_a','$land_b','$power_a','$power_b','$power_total','$water_a','$water_b','$water_c','$status','$land','$pcb','$incentives')";

$data=mysqli_query($dbc,$query) or die("Query Error");
if($data)
{?>
    <div class="success"> Single Window Application Regitration Successful</div>   

<?php   
}
else{
    echo"Error";
}
    ?></body>
</html>
