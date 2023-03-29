


document.getElementById('boton').addEventListener('click', function() { 
console.log ("hola mundo desde EventListener");
document.getElementById("demo").innerHTML = "Muchas gracias por tu LIKE!"

});



document.getElementById('boton_color').addEventListener('click', function() { 
        document.body.style.backgroundColor = '#FF0000';
    
    });


    document.getElementById('boton_default').addEventListener('click', function() { 
        document.body.style.backgroundColor = 'coral';
    
    });

    document.getElementById('boton_ocultar').addEventListener('click', function() { 
        document.getElementById("demo").style.display = 'none';
    
    });

const collection = document.getElementsByClassName("prueba");
for (let i=0; i < collection.length; i++)  {
collection[i].style.backgroundColor = "green";

}

if (localStorage.pagecount) 
{localStorage.pagecount=Number(localStorage.pagecount)+1;} 

else
{localStorage.pagecount=1;}
        document.write("Gracias por visitar mi CV, has ingresado "+localStorage.pagecount+" veces ");


      

