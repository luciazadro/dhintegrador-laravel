@section('content')
<div class='profile col-12'>
        <img src="img/Logo_aurora.png" alt="Logo de Aurora Materiales">
        <h1>Listado de Carrito de Compras
        <div class="bar">
            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span class="five"></span>
        </div>
    <h2>Carrito de Compras</h2>
    <div>
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Producto</th>
                    <th style="width:10%">Precio</th>
                    <th style="width:8%">Cantidad</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                    </tr>
            </thead>
        <tbody>
            <tr>
                <td data-th="Product">
                      <div class="row">
                         <div class="col-sm-2 hidden-xs"><img src="" alt="..." class="img-responsive" />
                        </div>
                          <div class="col-sm-10">
                              <h4 class="nomargin">Producto 1</h4>
                                   <p>Lorem ipsum dolor sit amet.</p>
                          </div>
                         </div>
        </td>
        <td data-th="Price">$100.-</td>
        <td data-th="Quantity">
          <input type="number" class="form-control text-center" value="1">
        </td>
        <td data-th="Subtotal" class="text-center">100.-</td>
        <td class="actions" data-th="">
          <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
          <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
        </td>
      </tr>
    </tbody>
    {{-- <tfoot>
      <tr>
        <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar Compra</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Total $100.-</strong></td>
        <td><a href="#" class="btn btn-success btn-block">Comprar <i class="fa fa-angle-right"></i></a></td>
      </tr>
    </tfoot> --}}
  </table>
    </div>
  </div>
@endsection