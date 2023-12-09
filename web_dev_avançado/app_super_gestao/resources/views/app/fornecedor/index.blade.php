<h1>Fornecedores</h1>

{{-- @dd($fornecedores) --}}


@php
    //if(empty($variavel)) { } // retornar true se a variavel estiver definida
@endphp



@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
        
        Iteração atual: {{ $loop->iteration }}
        <br />
        Fornecedor: {{$fornecedor['nome']}}
        <br />
        Status: {{$fornecedor['status']}}
        <br />
        CNPJ: {{$fornecedor['cnpj'] ?? 'Dado não foi preenchido'}}
        <br />
        Telefone: ({{$fornecedor['ddd'] ?? ''}}) {{$fornecedor['telefone'] ?? ''}}
        <br />
        @if($loop->first)
            Primeira iteração do loop
        @elseif($loop->last)
            Última iteração do loop
            <br />
            Total de registros: {{ $loop->count }}
        @endif
        <hr />
    @empty
        Não existem fornecedores cadastrados !!!
    
    @endforelse
@endisset

