<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<html>
    <head>
        <script>
            function toggle() {
                if(document.getElementById("hidethis").style.display=='none') {
                    document.getElementById("hidethis").style.display = '';
                } else{
                    document.getElementById("hidethis").style.display = 'none';
                }
            }
        </script>
    </head>
    <body>
        <span onClick="toggle();">toggle</span><br /><br />
        
        <table border="1">
            <tr>
                <td>Always Visible</td>
            </tr>
            <tr id="hidethis">
                <td>Hide This</td>
            </tr>
            <tr>
                <td>Always Visible</td>
            </tr>
        </table>
    </body>
</html>
