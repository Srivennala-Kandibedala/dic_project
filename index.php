<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo-mini.jpeg">
    <head>
        <title>Single Window Application</title>
        
        <style>
            th {
                text-align: left;
            }
            h3 {
                text-align:center;
            }
            h4 {
                text-align: right;
            }
            .input-field input {
                border: 1px solid black;
                border-radius: 4px;
                /*background-color:aliceblue;*/
                display:inline-block;
                font-size: 15px;
                padding: 7px 9px;
                margin: 0;
                transition: all .3s;
                box-sizing: border-box;  
            }
            .input-field input[type=submit] {
                width: 50%;
                margin-top: 80px;
                font-size: 20px;
                color: white;
                background-color: black;
            }
            .input-field input:focus {
                border: 2px solid black;
            }
            .col-25 {
                float: left;
                width: 25%;
            }
            .col-75 {
                float: left;
                width: 75%;
            }
            @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }
        </style>
    </head>
    <script>
        function calculateTotal(className, id) {
            var x=document.getElementsByClassName(className)
            var sum=0
            for(let i=0;i<x.length;i++)
                sum+=parseInt(x[i].value ? x[i].value:0)

            document.getElementById(id).value=sum
        }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <body>
        
        <nav>
            <ul>
                <li><a href="login.php">ADMIN LOGIN</a></li>
                <li><a href="contact.html">CONTACT</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="index.php" class="active">HOME</a></li>
            </ul>
        </nav>
        
        <div class="body">
        <h1 style="text-align:center;">APPLICATION FORM FOR DISTRICT LEVEL SINGLE WINDOW AGENCY</h1>
        <form class="input-field" action=success.php method=post>
            <table>
                <tr><td><b>1. </b>Name of the promoter Industrial Undertaking</td><td><input type=text name="p_name"></td></tr>
                <tr><td>Area</td><td><input type=text name=p_area ></td></tr>
                <tr><td>Town</td><td><input type=text name=p_town></td></tr>
                <tr><td>Tehsil/Taluk</td><td><input type=text name=p_taluk></td></tr>
                <tr><td>District</td><td><input type=text name=p_district></td></tr>
                <tr><td>State</td><td><input type=text name=p_state></td></tr>
                <tr><td>Pin Code</td><td><input type=text name=p_pin></td></tr>
                <tr><td>Phone Number</td><td><input type=number name=p_phno></td></tr>
                <tr><td>E-mail</td><td><input type=email name=p_email></td></tr>
                <tr><td>Aadhar No</td><td><input type=number name=p_aadhar required min=12 max=12></td></tr>
                
                <th><b>2. </b>Indicate whether this proposal is for:</th>
                <tr><td><input type=radio name=purpose value="1">Establishment of a New Undertaking</td></tr>
                <tr><td><input type=radio name=purpose value="2">Effecting substantial Expansion</td></tr>
                <tr><td><input type=radio name=purpose value="3">Manufacture of New Articles/Diversification</td></tr>
                
            
                <tr><th><b>3. </b>Location of the proposal undertaking</th></tr>
                <tr><td>Place/Town</td><td><input type=text name=l_town ></td></tr>
                <tr><td>Tehsil/Taluk</td><td><input type=text name=l_taluk ></td></tr>
                <tr><td>District</td><td><input type=text name=l_district></td></tr>
                <tr><td>State</td><td><input type=text name=l_state ></td></tr>
                <tr><td>Pin Code</td><td><input type=text name=l_pin></td></tr>            
            
                <tr><th colspan="2"><b>4. </b>Item(s) of manufacture: In case of more than one item, Supplementary sheet may be used:</th></tr>
                <tr><td>(a) Item of manufacture</td><td><input type=text name=item></td></tr>
                <tr><td>(b) Item description</td><td><input type=text name=item_desc></td></tr>
                <tr><td>(c) Proposed Annual Capacity</td><td><input type=text name=item_capacity></td></tr>
                <tr><td>(d) Unit of capacity</td><td><input type=text name=item_unit></td></tr>
                
                <tr><th><b>5. </b>By-products/Co-products</th><td><input type=text name=by_product></td></tr>
                
                <tr><th><b>6. </b>Production(projected)</th><th>Quantity</th></tr>
                <tr><td>1st year</td><td><input type=text name=year1></td></tr>
                <tr><td>2nd year</td><td><input type=text name=year2></td></tr>
                <tr><td>3rd year</td><td><input type=text name=year3></td></tr>
                <tr><td>4th year</td><td><input type=text name=year4></td></tr>
                <tr><td>5th year</td><td><input type=text name=year5></td></tr>
                
                <tr><th><b>7. </b>Employment:(All figures in Nos.)</th><th>Existing</th><th>Proposed</th></tr>
                <tr><td>(a) Managerial</td><td><input type=number name=existing(a) class="projCost" oninput="calculateTotal('projCost','totalProjCost')"></td><td><input type=number name=proposed(a) class="projCost1" oninput="calculateTotal('projCost1','totalProjCost1')"></td></tr>
                <tr><td>(b) Supervisory</td><td><input type=number name=existing(b) class="projCost" oninput="calculateTotal('projCost','totalProjCost')"></td><td><input type=number name=proposed(b) class="projCost1" oninput="calculateTotal('projCost1','totalProjCost1')"></td></tr>
                <tr><td>(c) Skilled</td><td><input type=number name=existing(c) class="projCost" oninput="calculateTotal('projCost','totalProjCost')"></td><td><input type=number name=proposed(c) class="projCost1" oninput="calculateTotal('projCost1','totalProjCost1')"></td></tr>
                <tr><td>(d) Unskilled</td><td><input type=number name=existing(d) class="projCost" oninput="calculateTotal('projCost','totalProjCost')"></td><td><input type=number name=proposed(d) class="projCost1" oninput="calculateTotal('projCost1','totalProjCost1')"></td></tr>
                <tr><td>(e) Total (Auto Calculated)</td><td><input readonly id='totalProjCost' name=existing(e)></td><td><input readonly id='totalProjCost1' name=proposed(e)></td></tr>
                
                <tr><th><b>8. </b>Expected date of Commencement of trial Production</th></tr>
                <tr><td>Date</td><td><input type=date name=trail_date></td></tr>
                
                <tr><th><b>9. </b>Expected date of Commencement of Commercial Production</th></tr>
                <tr><td>Date</td><td><input type=date name=Commercial_date></td></tr>
                
                <tr><th><b>10. </b>Cost of the Project</th><th>Rs. in lakhs</th></tr>
                <tr><td>(a) Land and Building</td><td><input type=number name=cost(a) class="proCost" oninput="calculateTotal('proCost','totalProCost')"></td></tr>
                <tr><td>(b) Plant and Machinery</td><td><input type=number name=cost(b) class="proCost" oninput="calculateTotal('proCost','totalProCost')"></td></tr>
                <tr><td>(c) Working Capital Margin</td><td><input type=number name=cost(c) class="proCost" oninput="calculateTotal('proCost','totalProCost')"></td></tr>
                <tr><td>(d) Others</td><td><input type=number name=cost(d) class="proCost" oninput="calculateTotal('proCost','totalProCost')"></td></tr>
                <tr><td>Total</td><td><input readonly id='totalProCost' name="cost_total"></td></tr>
                
                <tr><th><b>11. </b>Means of Finance</th><th>Rs. in lakhs</th></tr>
                <tr><td>(a) Promoter's Equity</td><td><input type=number name=finance(a) class="projCost2" oninput="calculateTotal('projCost2','totalProjCost2')"></td></tr>
                <tr><td>(b) Term Loans</td><td><input type=number name=finance(b) class="projCost2" oninput="calculateTotal('projCost2','totalProjCost2')"></td></tr>
                <tr><td>(c) Institutions Equity</td><td><input type=number name=finance(c) class="projCost2" oninput="calculateTotal('projCost2','totalProjCost2')"></td></tr>
                <tr><td>Total</td><td><input readonly name=finance_total id='totalProjCost2'></td></tr>
                
                <tr><th><b>12. </b>Turnover</th><th>Amount in lakhs</th></tr>
                <tr><td>(a) Existing</td><td><input type=number name="turnover(a)" class="projCost3" oninput="calculateTotal('projCost3','totalProjCost3')"></td></tr>
                <tr><td>(b) Proposed</td><td><input type=number name="turnover(b)" class="projCost3" oninput="calculateTotal('projCost3','totalProjCost3')"></td></tr>
                <tr><td>Total</td><td><input readonly name="turnover_total" id='totalProjCost3'></td></tr>
                
                <tr><th><b>13. </b>Land Details</th></tr>
                <tr><td>(a) Existing</td><td><input type=text name=land(a)></td></tr>
                <tr><td>(b) Required</td><td><input type=text name=land(b)></td></tr>
                
                <tr><th><b>14. </b>Power</th></tr>
                <tr><th>KPTCL Contract Demand(in KVA)</th></tr>
                <tr><td>(a) Exisiting</td><td><input type=text name=power(a) class="projCost4" oninput="calculateTotal('projCost4','totalProjCost4')"></td></tr>
                <tr><td>(b) Proposed</td><td><input type=text name=power(b) class="projCost4" oninput="calculateTotal('projCost4','totalProjCost4')"></td></tr>
                <tr><td>Total</td><td><input readonly id='totalProjCost4' name=power_total></td></tr>
                
                <tr><th><b>15. </b>Water requirement(in litres/per day)</th></tr>
                <tr><td>(a) Required</td><td><input type=text name=water(a)></td></tr>
                <tr><td>(b) Available</td><td><input type=text name=water(b)></td></tr>
                <tr><td>(c) Source of water</td><td><input type=text name=water(c)></td></tr>
                
                <tr><th><b>16. </b>Present status and Assistance required from the Government</th></tr>
                <tr><td>(a) Present Status</td><td><input type=text name=status></td></tr>
                <tr><th>(b) Assistance required from Govt. of Karnataka</th></tr>
                <tr><td>(1) Land</td><td><input type=text name=land></td></tr>
                <tr><td>(2) PCB Construct/Environment Clearance</td><td><input type=text name=pcb></td></tr>
                <tr><td>(3) Incentives and Concessions sought</td><td><input type=text name=incentives></td></tr>
                
                <tr><td style="text-align:center;" colspan="2"><input type=submit name=submit value=Submit></td></tr>
            </table>
                <!--<h3>DECLARATION</h3>
                <p style="text-align:center;">We here by declare that the above statement's are true and correct to the best of my knowlwdge and best of my/our knowledge and belief.</p>
                <div style="float:left;">Place:<input type="text" name="place"><br><br>
                    Date:<input type="date" name="date"></div>
                <div style="float:right;">Signature of the Promoter<br><br>
                Name in Block letter<br><br>
                    Designation of the Promoter</div>-->
            
        </form>
        </div>
    </body>
</html>


