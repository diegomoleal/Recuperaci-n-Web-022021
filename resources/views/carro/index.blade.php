@extends('layouts.app')

@section('template_title')
    Carro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Carro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('carros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cliente</th>
										<th>H Entrada</th>
										<th>Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carros as $carro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $carro->cliente }}</td>
											<td>{{ $carro->H_entrada }}</td>
											<td>{{ $carro->salida }}</td>

                                            <td>
                                                <form action="{{ route('carros.destroy',$carro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('carros.show',$carro->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('carros.edit',$carro->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $carros->links() !!}
            </div>
        </div>
    </div>
@endsection
