@extends('layouts.admin')

@section('content')
            <!-- order detail list -->
<div class="details">
               
                <!-- New Customers -->
         

            
    <div class="recentOrders">
      <div class="cardHeader">
        <h2>
           Registrar Compra </h2>


        {!! Form::open(['route'=>'purchases.store', 'method'=>'POST']) !!}
     
        <div class="form-group">
            <label for="tax">Impuesto</label>
            <input type="number" name="tax" id="tax" class="form-control" required>
        </div>
       
        <div class="form-group">
          <label for="provider_id" class="form-label">Proveedor</label>
          <select class="form-control" name="provider_id" id="provider_id">
             @foreach ($providers as $provider)
             <option value="{{$provider->id}}">{{$provider->name}}</option>   
             @endforeach 
            </select>
        </div>
        <div class="form-group">
            <label for="product_id" class="form-label">Productos</label>
            <select class="form-control" name="product_id" id="prduct_id">
            @foreach ($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>   
            @endforeach      
          </select>
        </div>

        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="price">Precio de Compra</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="button" id="agregar" class="btn btn-primary float-right">Agregar producto</button>
        </div>

        <br><br>


        </div>

        <div class="form-group">
            <h4 class="card-title">Detalles de compra</h4>
            <div class="table-responsive col-md-12">
                <table id="detalles" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Eliminar</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>SubTotal</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="4">
                                <p align="right">TOTAL:</p>
                            </th>
                            <th>
                                <p align="right"><span id="total">PEN 0.00</span> </p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4">
                                <p align="right">TOTAL IMPUESTO (18%):</p>
                            </th>
                            <th>
                                <p align="right"><span id="total_impuesto">PEN 0.00</span></p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4">
                                <p align="right">TOTAL PAGAR:</p>
                            </th>
                            <th>
                                <p align="right"><span align="right" id="total_pagar_html">PEN 0.00</span> <input type="hidden"
                                        name="total" id="total_pagar"></p>
                            </th>
                        </tr>
                    </tfoot>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <button type="submit" id="guardar" class="btn btn-primary mr-2">Registrar</button>
        {!! Form::close() !!}
  
    </div>
</div>
@endsection

