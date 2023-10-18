@props(['paginate'])

{{ $paginate->withQueryString()->links() }}