
<!DOCTYPE html>
<html>
<head>
	<title>Comtrole de despesas</title>
</head> 
<body>

	<form action = "recebe_despesas.php" method ="post">
           <table width="60%" border="1" align="center">
               <tr>
                   <td>
                       <p>Nome: </p>
                   </td>
                   <td>
                       <input type ="text" name = "nome" size="50" > <br />
                   </td>
               </tr>
               <tr>
                   <td>
                       <p>Valor R$: </p>
                   </td>
                   <td>
                       <input type ="float" name = "Valor" size="20" > <br />
                   </td>
               <tr>
                   <td>
                       <p>Tipo: </p>
                   </td>
                   <td>
                       <select Despesa="tipo" size="1">
                           <option>Moradia</option>
                           <option>Transporte</option>
                           <option>Lazer/Informação
                           </option>
                           <option>Alimentação</option>
                           <option>Educação</option>
                           <option>Outros</option>
                       </select>
                   </td>
               </tr>
               <tr>
                   <td>
                       <p>Mês</p>
                   </td>
                   <td>
                       <select name="mes" size="1">
                           <option>Janeiro</option>
                           <option>Fevereiro</option>
                           <option>Março</option>
                           <option>Abril</option>
                           <option>Maio</option>
                           <option>Junho</option>
                           <option>Julho</option>
                           <option>Agosto</option>
                           <option>Setembro</option>
                           <option>Outubro</option>
                           <option>Novembro</option>
                           <option>Dezembro</option>
                       </select>
                   </td>
               <tr>
                   <td colspan="2">
                       <p>
                           <input type = "submit" value ="Cadastro" align="right" class="imp1">
                           	
                      </p>
                   </td>
               </tr>
           </table>
       </form>


       </body>
</html>