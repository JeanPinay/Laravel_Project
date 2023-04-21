extends ('layout')
section ('cats')

foreach ($cats as $cat)
<x-cats-preview-card :cat="$cat"/>
@endforeach

@endsection