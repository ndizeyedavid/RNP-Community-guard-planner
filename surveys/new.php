<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Survey | Community Guard Planner</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/sub.css">
    <style>
        form{
            width: 100%;
            padding: 15px;
        }
        .row{
            width: 100%;
            gap: 20px;
        }
        .col{
            width: 50%;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        .inp-cont{
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        label{
            font-weight: 700;
            font-size: 18px;
        }
        input:not(input[type='submit']){
            border-radius: var(--border-md);
            border: 1px solid var(--secondary);
            outline: none;
        }
        .answers{
            display: flex;
            flex-wrap: wrap;
        }
        .answer{
            flex: 50%;
            margin-top: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .answer input{
            width: 20px;
            height: 20px;
        }
        .submit{
            width: 100%;
            align-items: center;
            justify-content: center;
            font-family: Inter;
            font-size: 17px;
            font-weight: 400;
            margin-top: 10px;
            border-radius: 40px;
            border: none;
        }
    </style>
</head>

<body>
    <div class="form-container">

        <div class="form" style="gap: 10px;">
            <h3>New Survey</h3>
            <button class="btn" onclick="window.history.back();" style="position: absolute; top: 5px; left: 50px;">Back</button>
            <form class="signup" method="POST" action="#" style="margin-top: 20px;">
                <div class="row">
                    <div class="col">

                        <div class="inp-cont">
                            <label for="id">Survey Id</label>
                            <input type="text" name="id" readonly>
                        </div>

                        <div class="inp-cont">
                            <label for="title">Survey Title</label>
                            <input type="text" name="title" readonly>
                        </div>

                        <h3 style="font-size: 18px;">Questions</h3>

                        <div class="inp-cont">
                            <label for="q1">Q1</label>
                            <textarea name="q1" id="q1"></textarea>
                            <div class="answers">
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                            </div>
                        </div>

                        <div class="inp-cont">
                            <label for="q1">Q2</label>
                            <textarea name="q1" id="q1"></textarea>
                            <div class="answers">
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                            </div>
                        </div>
                                                
                    </div>
                    <hr>
                    <div class="col">
                        <div class="inp-cont">
                            <label for="q1">Q3</label>
                            <textarea name="q1" id="q1"></textarea>
                            <div class="answers">
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                            </div>
                        </div>

                        <div class="inp-cont">
                            <label for="q1">Q4</label>
                            <textarea name="q1" id="q1"></textarea>
                            <div class="answers">
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                            </div>
                        </div>

                        <div class="inp-cont">
                            <label for="q1">Q5</label>
                            <textarea name="q1" id="q1"></textarea>
                            <div class="answers">
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                                <div class="answer">
                                    <input type="checkbox" name="ans1" value="Bulgery/Theft"> Bulgery/Theft
                                </div>
                            </div>
                            <button class="btn submit" type="submit">Submit</button>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>

        <div class="bg" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.4)), url('../assets/img/survey.jpeg');background-position: center;background-size: cover;background-repeat: no-repeat;">
            <h3>Survey Creation Form</h3>
        </div>

    </div>
    <script src="../assets/js/main.js"></script>
</body>

</html>