
@extends('layouts.checkout')
        <body>
            <div class="contentCheckout">
                <div class="container">
                        <img class="logo" src="{{asset("img/Logo_aurora.png")}}" alt="Name Your company" />
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="checkout-items">
                                <div class="list-checkout">
                                    <ul class="steps-checkout">
                                        <li class="steps active-check"><a href="#"> <span class="fa fa-truck"></span> Envio</a></li>
                                        <li class="steps"><a href="#"> <span class="fa fa-credit-card"></span> Forma de Pago</a></li>
                                        <li class="steps"><a href="#"> <span class="fa fa-check"></span> Confirmacion</a></li>
                                    </ul>
                                </div>
        
                                <div class="contentShipping">
                                    <form id="form-shipping" class="" name="form-shipping" action="#">
        
                                        <fieldset>
        
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <label class="control-label" for="nome">Nombre</label>
                                                        <input name="nome" class="form-control chkndo-input"  placeholder="Nombre" type="text">
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <label class="control-label" for="surname">Apellidos</label>
                                                        <input name="surname" class="form-control chkndo-input" placeholder="Apellido" type="text">
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12 col-md-6">
                                                        <label class="control-label" for="surname">Numero de Celular</label>
                                                        <input name="surname" class="form-control chkndo-input" placeholder="Ingresar el Tel" type="text">
                                                    </div>
                                                    <div class="col-md-12 col-md-6">
                                                        <label class="control-label" for="email">Email</label>
                                                        <input name="email" class="form-control chkndo-input" placeholder="Ingresar el Mail" type="text">
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="control-label" for="district">Codigo Postal</label>
                                                        <input name="district" class="form-control chkndo-input" placeholder="Ingrese el Codigo Postal" type="text">
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="button" class="btn btn-primary btn-lg btn-block next-chk">Next</button>
                                                    </div>
                                                </div>
                                            </div>     
                                        </fieldset> 
                                    </form>
                                </div>
        
        
        
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="cartForCheckout">
                                <h2>Carrito de Compras</h2>
                    <div class="contenCart">
                      
                      <div class="products-forCheckout">
                        <ul class="ul-forCheckoutItems">
                          <div class="divider"></div>
                          <li class="countCheckout">
                            <p class="objetc">Envio</p>
                            <p class="price">$30.00</p>
                          </li>
                          
                          <li class="countCheckout">
                            <p class="objetc">Comprar</p>
                            <p class="price">$300.00</p>
                          </li>
                          <div class="divider"></div>
                          
                          <li class="countCheckout">
                            <p class="objetc totalPrice">Total</p>
                            <p class="price totalPrice">$330.00</p>
                          </li>
                        </ul>
                      </div>
                      
                    </div>
                                
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>