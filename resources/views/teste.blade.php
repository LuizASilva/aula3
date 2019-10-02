@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TESTECONTROLLER</div>

                <div class="card-body">
                   
                   Oi, TESTECONTROLLER!
                </div>

                {{--<form action="/api/testePOST" method="post"> 
                    
                    <input type="submit" value="Enviar"/>
                </form>--}}

                {{--<form action="/testePOST" method="post"> 
                    @csrf                    
                    <input type="text" name="nome" id="nome"/>
                    <input type="submit" value="Enviar"/>
                </form>--}}

                {{--<form action="/testePUT" method="post"> 
                        @csrf
                        @method('put')
                        <input type="text" name="nome" id="nome"/>
                        <input type="submit" value="Enviar"/>
                </form>--}}

                {{--<form action="/testePATCH" method="post"> 
                        @csrf
                        @method('patch')
                        <input type="text" name="nome" id="nome"/>
                        <input type="submit" value="Enviar"/>
                </form>--}}

                {{-- <form action="/testeDELETE" method="post"> 
                        @csrf
                        @method('delete')
                        <input type="text" name="nome" id="nome"/>
                        <input type="submit" value="Enviar"/>
                </form> --}}

                <form action="{{route('delete')}}" method="post"> 
                    @csrf
                    @method('delete')
                    <input type="text" name="nome" id="nome"/>
                    <input type="submit" value="Enviar"/>
            </form>

            </div>
        </div>
    </div>
</div>
@endsection
