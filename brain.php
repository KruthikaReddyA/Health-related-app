<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brain-health form</title>

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
        <h1>Self Assessment : BRAIN</h1><br><br>
        <label for="question1">1.How often do you experience difficulty remembering names, dates, or appointments?</label><br><br>
                    <input type="radio" value="0" name="question1">Never</option><br>
                    <input type="radio" value="1" name="question1">Rarely</option><br>
                    <input type="radio"  value="2" name="question1">Sometimes</option><br>
                    <input type="radio"  value="3" name="question1">Often</option><br>
                    <input type="radio"  value="4" name="question1">Always</option>
                <br><br><br><br>


        <label for="question2">2.Do you struggle with finding the right words when speaking?</label><br><br>
        <input type="radio" value="0" name="question2">Never</option><br>
        <input type="radio" value="1" name="question2">Rarely</option><br>
        <input type="radio"  value="2" name="question2">Sometimes</option><br>
        <input type="radio"  value="3" name="question2">Often</option><br>
        <input type="radio"  value="4" name="question2">Always</option>
    <br><br><br><br>

                
                
                <label for="question3">3.How often do you feel mentally fatigued or find it hard to think clearly?</label><br><br>
                <input type="radio" value="0" name="question3">Never</option><br>
                <input type="radio" value="1" name="question3">Rarely</option><br>
                <input type="radio"  value="2" name="question3">Sometimes</option><br>
                <input type="radio"  value="3" name="question3">Often</option><br>
                <input type="radio"  value="4" name="question3">Always</option>
            <br><br><br><br>
                
                <label for="question4">4.Do you have trouble following conversations or understanding what others are saying?</label><br><br>
                <input type="radio" value="0" name="question4">Never</option><br>
                <input type="radio" value="1" name="question4">Rarely</option><br>
                <input type="radio"  value="2" name="question4">Sometimes</option><br>
                <input type="radio"  value="3" name="question4">Often</option><br>
                <input type="radio"  value="4" name="question4">Always</option>
            <br><br><br><br>

                <label for="question5">5.How often do you feel apathetic or disinterested in activities you used to enjoy?</label><br><br>
                <input type="radio" value="0" name="question5">Never</option><br>
                <input type="radio" value="1" name="question5">Rarely</option><br>
                <input type="radio"  value="2" name="question5">Sometimes</option><br>
                <input type="radio"  value="3" name="question5">Often</option><br>
                <input type="radio"  value="4" name="question5">Always</option>
            <br><br><br><br>

                <button>Submit</button>
                <br><br><br>
    </form>
    
</body>
</html>
