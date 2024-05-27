<!DOCTYPE html>
<html>
<head>
    <style>
        
         /* Estilo para la paginación */
        .custom-pagination {
            list-style: none;
            display: flex;
            justify-content: center; /* Esto centrará la paginación */
            margin-top: 20px; 
        }

        /* Cambiar el color de los enlaces de paginación */
        .custom-pagination .page-link {
            color: #FF5733; /* Cambia esto al color que desees */
            background-color: #FFF;
            border: 1px solid #A66E29; /* Cambia el color del borde */
            padding: 6px 12px; /* Añade espacio interno */
            text-decoration: none; /* Elimina el subrayado de los enlaces */
            transition: background-color 0.3s ease; /* Transición suave */
        }

        /* Estilo para el enlace activo */
        .custom-pagination .page-item.active .page-link {
            color: #FFF;
            background-color: #A66E29; /* Cambia el color del fondo del enlace activo */
            border-color: #A66E29; /* Cambia el color del borde del enlace activo */
        }

        /* Estilo para los bordes redondeados */
        .custom-pagination .page-link:first-child {
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .custom-pagination .page-link:last-child {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        /* Estilo para el hover */
        .custom-pagination .page-link:hover {
            background-color: #E5E5E5; /* Cambia el color de fondo al pasar el ratón */
        }
    </style>
</head>
<body>

<div>
    <nav aria-label="Page navigation">
        <ul class="pagination custom-pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
</div>

</body>
</html>
