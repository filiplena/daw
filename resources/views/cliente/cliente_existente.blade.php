@extends('layouts.app')

@section('content')
<div class="panel panel-default">
                            <div class="panel-heading main-color-bg">
                                <h3 class="panel-title">Cliente</h3>
                            </div>

                            <div class="panel-body">
                                <form action="#" id="uploadForm" enctype="multipart/form-data" method="post">
                                    @csrf
                                       <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Detalhes do Cliente</h4>
                            <div class="modal-body">
                                 

                        <!-------detalhes do cliente------------>    
                        <div>
                        	<hr>
                        	Nome: {{$cliente->nome}}<br>
                        	NUIT: {{$cliente->nuit}}
                        </div>
                        <!-------./detalhes do cliente------------>  

                            <br>
                           
                        </div>
                        <div class="modal-footer">
                            <a href="{{ url('clientes/create') }}" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Voltar</a>
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
                                       <option value="BI"> BI</option>\n\
                                       <option value="Passaporte"> Passaporte\n\
                                       <option value="Dire"> Dire\n\
                                       <option value="Carta Conducao"> Carta Conducao \n\
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
