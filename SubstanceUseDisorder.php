<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substance Use Disorder form</title>

    <style>
        form{
            background-color:#f7f2ec;
            font-family: monospace;
            width: 60%;
            margin-left: 250px;
            border-radius: 20px;

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
        label{
            margin-left:30px;
        }
        h1{
            text-align: center;
        }
        input{
            margin-left:40px ;
        }
    </style>
</head>
<body bgcolor="#304a6b">
    
    <form>
        <br>
        <h1>Self Assessment : SUBSTANCE USE DISORDER</h1><br><br>
        <label for="question1">1.Which substances do you currently use or have used in the past?</label><br><br>
                    <input type="radio" value="0" name="question1">Alcohol</option><br>
                    <input type="radio" value="1" name="question1">Tobbaco/Nicotine</option><br>
                    <input type="radio"  value="2" name="question1">Cocaine</option><br>
                    <input type="radio"  value="3" name="question1">Marijuana/Cannabis</option><br>
                    <input type="radio"  value="4" name="question1">Other</option>
                <br><br><br><br>


        <label for="question2">2.How long have you been using substances?</label><br><br>
        <input type="radio" value="0" name="question2">Less than 1 year</option><br>
        <input type="radio" value="1" name="question2">1-5 years</option><br>
        <input type="radio"  value="2" name="question2">5-10 years</option><br>
        <input type="radio"  value="3" name="question2">more than 10years</option>
            <br><br><br><br>

                
                
                <label for="question3">3.Have you ever sought treatment or counseling for substance use?</label><br><br>
                <input type="radio" value="0" name="question3">Yes</option><br>
                <input type="radio" value="1" name="question3">No</option><br>
                <input type="radio"  value="2" name="question3">Considering it </option><br>
                <input type="radio"  value="3" name="question3">Unsure</option>            <br><br><br><br>
                
                <label for="question4">4.Do you use substances to cope with stress, anxiety, or other emotions?</label><br><br>
                <input type="radio" value="0" name="question4">Never</option><br>
                <input type="radio" value="1" name="question4">Rarely</option><br>
                <input type="radio"  value="2" name="question4">Sometimes</option><br>
                <input type="radio"  value="3" name="question4">Often</option><br>
                <input type="radio"  value="4" name="question4">Always</option>
            <br><br><br><br>

                <label for="question5">5.Do you believe your mental health affects your substance use, or vice versa?</label><br><br>
                <input type="radio" value="0" name="question5">Yes</option><br>
                <input type="radio" value="1" name="question5">No</option><br>
                <input type="radio"  value="2" name="question5">Unsure</option>
            <br><br><br><br>

                <button>Submit</button>
                <br><br><br>
    </form>
    
</body>
</html>
