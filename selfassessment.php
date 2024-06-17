<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self-Assessment</title>
    <style>
        #one{
            font-family: segoe script;
            text-align: center;
        }
        h1{
            text-align: center;
            font-family: monospace;
        }
        .container{
        display: grid;
        width: 96%;
        gap: 10rem;
        grid-template-columns: 30rem 30rem 30rem ;
        margin: 0 auto;
      }
      button{
        padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            margin-left: 40%;
      }
      h4,p{
        margin-left: 10px;
      }
      .mentalhealth{
        box-shadow:2px;
        border-radius: 20px;
        background-color:lightblue;
      }
      .mentalhealth:hover{
        background-color: #7278af;
      }

      .brain{
        border-radius: 20px;
        background-color:lightblue;

      }
      .brain:hover{
        background-color: #7278af;

      }

      .infectiousDiseases{
        border-radius: 20px;
        background-color:lightblue;

      }
      .infectiousDiseases:hover{
        background-color: #7278af;

      }
      .chronicdiseases{
        border-radius: 20px;
        background-color:lightblue;

      }
      .chronicdiseases:hover{
        background-color: #7278af;

      }
      .autoimmunedisorder{
        border-radius: 20px;
        background-color:lightblue;

      }
      .autoimmunedisorder:hover{
        background-color: #7278af;

      }
      .geneticdisorder{
        border-radius: 20px;
        background-color:lightblue;

      }
      .geneticdisorder:hover{
        background-color: #7278af;

      }
      .environmentalhealthissue{
        border-radius: 20px;
        background-color:lightblue;

      }

      .environmentalhealthissue:hover{
        background-color: #7278af;

      }
      .substanceusedisorder{
        border-radius: 20px;
        background-color:lightblue;

      }
      .substanceusedisorder:hover{
        background-color: #7278af;

      }
      .nutritionaldisorder{
        border-radius: 20px;
        background-color:lightblue;

      }
      .nutritionaldisorder:hover{
        background-color: #7278af;

      }
      .reproductivehealthissue{
        border-radius: 20px;
        background-color:lightblue;
      }

      .reproductivehealthissue:hover{
        background-color: #7278af;

      }
      body{
        background-color: rgb(61, 114, 135);
      }
    </style>
</head>
<body>
    <div class="nav">
    <h1>Health Self-Evaluation</h1>
    <p id="one">~Empowering you to understand and manage your health</p><br><br>
    </div>
    <div class="container">
       <div class="mentalhealth">
        <h4>Mental Health</h4>
        <p>Take a test to know about your Mental health</p><br>
         <button onclick="mentalHealth()">Take Test</button><br><br>
       </div>


       <div class="brain">
        <h4>Brain health</h4>
        <p>Take a test to know about your brain health</p><br>
         <button onclick="brainHealth()">Take Test</button><br><br>
       </div>


       <div class="infectiousDiseases">
        <h4>infectious Diseases</h4>
        <p>Take a test to know about your infectious Disease</p><br>
         <button onclick="infectiousDiseases()">Take Test</button><br><br>
       </div>

       <div class="chronicdiseases">
        <h4>chronic Diseases</h4>
        <p>Take a test  to know about your chronic disease</p><br>
         <button onclick="chronicdiseases()">Take Test</button><br><br>
       </div>


       <div class="autoimmunedisorder">
        <h4>Autoimmune Disorder</h4>
        <p>Take a  test to know about your autoimmune disorder</p>
         <button onclick="autoimmunedisorder()">Take Test</button><br><br>
       </div>

       <div class="geneticdisorder">
        <h4>Genetic Disorder</h4>
        <p>Take a test to know about your genetic disorder</p><br>
         <button onclick="geneticdisorder()">Take Test</button><br><br>
       </div>

       <div class="nutritionaldisorder">
        <h4>Nutritional Disorder</h4>
        <p>Take a  test to know about your nutritional disorder</p>
         <button onclick="nutritionaldisorder()">Take Test</button><br><br>
       </div>

       <div class="environmentalhealthissue">
        <h4>Environmental Health Issue</h4>
        <p>Take a test to know about your environmental health issue</p><br>
         <button onclick="environmentalhealthissue()">Take Test</button>
       </div>

       <div class="substanceusedisorder">
        <h4>Substance Use Disorder</h4>
        <p>Take a test  to know about your substance use disorder</p><br>
         <button onclick="substanceusedisorder()">Take Test</button><br><br>
       </div>

       <div class="reproductivehealthissue">
        <h4>Reproductive Health Issue</h4>
        <p>Take a  test to know about your reproductive health issue</p><br>
         <button onclick="reproductivehealthissue ()">Take Test</button><br><br>
       </div>
    </div>
</body>
<script>
    function mentalHealth() {
        window.location.href ="mentalHealth.html";
    }

    function brainHealth() {
        window.location.href ="brain.html";
    }

    function infectiousDiseases() {
        window.location.href ="Infectiousdiseases.html";
    }

    function chronicdiseases() {
        window.location.href ="chronicdiseases.html";
    }

    function autoimmunedisorder() {
        window.location.href ="AutoimmuneDisorder.html";
    }

    function geneticdisorder() {
        window.location.href ="GeneticDisorders.html";
    }

    function nutritionaldisorder() {
        window.location.href ="NutritionalDisorders.html";
    }

    function environmentalhealthissue() {
        window.location.href ="EnvironmentalHealthIssues.html";
    }

    function substanceusedisorder() {
        window.location.href ="SubstanceUseDisorder.html";
    }

    function reproductivehealthissue() {
        window.location.href ="ReproductiveHealthIssues.html";
    }

   
</script>

</html>
