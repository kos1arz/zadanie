 window.onload = function() {  
   function wymiana()
    {
        var xHttp = new XMLHttpRequest();
        xHttp.open('GET','https://api.abucoins.com/products/ticker', true);

        xHttp.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                var ourData = JSON.parse(this.responseText);
                var htmlString = ""; 
                for(var i in ourData)
                    {
                       htmlString += htmlString+'<option>' + ourData[i].product_id + '</option>'; 
                    }
                document.getElementById("from").innerHTML = htmlString;
                document.getElementById("to").innerHTML = htmlString;
            }
        }    
        xHttp.send();
    }
 }