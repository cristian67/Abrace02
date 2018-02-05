
<div class="container-fluid top-60">
  <div class="jumbotron mt-5 bg-inverse text-white rounded-0">
                  <div align="center">
                    <div class="card card-outline-warning mb-3 text-center">
                        <div class="card-block">
                          <blockquote class="card-blockquote">
                            <h1 style="color: white !important;">Contacto</h1> <hr>
                              {!! Form::open(['url'=>'enviar' , 'method'=>'POST']) !!}
                              {{ csrf_field() }}
                              <div class="form-group ">
                                <label style="font-size: 1.4em">Nombre</label>
                                  <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                      {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresar nombre'])  !!}
                                  </div>
                                  @if($errors->has('name'))
                                      <span style="color: orangered"> {{$errors->first('name')}}</span>
                                  @endif
                              </div>
                              <div class="form-group">
                                    <label style="font-size: 1.4em">Email</label>
                                      <div class="input-group margin-bottom-sm">
                                          <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                          {!! Form::text('mail',null,['class'=>'form-control', 'placeholder'=>'Ingresar e-mail'])  !!}
                                      </div>
                                  @if($errors->has('mail'))
                                      <span style="color: orangered"> {{ $errors->first('mail') }}</span>
                                  @endif
                              </div>
                              <div class="form-group">
                                  <label style="font-size: 1.4em">Fono</label>
                                  <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                      {!! Form::text('fono',null,['class'=>'form-control', 'placeholder'=>'Ingresar telefono'])  !!}
                                  </div>
                              </div>
                              <div class="form-group ">
                                  <label style="font-size: 1.4em">Asunto</label>
                                  <div class="input-group margin-bottom-sm">
                                      <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                      {!! Form::text('asunto',null,['class'=>'form-control', 'placeholder'=>'Ingresar titulo o problema '])  !!}
                                  </div>
                                  @if($errors->has('asunto'))
                                      <span style="color: orangered"> {{$errors->first('asunto')}}</span>
                                  @endif
                              </div>
                                <div class="form-group">
                                    <label style="font-size: 1.4em" for="exampleTextarea">Mensaje</label>
                                    {!! Form::textarea('content',null,['class'=>'form-control', 'placeholder'=>'Ingresar mensaje']) !!}
                                </div>
                              @if($errors->has('content'))
                                  <span style="color: orangered"> {{$errors->first('content')}}</span>
                              @endif
                              <div class="form-group my-4">
                                  <h6><label style="font-size: 1.4em">*campo obligatorios: nombre, email, asunto y mensaje</label></h6>
                                  <button type="submit" onclick = "return confirm('Confirmar para mandar correo')"
                                          class="btn btn-outline-primary btn-lg btn-block" > Enviar email </button>
                              <!--  {!! Form::submit('Enviar Email',['class'=>'btn btn-outline-primary btn-lg btn-block']) !!} -->
                              </div>
                              {!! Form::close() !!}
                            <footer>Nos pondremos en contacto contigo.. <cite title="Source Title">Gracias</cite></footer>
                          </blockquote>
                        </div>
                    </div>
                  </div>
                      <div class="card card-outline-info mb-3 text-center">
                        <div class="card-block">
                          <blockquote class="card-blockquote">
                            <h3>Dirección</h3> <hr>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3330.026747895621!2d-70.61054200000001!3d-33.422547!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf66122dc547%3A0xe7ec534f3a506b44!2sAv.+Providencia+2133%2C+Providencia%2C+Regi%C3%B3n+Metropolitana%2C+Chile!5e0!3m2!1ses!2scl!4v1508840306887" width="320" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>                            <footer>Av. Providencia 2133 / Oficina 310 / Metro Los Leones
                              Providencia, Región Metropolitana
                              CHILE <cite title="Source Title">Te esperamos ...</cite></footer>
                              <i class="fa fa-phone" aria-hidden="true"> +56 - 2 - 816 80 00</i>
                          </blockquote>
                        </div>
                      </div>
              <div class="col-lg-12 my-4">
                  <p ALIGN=center >Contact information: <a href="mailto:someone@example.com">carlosbravo@abrace.cl</a>.</p>
              </div>
      <div align="center">
          <div class="col-xs-12">
              <h6><i class="fa fa-copyright" role="copyright"></i> 2017 Abrace
                  <address class="footer-address" role="company address">Santiago, CH</address>
                  <span class="sean"> All Rights Reserved  </span>
              </h6>
          </div>
      </div>
    </div>

</div>