
           <div class="row">
            <div role="tabpanel">
                <div>
                    <ul id="myTab" class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active"><a href="#">Alumno</a></li>
                        <li role="presentation"><a href="#">Carrera</a></li>
                    </ul>
                </div>



                <div class="col-md-12">
                  <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <a class="navbar-brand" href="#">Alumnos</a>
                      </div>

                      <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                          <select class="selectpicker"  data-live-search="true" data-live-search-placeholder="Search" data-actions-box="true">
                              <option>Alumno 1</option>
                              <option>Alumno 2</option>
                              <option>Alumno 3</option>
                              <option>Alumno 4</option>
                          </select>
                        </div>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Buscar" name="q">

                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-default">Buscar</button>
                      </form>

                    </div>
                    <!-- .container-fluid -->
                  </nav>
                </div>


                <div class="col-md-12">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                            <th>Nombre Video</th>
                            <th>Vistas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Video de Matematicas</td>
                                <td>157</td>
                            </tr>
                            <tr>
                                <td>Video de Metodos</td>
                                <td>378</td>
                            </tr>
                            <tr>
                                <td>Ecuaciones</td>
                                <td>125</td>
                            </tr>
                            <tr>
                                <td>POO</td>
                                <td>173</td>
                            </tr>
                            <tr>
                                <td>Estadistica</td>
                                <td>19</td>
                            </tr>
                            <tr>
                                <td>IA</td>
                                <td>92</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                </div>


                <div id="grafica" class="col-md-12">
                </div>
                <script type='text/javascript'>
                    $(function () {
                        $('#grafica').highcharts({
                            title: {
                                text: 'Alumno tal'
                            },
                            subtitle: {
                                text: 'Muestra la estadistica de los videos vistos por el alumno.'
                            },
                            xAxis: {
                                categories: ['Video de Matematicas', 'Video de Metodos','Ecuaciones','POO','Estadistica','IA']
                            },
                            yAxis: {
                                title: {
                                    text: 'Visitas'
                                },
                            },
                            series: [{
                                name: 'Visitas',
                                data: [157, 378, 125, 173, 19, 92]
                            }]
                        });
                    });
                </script>


            </div>
