@extends('master')
@section('content') 

        @if (Session::has('item_delete'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('item_delete') }}
            </div>
        @endif

        @if (Session::has('item_update'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('item_update') }}
            </div>
        @endif
        
        @if (Session::has('item_create'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('item_create') }}
            </div>
        @endif
        
        @foreach($items as $item)
        
            <table class="table">
                <thead>
                    <tr> 
                        <th scope="col">Nazwa:</th>
                        <th scope="col">Opis:</th>
                        <th scope="col">Cena:</th>
                    </tr>
                </thead>

                <tbody>
                    <tr> 
                        <td scope="row">{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <a href="{{ action('ItemsController@edit', $item['id']) }}"><button class="btn btn-primary">Edytuj</button></a>
                        </td>
                        <td>
                            <form action="{{'/'.$item->id}}" method="post">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Usuń</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        @endforeach

        <br/>
        <a href="/create"><button class="btn btn-success">Dodaj produkt</button></a>

@endsection
