{{-- <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Venta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="container">
	      	<div class="row">
            {!! Form::open(['route' => 'sells.store', 'method' => 'POST']) !!}
            {!! Form::token() !!}
	      		<div class="col">
			        {!! Form::label('ci', 'Cedula', ['class' => "form-group col-form-label $errors->has('ci') ? 'has-danger' : '' "]) !!}
			        {!! Form::number('ci', null, ['class' => "form-control $errors->has('ci') ? ' is-invalid' : '' " , 'id' => 'ci']) !!}
	      		</div>
	      	</div>

      		<div class="row">
      			<div class="col">
			        {!! Form::label('name', 'Nombre', ['class' => "form-group col-form-label $errors->has('name') ? 'has-danger' : '' "]) !!}
      				{!! Form::text('name', null, ['class' => "form-control $errors->has('name') ? ' is-invalid' : '' " , 'id' => 'name']) !!}
  				</div>
      			<div class="col">
			        {!! Form::label('adress', 'Direccion', ['class' => "form-group col-form-label $errors->has('adress') ? 'has-danger' : '' "]) !!}
					{!! Form::text('adress', null, ['class' => "form-control $errors->has('adress') ? ' is-invalid' : '' " , 'id' => 'adress']) !!}
      			</div>
      		</div>

      		<div class="row">
      			<div class="col">
			        {!! Form::label('phone', 'Telefono', ['class' => "form-group col-form-label $errors->has('phone') ? 'has-danger' : '' "]) !!}
      				{!! Form::text('phone', null, ['class' => "form-control $errors->has('phone') ? ' is-invalid' : '' " , 'id' => 'phone']) !!}
  				</div>
      		</div>

          <br>

      			<h6 class="text-center">
      				Articulos
      			</h6>

            <hr>

            <div class="text-right">
              <a href="#" id='addArticle' class="btn btn-info input-cuadrado">Add</a>
            </div>

          <div id='articulos'>

          </div>

          <div>
            {!! Form::label('subTotal', 'SubTotal', ['class' => "form-group col-form-label $errors->has('subTotal') ? 'has-danger' : '' "]) !!}
            <input id='subTotal' class="form-control" name="subTotal" disabled />
          </div>


           <div class="row">
              <div class="col-md-6">
              {!! Form::label('iva', 'Iva', ['class' => "form-group col-form-label $errors->has('iva') ? 'has-danger' : '' "]) !!}
              {!! Form::select('iva',$iva,null, ['placeholder' => 'Seleccione..', 'class' => 'form-control input-cuadrado iva', 'onchange'=>'iva()']) !!}
            </div>
            <div class="col-md-6">
              <label>Total iva</label>
              <input type="" name="totalIva" id="totalIva" class="form-control" disabled>
            </div>
           </div>


          <div>
            <label>Total a pagar:</label>
            <input id='total' class="form-control" name="total" disabled />
          </div>

      	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="sumbit" class="btn btn-primary input-cuadrado">Guardar</button>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div> --}}

<div class="container">
          @if (count($errors) > 0)
          <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            <p>Corrige los siguientes errores:</p>
              <ul>
                  @foreach ($errors->all() as $message)
                      <li>{{ $message }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <div class="row">
            {!! Form::open(['route' => 'sells.store', 'method' => 'POST']) !!}
            {!! Form::token() !!}
            <div class="col">
              {!! Form::label('ci', 'Cedula', ['class' => "form-group col-form-label $errors->has('ci') ? 'has-danger' : '' "]) !!}
              {!! Form::number('ci', null, ['class' => "form-control $errors->has('ci') ? ' is-invalid' : '' " , 'id' => 'ci']) !!}
            </div>
          </div>

          <div class="row">
            <div class="col">
              {!! Form::label('name', 'Nombre', ['class' => "form-group col-form-label $errors->has('name') ? 'has-danger' : '' "]) !!}
              {!! Form::text('name', null, ['class' => "form-control $errors->has('name') ? ' is-invalid' : '' " , 'id' => 'name']) !!}
          </div>
            <div class="col">
              {!! Form::label('adress', 'Direccion', ['class' => "form-group col-form-label $errors->has('adress') ? 'has-danger' : '' "]) !!}
          {!! Form::text('adress', null, ['class' => "form-control $errors->has('adress') ? ' is-invalid' : '' " , 'id' => 'adress']) !!}
            </div>
          </div>

          <div class="row">
            <div class="col">
              {!! Form::label('phone', 'Telefono', ['class' => "form-group col-form-label $errors->has('phone') ? 'has-danger' : '' "]) !!}
              {!! Form::text('phone', null, ['class' => "form-control $errors->has('phone') ? ' is-invalid' : '' " , 'id' => 'phone']) !!}
          </div>
          </div>

          <br>

            <h6 class="text-center">
              Articulos
            </h6>

            <hr>

            <div class="text-right">
              <a href="#" id='addArticle' class="btn btn-info input-cuadrado">Agregar Libro</a>
            </div>

          <div id='articulos'>

          </div>

          <div>
            {!! Form::label('subTotal', 'SubTotal', ['class' => "form-group col-form-label $errors->has('subTotal') ? 'has-danger' : '' "]) !!}
            <input id='subTotal' class="form-control" name="subTotal" disabled />
          </div>


           <div class="row">
              <div class="col-md-6">
              {!! Form::label('iva', 'Iva', ['class' => "form-group col-form-label $errors->has('iva') ? 'has-danger' : '' "]) !!}
              {!! Form::select('iva',$iva,null, ['class' => 'form-control input-cuadrado iva', 'onchange'=>'getIva()']) !!}
            </div>

            <div class="col-md-6">
              <label>Total iva</label>
              <input type="" name="totalIva" id="totalIva" class="form-control">
            </div>
           </div>

          <div>
            <label>Total a pagar:</label>
            <input id='total' class="form-control" name="total" />
          </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="sumbit" class="btn btn-primary input-cuadrado">Imprimir y Guardar</button>
      </div>
      {!! Form::close() !!}
    </div>

@push('js')
	<script>
		$('#ci').change(function() {
			// e.preventDefault();
			let ci = $('#ci').val(); //Jquery

      if (ci == '') {
        return;
      }

			// if(ci != ''){
				$.get(`{{ url('/client/') }}/${ci}`, res =>{
					if(res.name){
					$('#name').val(res.name);
					$('#adress').val(res.adress);
					$('#phone').val(res.phone);
          }
				});
			// }
		});

    let i = 1;

    $('#addArticle').click(function(e) {
      e.preventDefault();

      $('#articulos').append(
        `
          <div class="row" id='add${i}'>
            <div class="col-md-3">
                {!! Form::label('id_book', 'Articulo', ['class' => "form-group col-form-label $errors->has('phone') ? 'has-danger' : '' "]) !!}
                {!! Form::select('id_book[]',$books,null, ['placeholder' => 'Seleccione..', 'class' => 'form-control input-cuadrado id_book']) !!}
            </div>
          </div>
          <hr>
        `
      );

      $('.id_book').change(function(){
        let id = this.value;
        $.get(`{{ url('/books') }}/${id}`, (res) => {
          console.log(res);
          $('#add'+i).append(`
              <div class="col-md-2">
                {!! Form::label('precio', 'Precio', ['class' => "form-group col-form-label"]) !!}
                <input type="text" name="precio[]" value="${res.precie}" id="precio[${i}]" class="form-control precio${i}">
              </div>
              <div class="col-md-2">
                {!! Form::label('newquantity', 'Cantidad', ['class' => "form-group col-form-label"]) !!}
                <input type="text" name="newquantity[]" id="newquantity[]" class="form-control newquantity${i}" onchange='AllTotal(${i})'>
              </div>
              <div class="col-md-2">
                {!! Form::label('total', 'Total', ['class' => "form-group col-form-label"]) !!}
                <input type="text" name="total[${i}]" value="" id="total[${i}]" class="form-control total total${i}" disabled>
              </div>

              <div class="col-md-2">
                {!! Form::label('eliminar','Eliminar', ['class' => "form-group col-form-label"]) !!}
                <button class='btn btn-danger btn-sm' onclick="deleteRow(${i})">E</button>
              </div>
            `);
            i++
        });
      })



    });

    function AllTotal(e){
      let newquantity = $('.newquantity'+e).val();
      let precie = $('.precio'+e).val();
      let total = newquantity * precie;
      $('.total'+e).val(total);
      $("#subTotal").html(subTotal);
      subTotal();
    }

    function subTotal(){
      var subTotal1 = 0;
      $(".total").each(function(){
              subTotal1 = parseInt(subTotal1) + parseInt($(this).val());
          });
        $("#subTotal").val(subTotal1);
        getIva();
    }

    function deleteRow(e){
      $('#add'+e).html('');
      subTotal();
    }

    function getIva() {
      var iva = $("#iva").val();
      var subTotal = $("#subTotal").val();

      var totalIva = parseFloat(iva/100)*parseFloat(subTotal);
      var total = parseFloat(subTotal) + parseFloat(totalIva);

      $("#totalIva").val(totalIva);
      $("#total").val(total);
    }

	</script>
@endpush
