<script>
  $('#tags').select2({
    tags: true,
    // multiple: true,
    // templateSelection: function (item) { return item.name; },
    // createTag: function (params) {
    //   var term = $.trim(params.term);
    //   if (term === '') {
    //     return null;
    //   }
    //
    //   return {
    //     id: term,
    //     text: term,
    //     newTag: true
    //   };
    // },
    ajax: {
      delay: 200,
      url: '{{ route('ajax-tags') }}',
      dataType: 'json',
      data: function (params) {
        var queryParameters = {
          query: params.term,
          _token: '{{ csrf_token() }}'
        };

        return queryParameters;
      }
    },
{{--      @if(isset($data) && !empty($data))--}}
{{--      data: [--}}
{{--        @foreach($data as $entry)--}}
{{--        {id: '{{ $entry }}', text: '{{ $entry }}'},--}}
{{--        @endforeach--}}
{{--      ]--}}
{{--      @endif--}}
  }).trigger('change');
</script>
