

function subbtnADD()
{
    var getNum1= parseInt(document.getElementById("num1").value);
    var getNum2= parseInt(document.getElementById("num2").value);
    console.log(getNum1);
    console.log(getNum2);
    var result=getNum1+getNum2;
    console.log(result);
 document.getElementById("output").innerHTML=result;

}

function subbtnSub()
{
    var getNum1=parseInt(document.getElementById("num3").value);
    var getNum2=parseInt(document.getElementById("num4").value);
    console.log(getNum1);
    console.log(getNum2);
    var result=getNum1-getNum2;
    console.log(result);
 document.getElementById("output").innerHTML=result;

}

function subbtnMul()
{
    var getNum1=parseInt(document.getElementById("num5").value);
    var getNum2=parseInt(document.getElementById("num6").value);
    console.log(getNum1);
    console.log(getNum2);
    var result=getNum1*getNum2;
    console.log(result);
    document.getElementById("output").innerHTML=result;
}

function subbtnDiv()
{
    var getNum1=parseInt(document.getElementById("num7").value);
    var getNum2=parseInt(document.getElementById("num8").value);
    console.log(getNum1);
    console.log(getNum2);
    var result=getNum1/getNum2;
    console.log(result);
    document.getElementById("output").innerHTML=result;   

}