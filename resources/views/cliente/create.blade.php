@extends('layouts.app')

@section('content')
<div class="panel panel-default">
                            <div class="panel-heading main-color-bg">
                                <h3 class="panel-title">Adicionar uma Requisição</h3>
                            </div>

                            <div class="panel-body">
                                <form action="{{ url('clientes') }}" id="uploadForm" enctype="multipart/form-data" method="post">
                                    @csrf
                                       <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Dados do Cliente </h4>
                            <div class="modal-body">
                                 

                        <!-------autocomplite do cliente------------>    

                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
                          <input type="text" class="form-control" placeholder="procurar cliente nr. doc, nuit, nome" aria-describedby="basic-addon1" id="cliente_autocomplete_id">
                        </div>

                        <hr style="color: black">

                        <script>
                                $(function () {                              
                                    $("#cliente_autocomplete_id").autocomplete({
                                        source: '/arquivo/public/cliente-autocomplete',
                                            select: function (key, value) {
                                                window.location.href = '/arquivo/public/cliente-add-processo/' + value.item.id
                                            }
                                    });
                                });
                        </script>

                        <!-------./autocomplite do cliente------------>  

                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="NomeID" name="nome" placeholder="Nome" required=""  oninvalid="this.setCustomValidity('Digite o nome do cliente')" oninput="this.setCustomValidity('')" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nuit</label>
                                <input type="number" class="form-control" id="nuitID" name="nuit" placeholder="Nuit" required="" oninvalid="this.setCustomValidity('Digite o Nuit')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tipo Documento</label>
                                <select class="form-control" name="tipo_documento" required="">
                                    <option value="BI"> BI
                                    <option value="Passaporte"> Passaporte
                                    <option value="Dire"> Dire
                                    <option value="Carta Conducao"> Carta Conducao  
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Numero Documento</label>
                                <input type="text" class="form-control" name="nr_documento" id="exampleInputEmail1" placeholder="Numero Document" required="" oninvalid="this.setCustomValidity('Digite o Numero do docuemnto')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Tipo de Cliente: </label>
                                <input type="radio" name="tipo_cliente" value="Singular" required="" checked="" /> Singular 
                                <input type="radio" name="tipo_cliente" value="Empresarial" required=""  /> Empresarial
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Provincia</label>
                                <select class="form-control" name="provincia_id" required="">
                                    <option value="1"> Maputo
                                    <option value="2"> Gaza
                                    <option value="3"> Inhambane
                                    <option value="4"> Sofala
                                    <option value="5"> Manica
                                    <option value="6"> Tete
                                    <option value="7"> Zambezia
                                    <option value="8"> Cabo Delgado
                                    <option value="9"> Niassa
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Enderenço </label>
                                <input type="text" class="form-control" name="enderenco" id="enderencoID" placeholder="Enderenço do cliente">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contacto </label>
                                <input type="text" class="form-control" name="contacto" id="contactoID" placeholder="Contacto" required="" oninvalid="this.setCustomValidity('Digite o contacto do cliente')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email </label>
                                <input type="text" class="form-control" name="email" id="emailID" placeholder="Email">
                            </div>
                             <div id="divUpload"></div>
                            <button type="button" class="btn pull-left" id="maisUpload"> Anexar <i class="glyphicon glyphicon-paperclip"></i></button><br><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Cancelar</button>
                            <button type="" class="btn btn-primary">Continuar <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
                        </div>
                                </form>
                            </div>
                        </div>
<script>
    $(document).ready(function () {    
        //incrementar botao de upload
        $("#maisUpload").click(function () {
          
                    $("#divUpload").append('<div class="row" >\n\
                    <div class="col-md-6">\n\
                        <div class="form-group"><label>Tipo de Documento</label>\n\
                             <div class="form-group">\n\
                                <div class="input-group">\n\
                                    <div class="input-group-addon"><i class="ti-world"></i></div> \n\
                                    <select class="form-control form-type" name="tipo[]">\n\
                                       <option value="BI "> BI</option>\n\
                                       <option value="Nuit"> Nuit\n\
                                       <option value="Dire"> Dire\n\
                                       <option value="Carta Conducao"> Carta Conducao \n\
                                       <option value="Processo Fisico"> Processo Fisico\n\
                                    </select>\n\
                                 </div>\n\
                             </div>\n\
                        </div>\n\
                    </div>\n\
                    <div class="col-md-6">\n\
                        <div class="form-group"><label>Anexar Documento</label>\n\
                            <div class="form-group">\n\
                                <div class="input-group">\n\
                                    <div class="input-group-addon"><i class="fa fa-paperclip fa-2x"></i></div> \n\
                                    <input type="file" name="upload[]" class="form-control form-type">\n\
                                </div>\n\
                            </div\n\
                        </div>\n\
                    </div>\n\
                </div>');
                
            });      
    });
</script>
@endsection
