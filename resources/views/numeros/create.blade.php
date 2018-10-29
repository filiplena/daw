@extends('layouts.app')

@section('content')

 <div class="panel panel-default">
                            <div class="panel-heading main-color-bg">
                                <h3 class="panel-title">Adicionar uma Requisição</h3>
                            </div>

                            <div class="panel-body">
                                <form action="{{ url('cliente-salvar') }}" id="uploadForm" enctype="multipart/form-data" method="post">
									@csrf
                                    <div class="modal-body">
                                       
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Numero Celular</label>
                                            <input type="text" name="numero" class="form-control" id="exampleInputEmail1" placeholder="numero">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pacote</label>
                                            <select class="form-control" name="pacote">
                                                <option value="1x Duo 600Mt"> 1x Duo 600Mt
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Escolher Telefone</label>
                                            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone" value="Nenhum"/>
                                            <script>
                                                $(function () {
                                                var telefone = [
                                                        "Nokia N10",
                                                        "Nokia Lumia x",
                                                        "Iphone 10",
                                                        "Iphone 8",
                                                        "Sumsung Galaxy 5",
                                                        "Sumsung Galaxy 7",
                                                        "Sumsung S6",
                                                        "Sumsung S7",
                                                        "Sumsung S8",
                                                        "Sumsung Note 5",
                                                        "Sumsung Note 6",
                                                        "Sumsung Note 7"
                                                ];
                                                $("#telefone").autocomplete({
                                                source: telefone
                                                });
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label>Descrição do documento</label>
                                            <textarea name="editor1" class="form-control" placeholder="texto"></textarea>
                                            <script>
                                                CKEDITOR.replace('editor1');
                                            </script>
                                        </div>
                                        <div class="form-inline">
                                        <div class="form-group">
                                           <label for="exampleInputFile">Anexar Documentos</label>
                                            <input type="file" id="uploadFile" onchange="move()" name="file">
                                             <p class="help-block">Anexar Imagens do tipo png, jpg, gif <form: errors path="file" /></p>
                                        </div>
                                        <div class="form-group">
                                          <div style="width: 170px;background-color: white">
                                                <div style="width: 0%;height: 25px;background-color: #8c8c8c; text-align: center;line-height:  30px;color: white" id="myBar">0%</div >                                               
                                           </div >
                                        </div>
                                          <script>
                                            function move() {
                                              var elem = document.getElementById("myBar");   
                                              var width = 0;
                                              var id = setInterval(frame, 0);
                                              function frame() {
                                                if (width >= 100) {
                                                  clearInterval(id);
                                                } else {
                                                  width++; 
                                                  elem.style.width = width + '%'; 
                                                  elem.innerHTML = width * 1  + '%';
                                                }
                                              }
                                            }
                                            </script>
                                      </div>
                                    
                                       

                                    </div>
                                    <div class="modal-footer" >
                                        <button type="submit" class="btn btn-primary" id="uploadSubmit"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Submeter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
						

@endsection
