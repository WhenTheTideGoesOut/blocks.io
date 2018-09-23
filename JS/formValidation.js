

/*
    This script is designed to clean the data entered by the user so that it limits security risk to the PWA.
    It will also ensue data has actually been entered before the data is cleaned 
    Started: 12 July 2017
    Author:WhenTheTideGoesOut

*/



    function validateForm()
   
     {
            var stringToTest = document.forms[x][y].value;

                if(stringToTest==" ")
                    {
                        alert ("All Fields Must be Completed!");
                        return false;
                    }
                else 
                    for (i-0;i<stringToTest.length;i++)
                        {
                            

                        }
     }