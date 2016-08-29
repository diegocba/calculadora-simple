function fx_calcular()
{
var result;
var tipo_op;
var nombre1;
var nombre2;
var valor1;
var valor2;
var nombre_op;
var valor_op;

nombre1= document.calculadora.input1.value; 
nombre2= document.calculadora.input2.value;;

valor1= document.calculadora.input1.value;
valor2= document.calculadora.input2.value;

nombre_op= document.calculadora.op.name;
valor_op=document.calculadora.op.value;  

switch(valor_op)
{
	case "s":
			result = parseInt(valor1) + parseInt(valor2);
			tipo_op= "+";
			break;
	case "r":
			result = valor1 - valor2;
			tipo_op= "-";
			break;
	case "m":
			result = valor1 * valor2;
			tipo_op= "*";
			break;
	case "d":
			result = valor1 / valor2;
			tipo_op= "/";
			break;
}
alert("operacion " + valor1 + tipo_op + valor2 + "=" + result);
//alert ("el resultado es: " + result);
}
