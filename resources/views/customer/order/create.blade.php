@extends('layouts.app')

@section('content')



    <div class="row">
        <!-- left column -->
        <div class="col-xs-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div><!-- /.box-header -->




                @include('errors._check')

              <div class="container">
                  {!! Form::open(['route'=>'customer.order.store']) !!}

                  <div class="form-group">
                      <label>Total:</label>
                      <p id="total"></p>
                      <a href="#" id="btnNewItem" class="btn btn-default">Novo Item</a>

                      <table class="table table-bordered">
                          <thead>
                          <tr>
                              <th>Produto</th>
                              <th>Quantidade</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>
                                  <select class="form-control" name="items[0][product_id]">
                                    @foreach($products as $p)
                                        <option value="{{$p->id}}" data-price="{{$p->price}}">{{$p->name}} --- {{$p->price}}</option>
                                    @endforeach
                                  </select>
                              </td>
                              <td>
                                  {!! Form::text('items[0][qtd]',1,['class'=>'form-control']) !!}
                              </td>
                          </tr>
                          </tbody>
                      </table>

                  </div>

                  {!! Form::submit('Criar Pedido',['class'=>'btn btn-success dave-btn-salvar'])!!}

                  {!! Form::close() !!}

              </div>






            </div><!-- /.box -->




        </div><!--/.col (left) -->
        <!-- right column -->

    </div><!--/.col (right) -->


@endsection

@section('post-script')


    <script>
     $('#btnNewItem').click(function () {

         var row = $('table tbody > tr:last'),
                 newRow = row.clone(),
                 length = $("table tbody tr").length;

         newRow.find('td').each(function () {

             var td = $(this),
                     input = td.find('input, select'),
                     name = input.attr('name');

             input.attr('name', name.replace((length - 1) + "", length + ""));

         });

         newRow.find('input').val(1);
         newRow.insertAfter(row);


     });

        $(document.body).on('click','select', function () {
            calculateTotal();
        });


     $(document.body).on('blur','input', function () {
            calculateTotal();
        });


        function calculateTotal() {

            var total = 0,
                    trLen = $('table tbody tr').length,
                    tr = null, price, qtd;

            for (var i=0; i < trLen; i++) {

                tr = $('table tbody tr').eq(i);
                price = tr.find(':selected').data('price');
                qtd = tr.find('input').val();
                total += price * qtd;
            }

            $('#total').html(total);

        }



 </script>


@endsection