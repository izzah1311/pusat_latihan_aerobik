function calculate(){
    var height = document.getElementById("height").value/100;
    weight = document.getElementById("weight").value;
    var bmi = weight / ( height * height);
    var result;
    document.getElementById("papar").innerHTML;
    
    if (bmi <=18.5){
        document.getElementById("papar").innerHTML = "Your BMI is " + bmi + "<br> UNDERWEIGHT";
    }
    else if (bmi >=18.5 && bmi <=24.9){
        document.getElementById("papar").innerHTML = "Your BMI is " + bmi + "<br> NORMAL"
    }
    else if (bmi >=25 && bmi <=29.9){
        document.getElementById("papar").innerHTML = "Your BMI is " + bmi + "<br> OVERWEIGHT"
    }
    else if (bmi >=30){
        document.getElementById("papar").innerHTML = "Your BMI is " + bmi + "<br> OBESITY"
    }
    }