<!DOCTYPE html>

<html>
<head>
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- Turn off zooming on Mobile page-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="../js/createQuote.js"></script>
<link rel ="stylesheet" href="../css/hammer.css">
<link rel ="stylesheet" href="../css/navbar.css">
<link rel ="stylesheet" href="../css/form.css">
<link rel ="stylesheet" href="../css/quote.css">





</head>

<body>
        <nav>
                <li class="navbariconhomepage">   <a href="landing.html">Blocks.io  </a></li>
                <li class="navbaraboutpage"><a href="about.html">About</a></li>
                <li class="navbarcontactuspage"><a href="contactus.html">Contact Us</a></li>
                <li class="navbarpricingpage"><a href="pricing.html">Pricing</a></li>
                <li class ="iconloginepage"><a href="Landing.html">Register</a></li>
        
        </nav>


    <div class="panel1">
    </div>
    <div class="panel2">
        <form method="POST" id="formQuote">
                <label id="label1">Customer Name</label>
                <input id="input1" type="text" name="customerName"><br>
                <label id="label2">Email Address</label>
                <input id="input2" type="E-Mail" name="customerEmail"><br>
                <label id="label3">Phone Number</label>
                <input id="input3" type="number" name="customerPhonenumber"><br>
                
                </form>


    </div>

    <div class="panel3"> </div>

    <div class="panel4"> </div>

        <div class="panel5">

                <label id="taskNameLabel" class="taskNameLabel" >Task Name </label>
                <label id="materialNameLabel" class="materialNameLabel" >Material Name </label>
                <label id="materialCostLabel" class="materialCostLabel">Material Cost </label>
                <label id="lineCostLabel"class= "lineCostLabel">Line Item Cost</label><br>
                

                <input type="Text" id="taskNameInput" class="taskNameInput"  placeholder="Task" form="formQuote">
                <input type="Text" id="materialNameInput" class="materialNameInput"  placeholder="Material"form="formQuote">
                <input type="Text" id="materialCostInput" class="materialCostInput"  placeholder="Material Cost" form="formQuote">
                <input type="Text" id="lineCostInput" class="lineCostInput"  placeholder="Cost" form="formQuote" >
                <br>
        
        </div>

        <div class="panel6">
                        
        </div>

        <div class="panel7">
                        <button type="SUBMIT" class="button1" formaction=".....php" form="formQuote" >Add Task</button>        
                        <button type="SUBMIT" class="button2" formaction=".....php" form="formQuote">Remove Task</button>
                        <button type="SUBMIT" class="button3" formaction=".....php" form="formQuote">Email</button>
                        <button type="SUBMIT" class="button4" formaction=".....php" form="formQuote"> Save</button>
        </div>
        <div class="panel8">
            <!--    <button type="SUBMIT" class="button3" formaction=".....php" form="formQuote">Email</button>
                <button type="SUBMIT" class="button4" formaction=".....php" form="formQuote"> Save</button>
             <button type="SUBMIT" class="button5" formaction=".....php" form="formQuote">Print</button>
        -->
        </div>

</body>

</html>