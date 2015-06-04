<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>




    </head>
    <body>
        <div><h1>Cadastro de Pessoas</h1></div>
          
        <div class="container" style="background-color:  "







             <div class="row">

                <div class="col-md-5">


                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" id='inpnome' class="form-control" placeholder="Nome">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Endereco</label>
                            <div class="col-sm-10">
                                <input type="text"  class="form-control" placeholder="Endereco">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Sexo</label>
                                <div class="col-sm-10">
                                    <label class="checkbox-inline">
                                        <input type="radio" name='Sexo'  value="M"> Masculino
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="radio" name='Sexo' value="F"> Feminino
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" checked > Ativo
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" id='btn-enviar'  class="btn btn-success">Cadastrar</button>
                                </div>
                            </div>
                    </form>


                </div>

                        <div class="col-md-6">
                            Listagem de Pessoas
                        </div>
                        
                        
                        
                        <script>
                        
                        $('#btn-enviar').click(function()){
                          if($('#inpnome').val()==''){
                              alert('prencha o nome');
                          }
                            
                        }
                        
                        
                        
                        
                        
                        
                        </script>











                
                </body>
                </html>












































